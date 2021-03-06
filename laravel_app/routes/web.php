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

Route::get('/form', "SampleFormController@show")->name("form.show");
Route::post('/form', "SampleFormController@post")->name("form.post");
Route::get('/form/confirm', "SampleFormController@confirm")->name("form.confirm");
Route::post('/form/confirm', "SampleFormController@send")->name("form.send");
Route::get('/form/thanks', "SampleFormController@complete")->name("form.complete");

Route::get('/form_second', "SampleFormSecondController@show")->name("form2.show");
Route::post('/form_second', "SampleFormSecondController@post")->name("form2.post");
Route::get('/form_second/confirm', "SampleFormSecondController@confirm")->name("form2.confirm");
Route::post('/form_second/confirm', "SampleFormSecondController@send")->name("form2.send");
Route::get('/form_second/thanks', "SampleFormSecondController@complete")->name("form2.complete");