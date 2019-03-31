<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Post;
use App\Comment;
use App\TAg;
use DB;

class BlogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'addComment']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $posts = post::where('title', 'LIKE', "%$keyword%")
                ->orWhere('body', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
        //$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        // $post = post::latest()
        // ->filter(request(['moth', 'year']))
        // ->get();


        $posts = Post::orderBy('created_at','desc')->paginate($perPage);

        }

        // session()->flash('flashmessage', 'Your search results');

        // return view('blog.blog')->with('posts', $posts);

        return view('blog.blog')->with('posts', $posts);

    }


 

    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.post')->with('post', $post);
    }
    public function addComment(Post $post)
    {

            $post->addComment(request('body'));

        return back();

        }
}