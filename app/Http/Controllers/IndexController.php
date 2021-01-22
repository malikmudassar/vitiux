<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Pack;
use App\Staff;
use App\Advertisement;

class IndexController extends Controller
{
    public function show()
    {
        return view('index', [
        	'promoted' => Video::with('staff')->where('promoted', 1)->first(),
        	'featured' => Video::with('staff')->where('featured', 1)->first(),
            'boosteds' => Video::with('staff', 'tags')->orderBy('created_at', 'desc')->where('boosted', 1)->limit(6)->get(),
        	'videos' => Video::with('staff', 'tags')->orderBy('created_at', 'desc')->where('promoted', 0)->where('featured', 0)->where('boosted', 0)->limit(6)->get(),
        	'packs' => Pack::with('staff')->orderBy('created_at', 'desc')->get(),
            'staff' => Staff::orderBy('created_at', 'desc')->get(),
            'advertisements' => Advertisement::orderBy('created_at', 'desc')->limit(6)->get()
        ]);
    }
}
