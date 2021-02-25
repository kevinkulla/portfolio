<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Models\Collection;
use App\Models\Painting;




class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Collection $collection)
    {
        $collection = Collection::latest()->first();
        $paintings = Painting::where('collection', $collection->id)->get();




        return view('index', compact('paintings', 'collection'));
    }
}
