<?php

// app/routes.php

// Homepage (with all workshops listed)

Route::get('/temp', function()
{
	return View::make('tempforside');
});


// List all workshops
Route::get('/', function()
{
	$workshops =  Workshop::get(array('id', 'name','freeplaces'));
	return View::make('home', compact('workshops'));
});


// Show a single workshop
Route::get('workshop/{wid}', function($wid)
{
	$ws =  Workshop::find($wid);
	return View::make('workshop', compact('ws'));
});



// List all tilmeldinger
Route::get('tilmeldinger', function()
{
    $pupils =  Pupil::get(array('pupilid','firstname','lastname','workshop_id'));
    return View::make('tilmeldinger', compact('pupils'));
});


// List all tilmeldinger2
Route::get('tilmeldinger2', function()
{
    $pupils =  Pupil::get(array('pupilid','firstname','lastname','workshop_id'));
    return View::make('tilmeldinger2', compact('pupils'));
});




// Vis tilmeldingsform
Route::get('tilmelding/{wid}', function($wid)
{
      $ws = Workshop::find($wid);

//    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'name')->orderBy('id','asc')->get() as $name)
//    {
//        $names[$name->id] = $name->name;
//    }
    return View::make('tilmelding', compact('ws'));
});




// Create new tilmelding in normal workshop

Route::post('tilmelding/{wid}', array('before' => 'csrf', function($wid)
{
    $data = Input::All();

    $rules = array (
//        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s[0-3][0-9]$/',
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'wid' => 'required',
    );


    $messages = array (
        'required' => 'Dette felt skal udfyldes',
        'regex' => 'Fejl i input',
    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules, $messages);

    if ($validator->fails()) {
       return Redirect::to('tilmelding')->withInput($data)->withErrors($validator);
    } else {
        $ws = Workshop::find(Input::get('wid'));
        if ($ws->freeplaces > 0)
        {
            $ws->freeplaces = $ws->freeplaces - 1;
            $ws->save();
            $pupil = new Pupil;
            $pupil->pupilid = Input::get('pupilid');

            $pupil->firstname = ucfirst(Input::get('firstname'));
            $pupil->lastname = ucfirst(Input::get('lastname'));
            $pupil->ODselected = false;
            $pupil->workshop_id = Input::get('wid');
            $pupil->save();

            return Redirect::to('/');
        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
        }
    }
}));


// Vis tilmeldingsform operation dagsværk

Route::get('odtilmelding', function()
{
//      $ws = Workshop::where('isODworkshop', '=', 'true')->get();
      $ws = Workshop::find(6);

//    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'name')->orderBy('id','asc')->get() as $name)
//    {
//        $names[$name->id] = $name->name;
//    }
    return View::make('odtilmelding', compact('ws'));
});



// Create new tilmelding in Operation Dagsværk workshop


Route::post('odtilmelding', array('before' => 'csrf', function()
{

    $ws =  Workshop::find(6);

    $data = Input::All();

    $rules = array (
//        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s[0-3][0-9]$/',
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'wid' => 'required',
        'phone' => array('required', 'size:8'),
        'email' => 'required|email|unique:addresses,email',
        'workplace' => 'required_if:haswork,yes'
    );


    $messages = array (
        'required' => 'Dette felt skal udfyldes',
        'regex' => 'Fejl i input',
        'email' => 'Dette er ikke en gyldig e-mail',
        'email.unique' => 'Denne adresse findes allerede'
    );


    // Create a new validator instance.
    $validator = Validator::make($data, $rules, $messages);

    if ($validator->fails()) {
       return Redirect::to('tilmelding/dagsvaerk')->withInput($data)->withErrors($validator);
    } else {
        if ($ws->freeplaces > 0)
        {
            $ws->freeplaces = $ws->freeplaces - 1;
            $ws->save();
            $pupil = new Pupil;
            $pupil->pupilid = Input::get('pupilid');

            $pupil->firstname = ucfirst(Input::get('firstname'));
            $pupil->lastname = ucfirst(Input::get('lastname'));
            $pupil->workshop_id = $ws->id;
            $pupil->save();

            $address = new Addresse;
            $address->havework = Input::get('havework') == 'Ja';
            $address->phone = Input::get('phone');
            $address->email = Input::get('email');
            $address->workplace = Input::get('workplace');
            $address->pupil_id = $pupil->id;
            $address->save();

            return Redirect::to('/');

        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
        }
    }
}));





// Get all workshops
Route::group(array('prefix' => 'api'), function(){

        // list all workshops
        Route::get('workshops', function()
        {
                $workshops =  Workshop::where('freeplaces', '>', '0')->get(array('name', 'description'));
		return Response::json($workshops->toArray());

        });

});		    



