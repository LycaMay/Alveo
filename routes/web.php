<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user-side/index');
});
// Route::view('/properties', 'user-side.properties');
Route::view('/property-list', 'user-side.property-list');
Route::view('/for-lease', 'user-side.for-lease');
Route::view('/for-sale', 'user-side.for-lease');
Route::view('/about-us', 'user-side.about-us');
Route::view('/contact-us', 'user-side.contact-us');



//ADMIN
Route::view('/admin', 'admin-side.index-admin');

