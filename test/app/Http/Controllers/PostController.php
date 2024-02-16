<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create(Request $request){
        // dd($request->toArray());
        // $path=NULL;
        $path = $request->file('img')->store('images', 'public');
        // $img_name=time().'.'.$request->img->extension();
        // $path=$request->file("img")->move(public_path('storage/images'),$img_name);
        
                Post::create([
          'title'=>$request->title,
          'discription'=>$request->dis,
          'origanal_name'=>$request->file('img')->getClientOriginalName(),
          'img_path'=>$path
        ]);
        return redirect()->route('post.table'); 
        // return redirect()->route('PostView'); 

      }

      public function  view()
      {
        $views=Post::get();
               return view('project1.disp',compact('views'));
      }
      public function  delete(Request $request,Post $id)
      {
      
        $id->delete();
        
      }

      public function  update(Request $request,$id)
      {
      
        $id=$request->id;
        $post=Post::where('id',$id)->first();
        return view('project1.edit',compact('post'));
        
      }


      public function  edit(Request $request,Post $id)
      {
        // dd($id->toArray());
                // $post = Post::find($id);
        $path = $request->file('img')->store('images', 'public');


      $id->update([
          'title'=>$request->title,
          'discription'=>$request->dis,
          'origanal_name'=>$request->file('img')->getClientOriginalName(),
          'img_path'=>$path 
        ]);
        return redirect()->route('post.table'); 

   
      }
}