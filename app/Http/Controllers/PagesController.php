<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getBlog()
    {
        return view('blog');
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
