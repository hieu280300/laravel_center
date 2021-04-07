<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('login', [AuthController::class, 'getLogin'])->name('adminLogin');
// Route::post('login', AuthController::class, 'postLogin')->name('adminLoginPost');
// Route::get('logout', AuthController::class, 'logout')->name('adminLogout');

Route::group(['middleware' => 'adminauth' , 'as' => 'admin.'], function () {
    // echo 'hello admin'; exit;
	// Admin Dashboard
	Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');	
});