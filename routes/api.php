<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('college', 'CollegeController');

//// Get all schools
//Route::get('/college/', 'CollegeController@index');
//
//// Add a school to the master list
//Route::post('/college/store/', 'CollegeController@store');
//
//// Edit a school or its data in the master list
//Route::post('/college/update/{college}', 'CollegeController@update');
//
//// Remove a school from the master list
//Route::post('/college/delete/{college}', 'CollegeController@delete');
//
//// Bulk remove schools
//Route::post('/college/deletemany', 'CollegeController@deleteMany');

// Export selected schools to a CSV file
Route::post('/college/csv', 'CollegeController@exportCSV');


