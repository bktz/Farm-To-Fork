<?php

/*
 |--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('role', 'Role');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
*/
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	# User Management
	Route::get('users/{user}/show', 'AdminUsersController@getShow')
	->where('user', '[0-9]+');
	Route::get('users/{user}/edit', 'AdminUsersController@getEdit')
	->where('user', '[0-9]+');
	Route::post('users/{user}/edit', 'AdminUsersController@postEdit')
	->where('user', '[0-9]+');
	Route::get('users/{user}/delete', 'AdminUsersController@getDelete')
	->where('user', '[0-9]+');
	Route::post('users/{user}/delete', 'AdminUsersController@postDelete')
	->where('user', '[0-9]+');
	Route::controller('users', 'AdminUsersController');

	# User Role Management
	Route::get('roles/{role}/show', 'AdminRolesController@getShow')
	->where('role', '[0-9]+');
	Route::get('roles/{role}/edit', 'AdminRolesController@getEdit')
	->where('role', '[0-9]+');
	Route::post('roles/{role}/edit', 'AdminRolesController@postEdit')
	->where('role', '[0-9]+');
	Route::get('roles/{role}/delete', 'AdminRolesController@getDelete')
	->where('role', '[0-9]+');
	Route::post('roles/{role}/delete', 'AdminRolesController@postDelete')
	->where('role', '[0-9]+');
	Route::controller('roles', 'AdminRolesController');

	# Admin Dashboard
	Route::controller('/', 'AdminDashboardController');
});

/** ------------------------------------------
 *  User Routes
 *  ------------------------------------------
*/

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset')
->where('token', '[0-9a-z]+');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset')
->where('token', '[0-9a-z]+');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit')
->where('user', '[0-9]+');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

/** ------------------------------------------
 *  Content Loading Page Routes
 *  ------------------------------------------
 */

# The Needs by Pantry Browsing Page
Route::get('needs', function (){
	return View::make('site/needs');
});

# The Pantry Locations Page
Route::get('locations', function (){
	return View::make('site/locations');
});

# The Blog Page
Route::get('blog', 'BlogController@index');

/** ------------------------------------------
 *  Static Page Routes
 *  ------------------------------------------
*/

# The Privacy Policy Static Page
Route::get('privacy', function (){
	return View::make('site/privacy');
});

# The Terms of Use Static Page
Route::get('terms', function (){
	return View::make('site/terms');
});

# The License Static Page
Route::get('license', function (){
	return View::make('site/license');
});

# Contact Us Static Page
Route::get('contact-us', function (){
	return View::make('site/contact-us');
});
	

# Index Page - Last route, no matches
Route::get('/', function (){
	return View::make('site/index');
});
