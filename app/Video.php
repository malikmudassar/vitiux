<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function getUrlAttribute()
    {
        return "/video/{$this->slug}";
    }

    public function getImageSmallAttribute()
    {
        return "/storage/videos/{$this->id}-small.png";
    }

    public function getImageMediumAttribute()
    {
        return "/storage/videos/{$this->id}-medium.png";
    }

    public function getImageLargeAttribute()
    {
        return "/storage/videos/{$this->id}-large.png";
    }

    public function getFileAttribute()
    {
        return "/storage/videos/{$this->id}.mp4";
    }

    public function getFileTrailerAttribute()
    {
        return "/storage/videos/2-trailer.mp4";
    }

    public function getPriceFormattedAttribute()
    {
        return '$' . number_format($this->price, 0, ",", ".") . ' CLP';
    }

    public function getStaffFormattedAttribute()
    {
        return $this->staff->implode('name', ' & ');
    }
}
