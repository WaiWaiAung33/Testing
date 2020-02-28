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
Route::get('employee','EmployeeController@index')->name('employee.index');
Route::get('employee/create','EmployeeController@create')->name('employee.create');
Route::post('employee/store','EmployeeController@store')->name('employee.store');
Route::get('employee/show/{id}',"EmployeeController@show")->name('employee.show');
Route::get('employee/edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::put('employee/update/{id}','EmployeeController@update')->name('employee.update');
Route::delete('employee/delete/{id}','EmployeeController@delete')->name('employee.delete');
