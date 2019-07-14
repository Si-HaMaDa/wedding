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


Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    Route::get('/ads/create/getSubCategory/{id}', function ($id) {
        return \App\SubCategory::get()->where('category_id', '=', $id);
    });

    Route::get('/ads/create/getArea/{id}', function ($id) {
        return \App\Area::get()->where('city_id', '=', $id);
    });

    Route::get('/ads/create/getAttr/{id}', function ($id) {
        return \App\SubCategory::find($id)->attributes;
    });

});
