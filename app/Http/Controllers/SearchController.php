<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class SearchController extends Controller
{
    public function show($q)
    {
    	$videos = Video::with('staff', 'tags')->whereHas('tags', function ($query) use ($q) {
		    return $query->where('name', 'like', "%{$q}%");
		})->get();

        return view('busqueda', [
        	'q' => $q,
        	'videos' => $videos
        ]);
    }
}
