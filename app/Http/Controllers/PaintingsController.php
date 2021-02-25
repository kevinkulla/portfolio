<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Painting;
use App\Models\Collection;
use ImageKit\ImageKit;


class PaintingsController extends Controller
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
        $paintings = Painting::latest()->paginate(5);

        return view('paintings.index', compact('paintings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('paintings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageKit = new ImageKit(
            "public_FP4NapuBHVk5/rzls8xm6eZLon8=",
            "private_Wi5Oh1xwOYNBxGL6SV6tyN0z72k=",
            "https://ik.imagekit.io/1gfgqmo2jq8"
        );

        $validatedData = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'medium' => 'required',
            'height' => 'required',
            'width' => 'required',
            'collection' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:25000',
        ]);

        $fileName = $request->image->getClientOriginalName();

        $file = file_get_contents($request->file('image'));
        $file = base64_encode($file);


        $uploadFile = $imageKit->upload(array(
            'file' => $file,
            'fileName' => $fileName,
        ));

        $results = $uploadFile;


        $fileId = $results->success->fileId;
        $fileName = $results->success->url;
        $thumbnail = $results->success->thumbnailUrl;

        $painting = new Painting;

        $painting->title = $request->title;
        $painting->year = $request->year;
        $painting->medium = $request->medium;
        $painting->height = $request->height;
        $painting->width = $request->width;
        $painting->collection = $request->collection;
        $painting->alt = $request->alt;
        // $painting->tags = $request->tags;
        $painting->url = $fileName;
        $painting->imageKitId = $fileId;
        $painting->thumbnail = $thumbnail;


        $painting->save();

        return redirect()->route('painting.create')
            ->with('success', 'Painting created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection, Painting $painting)
    {

        $imageKit = new ImageKit(
            "public_FP4NapuBHVk5/rzls8xm6eZLon8=",
            "private_Wi5Oh1xwOYNBxGL6SV6tyN0z72k=",
            "https://ik.imagekit.io/1gfgqmo2jq8"
        );

        $url = $imageKit->url(array(
            "path" => "/" . $painting->url,
            "transformation" => array(
                array(
                    "width" => "auto",
                    "dpr" => "auto",
                )
            )
        ));

        $painting->url = $url;


        return view('paintings.show', compact('painting', 'collection'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $painting = Painting::find('id');

        return view('paintings.create', compact('painting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Painting $painting)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'medium' => 'required',
            'height' => 'required',
            'width' => 'required',
            'collection' => 'required'
        ]);

        $painting->update([
            'title' => $request->title,
            'year' => $request->year,
            'medium' => $request->medium,
            'height' => $request->height,
            'collection' => $request->collection,
            'slug' => Str::slug($request->title, '-')
        ]);

        return redirect()->route('painting.index')
            ->with('success', 'Collection updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
        $painting->delete();

        return redirect()->route('painting.index')
            ->with('success', 'Painting deleted successfully');
    }
}
