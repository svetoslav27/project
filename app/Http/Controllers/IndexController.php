<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class IndexController extends Controller
{
    public function home(){
        $movies = Movie::all();
        return view('pages.index',['allMovies' => $movies]);
    }
    
    public function findMovie(){

        $searchterm = request()->query('query');
        if ($searchterm) {
            $movie=Movie::where('name','LIKE',"%{$searchterm}%")->paginate(5);
        }  
        else {
            $movie=Movie::simplePaginate(10);
        }
        return view('pages.index')->with('allMovies', $movie);
    }
}
