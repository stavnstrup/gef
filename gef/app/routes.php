<?php

// app/routes.php


// ------------------------------------
// Midlertidig Homepage 
// ------------------------------------


Route::get('/', function()
{
	return View::make('gef');
});


// ------------------------------------
// Homepage (with all workshops listed)
// ------------------------------------


Route::get('/temp', function()
{
	$workshops =  Workshop::get(array('id', 'title','freeplaces'));
	return View::make('home', compact('workshops'));
});


// ------------------------------------
// Show all participants in a Workshop
// ------------------------------------


Route::get('deltagere/{wid}', function($wid)
{
    $deltagere = Pupil::where('workshop_id', '=', $wid)->orderBy('lastname', 'asc')->get();
    return View::make('deltagere', compact('deltagere'));
});


// ----------------------
// Show a single workshop
// ----------------------

Route::get('workshop/{wid}', function($wid)
{
	$ws =  Workshop::find($wid);
	$deltager = Pupil::where('workshop_id', '=', $wid)->count();
	return View::make('workshop', compact('ws', 'deltager'));
});



// -------------------------
// 
// -------------------------


Route::get('tilmeldingsfordeling', function()
{

   $pupilnumbers = array(
        "1a" => 32, "1b" => 30, "1c" => 30, "1d" => 28, "1e" => 30, "1f" => 30,
        "1h" => 21, "1i" => 30, "1j" => 26, "1k" => 31, "1l" => 31, "1m" => 27,
        "1n" => 28, "1o" => 27, "1p" => 30,
        "2a" => 29, "2b" => 20, "2c" => 24, "2d" => 29, "2e" => 22, "2f" => 31,
        "2h" => 26, "2i" => 29, "2j" => 25, "2k" => 27, "2l" => 20, "2m" => 23,
        "2n" => 31, "2o" => 32, "3a" => 26, "3b" => 30, "3c" => 21, "3d" => 18,
        "3e" => 23, "3f" => 28, "3h" => 26, "3i" => 25, "3j" => 18, "3k" => 15,
        "3l" => 31, "3m" => 30, "3n" => 17, "3o" => 24);
 

   $pupils = Pupil::all();

   $statistics = array();

   foreach ($pupilnumbers as $class => $numbers)
   {
       $tilmeldte = Pupil::where('pupilid', '=', $class)->get()->Count();
       array_push($statistics, array("class" => $class, 
                                    "tilmeldte" => $tilmeldte,
                                    "mangler" => $numbers-$tilmeldte)); 
   }


// return var_dump($statistics);  
//   return var_dump(array('stat' => $statistics));  
   return View::make('tilmeldingsfordeling', array('stat' => $statistics));

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

        $oldregistration = Pupil::where('pupilid', '=', Input::get('pupilid'))->where(
             'firstname', '=', ucfirst(Input::get('firstname')))->where(
             'lastname', '=', ucfirst(Input::get('lastname')))->get();
        if ($oldregistration->Count()>0)
        {
           return View::make('afvist');
        }

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

            return View::make('accepteret');

        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
          return View::make('overtegnet');
        }

    }
}));

// -------------------------------------------------------------
// Vis tilmeldingsform for forsvarsdag
// -------------------------------------------------------------

Route::get('soldat/tilmelding', function()
{
    $ws = Workshop::find(1);
    return View::make('soldat', compact('ws'));
});


Route::post('soldat/tilmelding', array('before' => 'csrf', function()
{

    $data = Input::All();
    $ws = Workshop::find(1);

    $rules = array (
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'zip' => array('required', 'size:4'),
        'town' => 'required',
        'road' => 'required',
    );

    $messages = array (
        'required' => 'Dette felt skal udfyldes',
        'regex' => 'Fejl i input'
    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules, $messages);

    if ($validator->fails()) {
       return Redirect::to('soldat/tilmelding')->withInput($data)->withErrors($validator);
    } else {

        $oldregistration = Pupil::where('pupilid', '=', Input::get('pupilid'))->where(
             'firstname', '=', ucfirst(Input::get('firstname')))->where(
             'lastname', '=', ucfirst(Input::get('lastname')))->get();
        if ($oldregistration->Count()>0)
        {
           return View::make('afvist');
        }

        if ($ws->freeplaces > 0)
        {
            $ws->freeplaces = $ws->freeplaces - 1;
            $ws->save();
            $pupil = new Pupil;
            $pupil->pupilid = Input::get('pupilid');

            $pupil->firstname = ucfirst(Input::get('firstname'));
            $pupil->lastname = ucfirst(Input::get('lastname'));
            $pupil->workshop_id = $ws->id;
	    
            $pupil->road = ucfirst(Input::get('road'));
            $pupil->zip = Input::get('zip');
            $pupil->town = ucfirst(Input::get('town'));
            $pupil->save();

            return View::make('accepteret');


        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
          return View::make('overtegnet');
        }

    }
}));




