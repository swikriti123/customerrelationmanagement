<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Throwable;
use DB;

class ProductController extends Controller
{
   
    public function viewProducts()
    {
        $title="View all Products";
        $products = Product::all();
        return view('cms.viewProducts',compact('title','products'));
    }

    
    public function insertProduct(Request $request)
    {
        $products= new Product();
        $products->category_id=$request['category_id'];
        $products->name=$request['name'];
        $products->description=$request['description'];
        $products->quantity=$request['quantity'];
        $products->price=$request['price'];
        $products->save();
        return redirect('viewProducts')->with('new Product added succesfully');

    }

    public function editProduct($id)
    {
        $products=Product::find($id);
        $title="Edit Product";
        return view('cms.editProduct',compact('products','title'));
    }

     
    public function updateProduct(Request $request)
    {
        try{
            $products=Product::find($request['category_id']);
            $products->name=$request['name'];
            $products->description=$request['description'];
            $products->quantity=$request['quantity'];
            $products->price=$request['price'];
            $products->update();
        }catch(Throwable $e){
            dd($e->getMessage());
        }
    
        return redirect('viewProducts')->with('Products succesfully updated');
   

  
    }

   

    public function deleteProduct($id)
    {
      Product::find($id)->delete();
      return back()->with('success','Product Deleted Succesfully!');
    }
}
