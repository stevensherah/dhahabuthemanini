<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
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
            $events = Event::where('title', 'LIKE', "%$keyword%")
                ->orWhere('subtitle', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('date', 'LIKE', "%$keyword%")
                ->orWhere('time', 'LIKE', "%$keyword%")
                ->orWhere('Venue', 'LIKE', "%$keyword%")
                ->orWhere('cover_image', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('programme', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $events = Event::latest()->paginate($perPage);
        }

        return view('events.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('events.events.create');
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

        Event::create($requestData);

        return redirect('admin/events')->with('flash_message', 'Event added!');
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
        $event = Event::findOrFail($id);

        return view('events.events.show', compact('event'));
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
        $event = Event::findOrFail($id);

        return view('events.events.edit', compact('event'));
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

        $event = Event::findOrFail($id);
        $event->update($requestData);

        return redirect('admin/events')->with('flash_message', 'Event updated!');
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
        Event::destroy($id);

        return redirect('admin/events')->with('flash_message', 'Event deleted!');
    }
}
