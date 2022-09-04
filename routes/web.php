<?php
use App\Http\Controllers\userC;


Route::view('/','insert');

Route::POST('add','userC@insert');
Route::get('show','userC@show');
Route::get('delete/{id}','userC@del');
Route::get('update/{id}','userC@edit');
Route::POST('update/{id}','userC@update');