<?php
//use Users;
//use Input;

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
    return view('frontEnd.signin');
});
Route::get('/logout', function () {
    return view('frontEnd.logout');
});
Route::get('/signin', function () {
    return view('frontEnd.signin');
});
Route::get('/About', function () {
    return view('frontEnd.about');
});
Route::get('/search', function () {
    return view('frontEnd.Search');
});
Route::get('/search_welcome', function () {
    return view('frontEnd.search_welcome');
});
Route::get('/signup', function () {
    return view('frontEnd.signup');
});
Route::get('/Home', function () {
   return view('frontEnd.Home');
});
Route::get('/BIS_add', function () {
   return view('frontEnd.BIS_add');
});
Route::get('/BIS_delete', function () {
   return view('frontEnd.BIS_delete');
});

#Route::get('/profile', function () {
 #  return view('frontEnd.Profile');
#});
Route::get('/profile', 'firstController@data');
Route::post('/edit', 'firstController@edit');
Route::post('/signup','firstController@insert');
Route::post('/signin','firstController@check');
Route::post('/BIS_add','firstController@add_details');
Route::post('/BIS_delete','firstController@delete_details');
Route::post('/search','firstController@search_details');


Auth::routes();


/*Route::get('/home', 'HomeController@index')->name('home');*/