// -------------------------------------------------------------
// Vis tilmeldingsform operation dagsværk (Jeg skaffer arbejde)
// -------------------------------------------------------------

Route::get('od/tilmelding/har/arbejde', function()
{
//      $ws = Workshop::where('isODworkshop', '=', 'true')->get();
//      $ws = Workshop::find(3);
      $ws = Workshop::where('wstype', '=', 'od.have.job')->first();




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
    $ws = Workshop::where('wstype','od.have.job')->first();

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

        $oldregistration = Pupil::where('pupilid', '=', Input::get('pupilid'))->where(
             'firstname', '=', ucfirst(Input::get('firstname')))->where(
             'lastname', '=', ucfirst(Input::get('lastname')))->get();
        if ($oldregistration->Count()>0)
        {
           return View::make('afvist');
        }


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

            return View::make('accepteret');


        } else {
          // Sidste plads på denne workshop er taget af en anden bruger
          return View::make('overtegnet');
        }
    }
}));

// -----------------------------------------------------------
// Vis tilmeldingsform operation dagsværk (Jeg ønsker arbejde)
// -----------------------------------------------------------

Route::get('od/tilmelding', function()
{
    $ws = Workshop::where('wstype','od.want.job')->first();
    return View::make('odtilmelding', compact('ws'));
});


// -------------------------------------------------------------------------
// Create new tilmelding in Operation Dagsværk workshop (Jeg ønsker arbejde)
// -------------------------------------------------------------------------

Route::post('od/tilmelding', array('before' => 'csrf', function()
{
    $ws = Workshop::where('wstype', '=', 'od.want.job')->first();
    
    $data = Input::All();

    $rules = array (
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

        $oldregistration = Pupil::where('pupilid', '=', Input::get('pupilid'))->where(
             'firstname', '=', ucfirst(Input::get('firstname')))->where(
             'lastname', '=', ucfirst(Input::get('lastname')))->get();
        if ($oldregistration->Count()>0)
        {
           return View::make('afvist');
        }

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

            return View::make('acepteret');
        } else {
            return View::make('overtegnet');
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
                 'od' => Pupil::where('workshop_id', '=', '3')->orWhere('workshop_id', '=', '4')->count(),
                 'wsall' => compact('workshops')
           ));
});




// ---------------------
// List all tilmeldinger
// ---------------------

Route::get('kun/for/you/know/who/tilmeldinger', function()
{
    $pupils =  Pupil::get(array('pupilid','firstname','lastname','workshop_id'));
    return View::make('tilmeldinger', compact('pupils'));
});

// ---------------------
// List all tilmeldinger
// ---------------------


// List alle tilmeldinger til forsvaret
Route::get('kun/for/you/know/who/soldattilmeldinger', function()
{
    $pupils =  Pupil::where('workshop_id', '=', '1')->get();
    return View::make('soldattilmeldinger', compact('pupils'));
});



// -------------------------
// List all OD tilmeldinger
// -------------------------

// List all OD tilmeldinger
Route::get('kun/for/you/know/who/odtilmeldinger', function()
{
    $pupils =  Pupil::where('workshop_id', '=', '3')->orWhere('workshop_id', '=', '4')->get();
    return View::make('odtilmeldinger', compact('pupils'));
});



Route::get('kun/for/you/know/who/elevoprydning', function()
{
    $pupils = DB::table('pupils')->orderBy('pupilid', 'asc')->orderBy('lastname', 'asc')->orderBy('firstname', 
       'asc')->orderBy('id')->get(array('id','pupilid','firstname','lastname','workshop_id'));
    return View::make('elevoprydning',compact('pupils'));
});

Route::get('kun/for/you/know/who/slet/{pid}', function($pid)
{
    $pupil = Pupil::find($pid);
    $ws = Workshop::find($pupil->workshop_id);
    $ws->freeplaces = $ws->freeplaces + 1;
    $ws->save();
    $pupil->delete();
    return Redirect::to('kun/for/you/know/who/elevoprydning');  
});
