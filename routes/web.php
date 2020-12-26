<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use App\Models\Enquiry;
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
Route::post('/updateCustomer','CustomerController@updateCustomer');  
Route::get('/deleteCustomer/{id}', 'CustomerController@deleteCustomer');


/////Enquiry

Route::get('/addEnquiry','AdminController@addEnquiry')->name('addEnquiry');
Route::get('/viewEnquiries','EnquiryController@viewEnquiries')->name('viewEnquiries');
Route::post('/insertEnquiry','EnquiryController@insertEnquiry');
Route::get('/editEnquiry/{id}','EnquiryController@editEnquiry');
Route::post('/updateEnquiry','EnquiryController@updateEnquiry');
Route::get('/deleteEnquiry/{id}','EnquiryController@deleteEnquiry');

    ////product
    Route::get('/addProduct', 'AdminController@addProduct')->name('addProduct');
    Route::get('/viewProducts','ProductController@viewProducts')->name('viewProducts');     
    Route::post('/insertProduct','ProductController@insertProduct');
    Route::get('/editProduct/{id}','ProductController@editProduct');
    Route::post('/updateProduct','ProductController@updateProduct');
    Route::get('/deleteProduct/{id}','ProductController@deleteProduct');


    /////Category
    Route::get('/addCategory','AdminController@addCategory')->name('addCategory');
    Route::get('/viewCategories','CategoryController@viewCategories')->name('viewCategories');
    Route::post('/insertCategory','CategoryController@insertCategory');
    Route::get('/editCategory/{id}','CategoryController@editCategory');
    Route::post('/updateCategory','CategoryController@updateCategory');
    Route::get('/deleteCategory/{id}','CategoryController@deleteCategory');