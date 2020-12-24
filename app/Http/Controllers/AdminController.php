<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCustomer(){
        return view('cms.addCustomer');
    }

    public function addEnquiry(){
        return view('cms.addEnquiry');
    }
}
