<?php

use Illuminate\Http\Request;
use App\MedicalRecord;
#use App\Http\Controllers\MedicalRecordController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['cors'])->group(
    function($router) {
        Route::get('medicalRecords', 'MedicalRecordController@index');
        Route::get('medicalRecords/{medicalRecord}', 'MedicalRecordController@show');
        Route::post('medicalRecords', 'MedicalRecordController@save');
        Route::put('medicalRecords/{medicalRecord}', 'MedicalRecordController@update');
        Route::delete('medicalRecords/{medicalRecord}', 'MedicalRecordController@delete');
});
    
 

/*Route::get('medicalRecords', 'MedicalRecordController@index');
Route::get('medicalRecords/{medicalRecord}', 'MedicalRecordController@show');
Route::post('medicalRecords', 'MedicalRecordController@save');
Route::put('medicalRecords/{medicalRecord}', 'MedicalRecordController@update');
Route::delete('medicalRecords/{medicalRecord}', 'MedicalRecordController@delete');*/