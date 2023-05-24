<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::orderBy("vote", "desc")->get();

        return view("home", ["movies" => $movies]);
    }

    public function show($id){
        $movies = Movie::all();
        $movie =$movies->find($id);

        return view("show", ["movie" => $movie]);
    }
}
