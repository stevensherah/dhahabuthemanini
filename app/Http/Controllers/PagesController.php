<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PagesController extends Controller
{
    //

    public function getIndex()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('index')->with('posts', $posts);
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getBlog()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('blog.blog')->with('posts', $posts);
    }

    public function getBlogpost()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(1);
                // $post = Post::find($id);

        return view('blog.post')->with('posts', $posts);
    }

    public function getIcons()
    {
        return view('admin.icons');
    }
    public function getUser()
    {
        return view('admin.user');
    }
}
