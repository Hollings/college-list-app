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

// Remove multiple selected schools
Route::delete('/college/deletemany', 'CollegeController@deleteMany');

// Export selected schools to a CSV file
Route::post('/college/csv', 'CollegeController@exportCSV');

// Set up resource routes
Route::resource('college', 'CollegeController');




