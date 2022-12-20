<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/index', [UserController::class,'index']);
Route::post('/signup', [UserController::class,'signup']);
Route::get('/signin', [UserController::class,'signin']);
Route::post('/signedup', 'App\Http\Controllers\UserController@signedup'); 
Route::post('/signedin', 'App\Http\Controllers\UserController@signinsess');
Route::get('/logout', 'App\Http\Controllers\UserController@signinendsess');
Route::post('/logout', 'App\Http\Controllers\UserController@signinendsess'); 
Route::get('/changepass', 'App\Http\Controllers\UserController@changepass');
Route::get('/EditInfo', 'App\Http\Controllers\UserController@EditInfo');
Route::post('/EditInfo1/{id}', [UserController::class,'EditInfo1']);
Route::get('/EditPasswordUser', 'App\Http\Controllers\UserController@EditPasswordUser');
Route::post('/EditPasswordUser1/{id}', [UserController::class,'EditPasswordUser1']);

Route::get('/SearchFilter', [UserController::class,'SearchFilter']);
Route::post('/indexfilter', 'App\Http\Controllers\UserController@indexfilter');

Route::get('/admin', function () {
    return view('adminlogin');
});
Route::get('/logoutadmin', 'App\Http\Controllers\UserController@signinendsessadmin');

Route::post('/signedinadmin', 'App\Http\Controllers\UserController@signinsessadmin');
Route::get('/postad', [UserController::class,'postad']);
Route::get('/updatead/{id}', [UserController::class,'updatead']);
Route::post('/updatedad1/{id}', [UserController::class,'updatedad1']);
Route::get('delete/{id}','App\Http\Controllers\UserController@delete');

Route::post('/adposted', 'App\Http\Controllers\UserController@adposted');

Route::get('/admindashboard', [UserController::class,'AdminDashboard']);
Route::get('/userdashboard', [UserController::class,'UserDashboard']);
Route::get('detail/{id}', [UserController::class,'detail']);
Route::get('/ProductDescription', 'App\Http\Controllers\UserController@aProductDescription');
//Route::post('/sellerdetail/{id}', [UserController::class,'sellerdetail']);
Route::get('/request1','App\Http\Controllers\UserController@xmlhttprequest1');

Route::get('/check', [UserController::class,'check']);
Route::get('/request','App\Http\Controllers\UserController@xmlhttprequest');