<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Throwable;
use DB;

class NewsController extends Controller
{
  
    public function viewNews()
    {
        $title="view all news";
        $n = News::all();
        return view('cms.viewNews',compact('title','n'));
    }
  
    public function InsertNews(Request $request)

    {
      $n = new News();
      $n ->category_id=$request['category_id'];
      $n ->title=$request['title'];
      $n ->excerpt=$request['excerpt'];
      $n ->content=$request['content'];
      $n ->image=$request['image'];
      $n ->likes=$request['likes'];
      $n ->views=$request['views'];
      $n->save();
      return redirect('viewNews')->with('New news added succesfully');
    }


    public function editNews($id)
    {
        $n=News::find($id);
        $title="Edit News";
        return view('cms.editNews',compact('n','title'));
    }
    public function updateNews(Request $request)
    {
        try{
            $n=News::find($request['category_id']);
        
            $n ->title=$request['title'];
            $n ->excerpt=$request['excerpt'];
            $n ->content=$request['content'];
            $n ->image=$request['image'];
            $n ->likes=$request['likes'];
            $n ->views=$request['views'];
            $n->update();
            return redirect('viewNews')->with('News succesfully updated');
        }catch(Throwable $e){
            dd($e->getMessage());
        }
    }

        public function deleteNews($id)
        {
            News::find($id)->delete();
            return back()->with('success','News Deleted Successfully');
    }
} 