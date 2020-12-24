<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Throwable;
use DB;

class EnquiryController extends Controller
{
   
    public function viewEnquiries()
    {
        $title="view all enquiries";
        $enquiries = Enquiry::all();
        return view ('cms.viewEnquiries',compact('title','enquiries'));
    }

    
    public function insertEnquiry(Request $request)
    {
   $enquiries= new Enquiry();
   $enquiries->customer_id=$request['customer_id'];
   $enquiries->customer_name=$request['customer_name'];
   $enquiries->messege=$request['messege'];
   $enquiries->save();
   return redirect('viewEnquiries')->with('new Enquiry added succesfully');
    }

   
    public function editEnquiry($id)
    {
        $enquiries=Enquiry::find($id);
        $title="Edit Enquiry";
        return view('cms.editEnquiry',compact('enquiries','title'));
    }

    
    public function updateEnquiry(Request $request)
    {
        try{
            $enquiries=Enquiry::find($request['customer_id']);
            $enquiries->customer_name=$request['customer_name'];
            $enquiries->messege=$request['messege'];
            $enquiries->update();
        }catch(Throwable $e){
            dd($e->getMessage());
        }
    
        return redirect('viewEnquiries')->with('Enquiry succesfully updated');
   

   
}
public function deleteEnquiry($id)
{
    Enquiry::find($id)->delete();
    return back()->with('success','Enquiry Deleted Successfully');
}
}

