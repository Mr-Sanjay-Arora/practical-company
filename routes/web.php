<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyDetails;
use App\Http\Controllers\UserDetails;
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

Route::get('/', [CompanyDetails::class,'index']);
Route::get('/list-company', [CompanyDetails::class,'listingcompany']);
Route::post('/generateCompany', [CompanyDetails::class,'generateCompany']);
Route::get('/delete-company/{company_id}', [CompanyDetails::class,'destroy']);

Route::get('/list-user', [UserDetails::class,'listingusers']);
Route::get('/view-user/{user_id}', [UserDetails::class,'listingauser']);
Route::post('/generateUser', [UserDetails::class,'generateUser']);
Route::get('/delete-user/{user_id}', [UserDetails::class,'destroy']);