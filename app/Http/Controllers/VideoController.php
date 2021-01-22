<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Pack;

class VideoController extends Controller
{
    public function show($slug)
    {
    	$video = Video::with('staff', 'tags')->where('slug', $slug)->first();

    	$videos = Video::with('staff', 'tags')->whereHas('staff', function ($query) use ($video) {
		    return $query->whereIn('id', $video->staff->pluck('id'));
		})->get();

		$related = Video::with('staff', 'tags')->whereHas('tags', function ($query) use ($video) {
		    return $query->whereIn('id', $video->staff->pluck('id'));
		})->get();

		$packs = Pack::with('staff')->whereHas('staff', function ($query) use ($video) {
		    return $query->whereIn('id', $video->staff->pluck('id'));
		})->get();

        return view('video', [
        	'video' => $video,
        	'videos' => $videos,
        	'related' => $related,
        	'packs' => $packs
        ]);
    }
}
