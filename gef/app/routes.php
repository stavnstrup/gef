<?php

// app/routes.php


// ------------------------------------
// Homepage (with all workshops listed)
// ------------------------------------


Route::get('/temp', function()
{
	return View::make('tempforside');
});


Route::get('/', function()
{
	return View::make('gef');
});

// ------------------
// List all workshops
// ------------------

Route::get('x', function()
{
	$workshops =  Workshop::get(array('id', 'title','freeplaces'));
	return View::make('home', compact('workshops'));
});



// ----------------------
// Show a single workshop
// ----------------------

Route::get('workshop/{wid}', function($wid)
{
	$ws =  Workshop::find($wid);
	return View::make('workshop', compact('ws'));
});





// -------------------
// Vis tilmeldingsform
// -------------------

Route::get('tilmelding/{wid}', function($wid)
{
      $ws = Workshop::find($wid);

//    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'title')->orderBy('id','asc')->get() as $name)
//    {
//        $names[$name->id] = $name->title;
//    }
    return View::make('tilmelding', compact('ws'));
});


// ----------------------------------------
// Create new tilmelding in normal workshop
// ----------------------------------------

Route::post('tilmelding/{wid}', array('before' => 'csrf', function($wid)
{
    

    $data = Input::All();

//        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s[0-3][0-9]$/',


    $rules = array (
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
//        'wid' => 'required',
    );


    $messages = array (
        'required' => 'Dette felt skal udfyldes',
        'regex' => 'Fejl i input',
    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules, $messages);

    if ($validator->fails()) {
       return Redirect::to(url('tilmelding/'.$wid))->withInput($data)->withErrors($validator);
    } else {

        $ws = Workshop::find($wid);
        if ($ws->freeplaces > 0)
        {
            $ws->freeplaces = $ws->freeplaces - 1;
            $ws->save();
            $pupil = new Pupil;
            $pupil->pupilid = Input::get('pupilid');
            $pupil->firstname = ucfirst(Input::get('firstname'));
            $pupil->lastname = ucfirst(Input::get('lastname'));
            $pupil->ODselected = false;
            $pupil->workshop_id = $ws->id;
            $pupil->save();

            return Redirect::to('/');
        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
        }

    }
}));



// -------------------------------------------------------------
// Vis tilmeldingsform operation dagsværk (Jeg skaffer arbejde)
// -------------------------------------------------------------

Route::get('od/tilmelding/har/arbejde', function()
{
//      $ws = Workshop::where('isODworkshop', '=', 'true')->get();
      $ws = Workshop::find(6);

//    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'name')->orderBy('id','asc')->get() as $name)
//    {
//        $names[$name->id] = $name->name;
//    }
    return View::make('odtilmeldinghavework', compact('ws'));
});


// --------------------------------------------------------------------------
// Create new tilmelding in Operation Dagsværk workshop (Jeg skaffer arbejde)
// --------------------------------------------------------------------------


//        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s[0-3][0-9]$/',

Route::post('od/tilmelding/har/arbejde', array('before' => 'csrf', function()
{

    $data = Input::All();

    $ws =  Workshop::find(6);

    $rules = array (
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'phone' => array('required', 'size:8'),
        'email' => 'required|email',
        'workplace' => 'required',
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
       return Redirect::to('od/tilmelding/har/arbejde')->withInput($data)->withErrors($validator);
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
            $pupil->havework = true;
            $pupil->phone = Input::get('phone');
            $pupil->email = Input::get('email');
            $pupil->workplace = Input::get('workplace');
            $pupil->save();

            return Redirect::to('/');

        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
        }
    }
}));

// -----------------------------------------------------------
// Vis tilmeldingsform operation dagsværk (Jeg ønsker arbejde)
// -----------------------------------------------------------

Route::get('od/tilmelding', function()
{
//      $ws = Workshop::where('isODworkshop', '=', 'true')->get();
      $ws = Workshop::find(7);

//    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'name')->orderBy('id','asc')->get() as $name)
//    {
//        $names[$name->id] = $name->name;
//    }
    return View::make('odtilmelding', compact('ws'));
});


// -------------------------------------------------------------------------
// Create new tilmelding in Operation Dagsværk workshop (Jeg ønsker arbejde)
// -------------------------------------------------------------------------

Route::post('od/tilmelding', array('before' => 'csrf', function()
{

    $ws =  Workshop::find(7);

    $data = Input::All();

    $rules = array (
//        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s[0-3][0-9]$/',
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'phone' => array('required', 'size:8'),
        'email' => 'required|email',
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
       return Redirect::to('od/tilmelding')->withInput($data)->withErrors($validator);
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
            $pupil->havework = false;
            $pupil->phone = Input::get('phone');
            $pupil->email = Input::get('email');
            $pupil->workplace = '';
            $pupil->save();

            return Redirect::to('/');

        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
        }
    }
}));


// -------------------------
// Administrations router
// -----------------------



    Route::get('kun/for/you/know/who', function()
    {
       return View::make('adminMain');

    });

    Route::get('kun/for/you/know/who/live', function()
    {
        $workshops =  Workshop::get(array('id', 'title','freeplaces'));
	return View::make('live',
           array('all' => Pupil::count(),
                 'od' => Pupil::where('workshop_id', '=', '6')->orWhere('workshop_id', '=', '7')->count()));
    });




// ---------------------
// List all tilmeldinger
// ---------------------

Route::get('kun/for/you/know/who/tilmeldinger', function()
{
    $pupils =  Pupil::get(array('pupilid','firstname','lastname','workshop_id'));
    return View::make('tilmeldinger', compact('pupils'));
});



// -------------------------
// List all OD tilmeldinger
// -------------------------

// List all OD tilmeldinger
Route::get('kun/for/you/know/who/odtilmeldinger', function()
{
    $pupils =  Pupil::where('workshop_id', '=', '6')->orWhere('workshop_id', '=', '7')->get();
    return View::make('odtilmeldinger', compact('pupils'));
});

