<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Pack;
use App\Staff;

class StaffController extends Controller
{
    public function show($slug)
    {
    	$staff = Staff::where('slug', $slug)->first();

    	$videos = Video::with('staff', 'tags')->whereHas('staff', function ($query) use ($staff) {
		    return $query->where('id', $staff->id);
		})->orderBy('created_at', 'desc')->limit(4)->get();

		$others = Video::with('staff', 'tags')->whereHas('staff', function ($query) use ($staff) {
		    return $query->where('id', $staff->id);
		})->whereNotIn('id', $videos->pluck('id'))->orderBy('created_at', 'desc')->limit(6)->get();

		$packs = Pack::with('staff', 'videos')->whereHas('staff', function ($query) use ($staff) {
		    return $query->where('id', $staff->id);
		})->get();

        return view('staff', [
        	'staff' => $staff,
        	'videos' => $videos,
        	'others' => $others,
        	'packs' => $packs
        ]);
    }
}
