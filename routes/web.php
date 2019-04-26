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


//Here my APIs for the data.
//All get APIs
Route::get('getData','Controller@getData');
Route::get('getLeave','Controller@getLeave');
//Route::get('postLeave','Controller@postLeave');

//All post APIs.
Route::match(['get', 'post'],'postLeave','Controller@postLeave');
Route::match(['get', 'post'],'employeeLeaveStatus/{id}','Controller@employeeLeaveStatus');
Route::match(['get', 'post'],'LeaveStatusChange/{id}/{status}','Controller@LeaveStatusChange');



Route::get('/', function () {
    return view('welcome');
});
