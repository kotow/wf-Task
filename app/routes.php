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
Route::resource('/employee', 'EmployeeController');
Route::get('/employee/{id}/addcompany', 'EmployeeController@addcomp');
Route::post('/employee/{id}/addcompany', 'EmployeeController@addcompany');
Route::post('/employee/search', 'EmployeeController@search');
Route::resource('/company', 'CompanyController');
Route::get('/employee/{id}/addemployee', 'EmployeeController@addcomp');
Route::post('/employee/{id}/addemployee', 'EmployeeController@addcompany');
Route::post('/company/search', 'CompanyController@search');/*
Route::get('/employees/', 'HomeController@showEmployees');
Route::get('/employees/{id?}/view', 'HomeController@showEmployees', 'id');
Route::get('/employees/create', 'HomeController@showEmployees');
Route::get('/employees/{id?}/delete', 'HomeController@showEmployees', 'id');
Route::get('/employees/{id?}/edit', 'HomeController@showEmployees', 'id');
*/