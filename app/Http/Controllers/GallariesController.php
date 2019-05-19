<?php

namespace App\Http\Controllers;
use App\gallery;
use App\Http\Requests;

use Illuminate\Http\Request;

class GallariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $keyword = $request->get('search');
    //     $perPage = 25;

    //     if (!empty($keyword)) {
    //         $gallery = gallery::where('title', 'LIKE', "%$keyword%")
    //             ->orWhere('subtitle', 'LIKE', "%$keyword%")
    //             ->orWhere('body', 'LIKE', "%$keyword%")
    //             ->orWhere('cover_image', 'LIKE', "%$keyword%")
    //             ->orWhere('user_id', 'LIKE', "%$keyword%")
    //             ->orWhere('product_id', 'LIKE', "%$keyword%")
    //             ->latest()->paginate($perPage);
    //     } else {
    //         $gallery = gallery::latest()->paginate($perPage);
    //     }
    //     return view('gallery', compact('gallery'));
    // }
        public function index()
        {
                return view('gallery', compact('gallaries'));

        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
