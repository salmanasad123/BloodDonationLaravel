<?php

use Illuminate\Http\Request;
use App\Donor;

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



Route::get('donors/AB+',function (){
    return Donor::all()->where('blood_group','AB+');

});
Route::get('donors/AB-',function (){
    return Donor::all()->where('blood_group','AB-');

});
Route::get('donors/A+',function (){
    return Donor::all()->where('blood_group','A+');

});
Route::get('donors/A-',function (){
    return Donor::all()->where('blood_group','A-');

});
Route::get('donors/B+',function (){
    return Donor::all()->where('blood_group','B+');

});
Route::get('donors/B-',function (){
    return Donor::all()->where('blood_group','B-');

});
Route::get('donors/O+',function (){
    return Donor::all()->where('blood_group','O+');

});
Route::get('donors/O-',function (){
    return Donor::all()->where('blood_group','O-');

});
Route::get('donors/A+',function (){
    return Donor::all()->where('blood_group','A+');

});
Route::get('/donors/A+',function (){
    return Donor::all()->where('blood_group','A+');

});


Route::apiResource('/donors','DonorController');
Route::apiResource('/blood_groups','BloodGroupController');

Route::group(['prefix'=>'donor'],function (){
    Route::apiResource('/{donors}/blood_group','BloodGroupController') ;
});