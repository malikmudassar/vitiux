<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Pack;
use App\Staff;

class PackController extends Controller
{
    public function show($slug)
    {
    	$pack = Pack::where('slug', $slug)->first();

        return view('pack', [
        	'pack' => $pack,
        	'packs' => Pack::with('staff')->orderBy('created_at', 'desc')->get(),
        	'videos' => Video::with('staff', 'tags')->orderBy('created_at', 'desc')->limit(6)->get()
        ]);
    }
}
