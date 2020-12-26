<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Throwable;
use DB;

class CustomerController extends Controller
{
   
    public function viewCustomers()
    {
        $title = "view all customers";
        $customers = Customer::all();
     return view ('cms.viewCustomers',compact('title','customers'));
    }

   
    public function insertCustomer(Request $request)
    {
        $customers= new Customer();
        $customers->name=$request['name'];
        $customers->address=$request['address'];
        $customers->contact=$request['contact'];
        $customers->save();
        return redirect('viewCustomers')->with('New Customer added Succesfully');
    }
  
    public function editCustomer($id)
    {
        $customers=Customer::find($id);
        $title="Edit Customer";
        return view('cms.editCustomer',compact('customers','title'));
    }

    public function updateCustomer(Request $request)
    {
        try{
            $customers=Customer::find($request['id']);
            $customers->name=$request['name'];
            $customers->address=$request['address'];
            $customers->contact=$request['contact'];
            $customers->update();
        }catch(Throwable $e){
            dd($e->getMessage());
        }
        return redirect('viewCustomers')->with('customersuccesfully updated');
    }

    public function deleteCustomer($id)
    
        {
            Customer::find($id)->delete();
            return back()->with('success','Customer Deleted Succesfully');
        }

}
