<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Collection;
use App\Models\Painting;
use ImageKit\ImageKit;

class CollectionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $collections = Collection::latest()->paginate(5);

        return view('collections.index', compact('collections'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collections.create');
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
        ]);

        $collection = new Collection;

        $collection->title = trim(strtolower($request->title));
        $collection->description = $request->description;
        // $collection->slug = Str::slug($collection->title, '-');


        $collection->save();

        return redirect()->route('collection.index')
            ->with('success', 'Collection created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $paintings = Collection::first()->paintings;


        return view('collections.show', compact('paintings'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $collection = Collection::find($id);

            return view('collections.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $collection->update([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title, '-')
        ]);

        return redirect()->route('collection.index')
            ->with('success', 'Collection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {

        $collection->delete();

        return redirect()->route('collection.index')
            ->with('success', 'Collection deleted successfully');
    }
}
