<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;
class PostsController extends Controller
{
    // this method shows the posts 
    public function index()
    {
       $posts = Post::orderBy('created_at','DESC')->get();
       return view('posts.list',['posts'=> $posts]);
    }
      // this method create the post 
      public function create()
      {
        return view('posts.create');
          
      }

        // this method store the post in database 
    public function store(Request $request)
    {
      $rules = [
        'title'=> 'required',
        'content' => 'required',
        'author'=> 'required',

      ];
    
        $validator= Validator::make($request->all(), $rules);
        if ($validator->fails()){
          return redirect()->route('posts.create')->withInput()->withErrors($validator);
        }

        // insert into db
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;
        $post->publish_date = date('Y-m-d H:i:s');
        $saved= $post->save();
        
        //Check if post was created
          if ( !$saved)
          {
              App::abort(500, 'Some Error');
          }
        return redirect()->route('posts.index')->with('success','post added successfully');
    }

      // this method update the post 
      public function update()
      {
          
      }
}
