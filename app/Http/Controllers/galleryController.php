<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $gallery = gallery::where('title', 'LIKE', "%$keyword%")
                ->orWhere('subtitle', 'LIKE', "%$keyword%")
                ->orWhere('body', 'LIKE', "%$keyword%")
                ->orWhere('cover_image', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('product_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $gallery = gallery::latest()->paginate($perPage);
        }

        return view('gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:20'
		]);
        $requestData = $request->all();
                if ($request->hasFile('cover_image')) {
            $requestData['cover_image'] = $request->file('cover_image')
                ->store('uploads', 'public');
        }

        gallery::create($requestData);

        return redirect('admin/gallery')->with('flash_message', 'gallery added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) 
    {
        $gallery = gallery::findOrFail($id);

        return view('gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $gallery = gallery::findOrFail($id);

        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:20'
		]);
        $requestData = $request->all();
                if ($request->hasFile('cover_image')) {
            $requestData['cover_image'] = $request->file('cover_image')
                ->store('uploads', 'public');
        }

        $gallery = gallery::findOrFail($id);
        $gallery->update($requestData);

        return redirect('admin/gallery')->with('flash_message', 'gallery updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        gallery::destroy($id);

        return redirect('admin/gallery')->with('flash_message', 'gallery deleted!');
    }
    public function getGallery()
    {
       
            $gallery = gallery::latest();

        return view('include.gallery', compact('gallery'));
    }
}
