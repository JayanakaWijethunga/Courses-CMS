<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
class HomeController extends Controller
{

    public function index()
    {
        
        $series = Series::latest()->take(3)->get();
        return response()->json($series);
        
        //return view('home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
