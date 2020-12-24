<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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
    return view('cms.index');
});






//customer

Route::get('/addCustomer','AdminController@addCustomer')->name('addCustomer');
Route::get('/viewCustomers','CustomerController@viewCustomers')->name('viewCustomers');
Route::post('/insertCustomer','CustomerController@insertCustomer');
Route::get('/editCustomer/{id}','CustomerController@editCustomer');
    
