<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;
use App\Models\Collection;
use App\Models\Painting;
use Newsletter;




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
        $collection = Collection::oldest()->first();
        $paintings = Painting::where('collection', $collection->id)->latest()->get();




        return view('index', compact('paintings', 'collection'));
    }

    public function submitEmail(Request $request)
    {


        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
            return redirect()
                        ->back()
                        ->with('success', 'You have been subscribed!');
        } else {
            return redirect()
                        ->back()
                        ->with('error', 'Sorry, there was an issue subscribing. Please try again. If this error continues please <a href="mailto:kevin@kevinkulla.com">send me an email</a> and I will get it sorted out.');

        }




    }

}
