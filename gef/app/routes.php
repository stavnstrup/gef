<?php

// app/routes.php

// Homepage
Route::get('/', function()
{
	return View::make('tempforside');
});


// list all workshops
Route::get('alle', function()
{
	$workshops =  Workshop::get(array('name','freeplaces'));
	return View::make('home', compact('workshops'));
});


// List all tilmeldinger
Route::get('tilmeldinger', function()
{
    $pupils =  Pupil::get(array('pupilid','firstname','lastname','workshop_id'));
    return View::make('tilmeldinger', compact('pupils'));
});

// Vis alle tilmeldinger for workshop
Route::get('tilmelding1/{wid}', function()
{
   return "Vis alle tilmeldinger for workshop";
});

// Vis tilmeldingsform
Route::get('tilmelding', function()
{
    foreach (Workshop::where('freeplaces', '>', '0')->select('id', 'name')->orderBy('id','asc')->get() as $name)
    {
        $names[$name->id] = $name->name;
    }
    return View::make('tilmelding', compact('names'));
});


// Create new tilmelding


Route::post('tilmelding', array('before' => 'csrf', function()
{
    $rules = array (
        'pupilid' => 'required|regex:/^[1-3][a-f,h-o]\s?[0-3][0-9]$/',
        'firstname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'lastname' => array('required', 'regex:/^\pL+(-|\s|\pL+)*$/'),
        'wid' => 'required'
    );

    // Create a new validator instance.
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
       return Redirect::to('tilmelding')->withErrors($validator);
    } else {
        $ws = Workshop::find(Input::get('wid'));
        if ($ws->freeplaces > 0)
        {
            $ws->freeplaces = $ws->freeplaces - 1;
            $ws->save();
            $pupil = new Pupil;
            $pupil->pupilid = Input::get('pupilid');
/*
            $pid = Input::get('pupilid');
            if (strlen($pid->toString()) = 5)
            {
                $pupil->pupilid = $pid;
            } else {
                $pupil->pupilid = substr($pid,0,2).' '.substr($pid,2,2);
            }
*/
            $pupil->firstname = ucfirst(Input::get('firstname'));
            $pupil->lastname = ucfirst(Input::get('lastname'));
            $pupil->workshop_id = Input::get('wid');
            $pupil->save();
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



