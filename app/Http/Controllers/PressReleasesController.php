<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PressReleasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pressRelease = PressRelease::latest()->paginate(5);

        return view('press.index', compact('pressRelease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
            'press_date' => 'required'
        ]);

        $url = $request->photos->getClientOriginalName();
        $request->photos->move(public_path('images/press'), $url);

        $press = new PressRelease;

        $press->title = trim(strtolower($request->title));
        $press->description = $request->description;
        $press->press_date = $request->press_date;
        $press->photos = $request->url;
        $press->slug = Str::slug($press->title, '-');


        $press->save();

        return redirect()->route('press.index')
            ->with('success', 'Press Release created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function show(PressRelease $pressRelease)
    {
        return view('press.show', compact('pressRelease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function edit(PressRelease $pressRelease)
    {
        $press = PressRelease::find('id');

        return view('press.create', compact('pressRelease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PressRelease  $pressRelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(PressRelease $pressRelease)
    {
        $pressRelease->delete();

        return redirect()->route('press.index')
            ->with('success', 'Press Release deleted successfully');
    }
}
