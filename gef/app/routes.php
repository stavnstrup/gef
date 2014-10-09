<?php

// app/routes.php


// ------------------------------------
// Midlertidig Homepage 
// ------------------------------------

/*
Route::get('/', function()
{
	return View::make('gef');
});
*/

// ------------------------------------
// Homepage (with all workshops listed)
// ------------------------------------


Route::get('/', function()
{
	$workshops =  Workshop::get(array('id', 'title','freeplaces'));
	return View::make('home', compact('workshops'));
});



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
	return View::make('workshop', compact('ws'));
});



// -------------------------
// 
// -------------------------


Route::get('tilmeldingsfordeling', function()
{

   $pupilnumbers = array(
        "1a" => 28, "1b" => 28, "1c" => 26, "1d" => 24, "1e" => 27, "1f" => 26,
        "1h" => 30, "1i" => 30, "1j" => 27, "1k" => 29, "1l" => 27, "1m" => 28,
        "1n" => 28, "1o" => 30,
        "2a" => 29, "2b" => 32, "2c" => 23, "2d" => 18, "2e" => 26, "2f" => 31,
        "2h" => 28, "2i" => 25, "2j" => 19, "2k" => 18, "2l" => 30, "2m" => 30,
        "2n" => 17, "2o" => 27, "3a" => 24, "3b" => 25, "3c" => 27, "3d" => 24,
        "3e" => 24, "3f" => 28, "3h" => 23, "3i" => 26, "3j" => 24, "3k" => 23,
        "3l" => 26, "3m" => 24, "3n" => 16, "3o" => 22);
 

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
                 'od' => Pupil::where('workshop_id', '=', '6')->orWhere('workshop_id', '=', '7')->count(),
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



// -------------------------
// List all OD tilmeldinger
// -------------------------

// List all OD tilmeldinger
Route::get('kun/for/you/know/who/odtilmeldinger', function()
{
    $pupils =  Pupil::where('workshop_id', '=', '6')->orWhere('workshop_id', '=', '7')->get();
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
