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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/platform','PlatformController@show');


/*Route::middleware('auth')->group(function (){
    Route::get('/profile','ProfileController@show')->name('profile');
});

Route::get('/project_description', function () {
    return view('project_description');
});
Route::get('/profile', function () {
    return view('profile');
});*/
Route::get('/projects}',[
    'uses'=> 'ProjectController@index',
    'as'=> 'projects'
]);
Route::get('/services}',[
    'uses'=> 'ServiceController@index',
    'as'=> 'services'
]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'ProfileController@index')->name('profile.index');
Route::get('search',[
    'uses'=> 'SearchController@index',
    'as'=> 'search'
]);

Auth::routes();
//Route::post('project/create', 'ProjectController@create');

Route::group(['middleware'=>'auth'],function(){

Route::get('post_service',[
    'uses'=> 'ServiceController@create',
    'as'=> 'post_service'
]);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('projects','ProjectController');
Route::resource('bids','BidController');
Route::resource('workspace','WorkspaceController');
Route::resource('messages','MessageController');

Route::get('/ratings', function () {
    return view('ratings');
});



Route::get('/profile', 'ProfileController@show')->name('profile');
Route::post('/profile/{id}', 'ProfileController@update')->name('profile.update');

Route::get('/my-projects', 'ProjectController@individualProject')->name('my-projects');

//added  s
Route::get('/project/{id}', 'ProjectController@show')->name('project')->middleware('verifyUser');
Route::get('/service/{id}', 'ServiceController@show')->name('service');


Route::get('bids/store',[
    'uses'=> 'BidController@store',
    'as'=> 'bids.store'
]);

Route::get('bids/accept/{id}',[
    'uses'=> 'WorkspaceController@store',
    'as'=> 'bid.accept'
]);
Route::get('bid/accpeted',[
    'uses'=> 'WorkspaceController@accepted',
    'as'=> 'bid.accepted'
]);
Route::get('bid/show/{id}',[
    'uses'=> 'WorkspaceController@show',
    'as'=> 'workspace'
]);
Route::get('ratings',[
    'uses'=> 'Controller@index',
    'as'=> 'ratings'
]);
Route::get('/post_project', function () {
    return view('post_project');
})->name('post_project');
Route::post('project/store',[
    'uses'=> 'ProjectController@store',
    'as'=> 'projects.store'
]);

Route::post('service/store',[
    'uses'=> 'ServiceController@store',
    'as'=> 'services.store'
]);
Route::post('service/like/{id}',[
    'uses'=> 'ServiceController@like',
    'as'=> 'service.like'
]);
Route::post('workspace/submit/{id}',[
    'uses'=> 'WorkspaceController@increaseDeadline',
    'as'=> 'workspace.increaseDeadline'
]);
Route::get('workspace/done/{id}',[
    'uses'=> 'ProjectController@done',
    'as'=> 'project.done'
]);
Route::get('/users', 'WorkspaceController@users')->name('users');
Route::get('messages', 'MessageController@fetchMessages');
Route::post('messages', 'MessageController@sendMessage');
Route::get('/private-messages/{user}', 'MessageController@privateMessages')->name('privateMessages');
Route::post('/private-messages/{user}', 'MessageController@sendPrivateMessage')->name('privateMessages.store');

//Route::post('/bidOnProject', 'BidController@store')->name('bidOnProject');
//Route::post('/project.increaseDeadline', 'ProjectController@increaseDeadline')->name('project.increaseDeadline');

//added by rifat S
Route::post('/ratings/submit', 'UserController@index')->name("userRating");
Route::get('/chat', 'ChatsController@index');
//added by rifat E


Route::post('order/accepted',[
    'uses'=> 'PaymentController@pay',
    'as'=> 'order'
]);

});




