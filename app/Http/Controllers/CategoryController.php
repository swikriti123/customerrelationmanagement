<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Throwable;
use DB;

class CategoryController extends Controller
{

    public function viewCategories()
    {
        $title="view all categories";
        $categories = Category::all();
        return view('cms.viewCategories',compact('title','categories'));
    }

   
    public function InsertCategory(Request $request)

    {
      $categories = new Category();
      $categories ->id=$request['id'];
      $categories ->name=$request['name'];
      $categories ->image=$request['image'];
      $categories->save();
      return redirect('viewCategories')->with('new Category added succesfully');
    }

   
    public function editCategory($id)
    {
        $categories=Category::find($id);
        $title="Edit Category";
        return view('cms.editCategory',compact('categories','title'));
    }

   
    public function updateCategory(Request $request)
    {
        try{
            $categories=Category::find($request['id']);
            $categories->name=$request['name'];
            $categories->image=$request['image'];
            $categories->update();
            return redirect('viewCategories')->with('Category succesfully updated');
        }catch(Throwable $e){
            dd($e->getMessage());
        }
    }
    
    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return back()->with('success','Category Deleted Successfully');
    } 
   

}