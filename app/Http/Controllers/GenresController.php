<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    public function genres(){
        $genres = Genre::all();
        return view('pages.genres', ['allGenres' => $genres]);
    }
}
