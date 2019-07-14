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
    return view('welcome');
});
Route::get('/wedding','frontendcontroller@homepage');


Route::get('/test', function () {
    return 'hhhhhh';
});







Route::get('/getcityareas/{id}','workcontroller@getcityareas');

Route::get('/about','frontendcontroller@about');
Route::get('/contact','frontendcontroller@contact');


//Route::get('/autocompletesearch','frontendcontroller@autocompletesearch');
//////////       usercontroller      ///////////////////
Route::get('/profile','usercontroller@profile');
Route::get('/userads','usercontroller@userads');
Route::get('/favourite','usercontroller@favourite');
Route::get('/archives','usercontroller@archives');
Route::get('/messages','usercontroller@messages');
Route::get('/login','usercontroller@login');
Route::get('/register','usercontroller@register');

//////////      AdController             //////////////////////
Route::get('/categoryads/{id}','AdController@categoryads');
Route::get('/adsdetails/{id}','AdController@adsdetails');
Route::get('/createads','AdController@createads');
Route::post('/searchads','AdController@searchads');
