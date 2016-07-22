<?php

/*
|--------------------------------------------------------------------------
| Demo Routes : can be viewed when environment is local in .env file
|--------------------------------------------------------------------------
| The following get route is used to load the demo template files and
| can be removed in production site.
|
*/
if(App::environment()=='local')
{
  Route::get('templates/{folder}/{file}',function($folder,$file){
    return view('templates/'.$folder.'.'.$file);
  });
}


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('email/verify','Auth\AuthController@verify_email');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/settings', 'HomeController@settings');
Route::post('/settings', 'HomeController@updateSettings');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


/*
|--------------------------------------------------------------------------
| CRUD Generator routes
|--------------------------------------------------------------------------
*/

	Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
	Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
	
	if(url('/')!="http://preview.bootstrap.guru/knot/public")
	{
		Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');	
	}


/*
|--------------------------------------------------------------------------
| Social Logins
|--------------------------------------------------------------------------
*/

// Redirect to facebook to authenticate
Route::get('facebook', 'Auth\AuthController@facebook_redirect');
// Get back to redirect url
Route::get('account/facebook', 'Auth\AuthController@facebook');

// Redirect to google to authenticate
Route::get('google', 'Auth\AuthController@google_redirect');
// Get back to redirect url
Route::get('account/google', 'Auth\AuthController@google');

// Redirect to twitter to authenticate
Route::get('twitter', 'Auth\AuthController@twitter_redirect');
// Get back to redirect url
Route::get('account/twitter', 'Auth\AuthController@twitter');


Route::resource('users', 'UserController');