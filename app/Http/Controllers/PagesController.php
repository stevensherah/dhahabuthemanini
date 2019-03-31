<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

use App\Product;

class PagesController extends Controller
{
    //

    public function getIndex()
    {
        return view('index');
    }

    public function getAbout()
    {
        return view('about');
    }

    // public function getBlog()
    // {
    //     $posts = Post::orderBy('created_at','desc')->paginate(10);
    //     return view('blog.blog')->with('posts', $posts);
    // }

    // public function getBlogpost()
    // {
    //     $posts = Post::orderBy('created_at','desc')->paginate(1);
    //             // $post = Post::find($id);

    //     return view('blog.post')->with('posts', $posts);
    // }

    public function getIcons()
    {
        return view('admin.icons');
    }
    public function getUser()
    {
        return view('admin.user');
    }
    public function getFilemanager()
    {
        return view('admin.filemanager');
    }
   
}
