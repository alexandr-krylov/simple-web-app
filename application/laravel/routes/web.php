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

Route::get('/', 'GridController@show');
Route::get('/employee', function () {
    return view('employee', ['activeEmployee' => 'active']);
});
Route::get('/department', function () {
    return view('department', ['activeDepartment' => 'active']);
});