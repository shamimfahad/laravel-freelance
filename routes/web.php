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
*/

Route::get('/', function () {
    return view('home');
});

/*Route::get('/platform', function () {
    return view('platform');
});*/

Route::get('/platform','PlatformController@show');
Route::get('/project_description','ProjectController@show');

/*Route::get('/project_description', function () {
    return view('project_description');
});*/
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/workspace', function () {
    return view('workspace');
});
Route::get('/post_project', function () {
    return view('post_project');
});
Route::get('/post_service', function () {
    return view('post_service');
});

Auth::routes();
//Route::post('project/create', 'ProjectController@create');

Route::post('project/store',[
    'uses'=> 'ProjectController@store',
    'as'=> 'projects.store'
]);
Route::post('service/store',[
    'uses'=> 'ServiceController@store',
    'as'=> 'services.store'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('projects','ProjectController');
Route::resource('bids','BidController');
Route::resource('workspaces','WorkspaceController');
Route::resource('messages','MessageController');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//added by rifat S
Route::get('/test/{id}', 'ProjectController@show')->name('test')->middleware('verifyUser');


//added by rifat E



