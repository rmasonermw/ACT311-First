<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});


Route::get('', function () {
	
});




*/

//Route is the class name...we are calling the Route class. If a Get is received the do the function.

// then the path for where you want the user to go.

//the function is an anonymous function or he is calling is a closure...not sure that is totally correct.


/*
Route::get('/', function(){
	return '<h1>Welcome</h1>';
});


Route::get('/about', function () {

	$message = <<<EOT
	<h1>About</h1>
	<p>This is about me.</p>
EOT;

return $message;
	
});


//go to controller
Route::get('/', 'WelcomeController@welcome');
*/


// Using the Controller
Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');



Route::get('/zip/{zipcode}', function ($zipcode) {
	$message = "Your zip code is $zipcode";
	return $message;
	})->where('zipcode', '[0-9]{5}');
	
	
Route::get('/zip/{any}', function () {
	$message = "You must enter a 5-digit US zip code.";
	return $message;
});


Route::get('/state/{stateAbbrev}', function ($stateAbbrev) {
	$message = "Your zip code is $stateAbbrev";
   return $message;
})->where('$stateAbbrev','[A-B]{2}');

Route::get('/state/{any}', function ($stateAbbrev) {
	$message = "You must enter the state as 2 capitol letters.";
   return $message;
});

Route::get('/state', function ($stateAbbrev) {
   return "You must enter the state as 2 capitol letters.(Nothing is entered)";
});


Route::get('/zip/{zipcode}/state/{stateAbbrev}', function ($zipcode, $stateAbbrev) {
	$message = "You typed $zipcode in the state of $stateAbbrev";
	return $message;
})->where([ //is an associative array
	'zipcode'=>'[0-9]{5}','stateAbbrev'=>'[A-Z]{2}'

]);



Route::get('/api/{key}',function ($key){
	$message = "Your super-secret api key is $key";
	return $message;

})->where('key','[0-9]+');

Route::get('/api/{key}/{city}',function ($key, $city){
	$message = "Your super-secret api key is $key and your city is $city.";
	return $message;

});

Route::get('/age/{years}',function ($years){
    $message = "Your age is $years.";
    return $message;
})->where('years', '[0-9]{1,3}');

Route::get('/age/{years}/{months}',function ($years,$months){
    $message = "Your age is $years.";
    return $message;
})->where([
    'years'=>'[0-9]{1,3}',
    'months'=>'[0-9]{1,2}'
]);

Route::get('/birthmonth/{month}/birthyear/{years}',function ($months,$years){
    return "Month: $months, Year: $years";
})->where([
    'months'=>'([0-1][0-2])|[0-9]|(0[1-9])',
    'years'=>'.+' //any one character
]);





//use regex testers





/*  * means 0 or more occurances
    + means should have at least 1
    ? means 0 or 1 occurances


*/
