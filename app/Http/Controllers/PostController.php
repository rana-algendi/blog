<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\FulfilledPromise;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $AllPosts = [
            ['id' => 1, 'title' => "css", 'posted_by' => "alex", 'created_at' => "2025-1-1 19:00:00"],
            ['id' => 2, 'title' => "js", 'posted_by' => "rose", 'created_at' => "2025-1-2 20:01:00"],
            ['id' => 3, 'title' => "html", 'posted_by' => "rrana", 'created_at' => "2025-1-15 20:01:00"],
            ['id' => 4, 'title' => "php", 'posted_by' => "nono", 'created_at' => "2025-1-2 20:01:00"],


        ];
        return view('posts.index', ['posts' => $AllPosts]);
    }

    public function show($postId)
    {
        $singlePost = [
            'id' => 1,
            'title' => "css",
            'description' => 'css is cool',
            'posted_by' => "alex",
            'created_at' => "2025-1-1 19:00:00"

        ];
        return view('posts.show', ['post' => $singlePost]);

    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //1-get user data
        $data = request()->all();
        return ($data);

        //$title = request()->title;
        //$description = request()->description;
        //$post_creator = request()->post_creator;
        

        //2-store user data in database
        //3-redirection to posts.index
        return to_route('posts.index');
    }

    public function edit(){
        return view('posts.edit');
    }

    public function update(){
          //1-get user data
          $title = request()->title;
          $description = request()->description;
          $post_creator = request()->post_creator;
          //@dd($title, $description , $post_creator);
  
          //2-update user data in database
          //3-redirection to posts.show
          return to_route('posts.show',1);
    }

    public function destroy(){
     //1-delete post from database
     //2-redirect to posts.index
        return to_route('posts.index');
    }
}
