<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    //
    public function index(){
        $movies = Movie::all();

        dd($movies);
        return view('home', compact('movies'));
    }
}
