<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    public function staff()
    {
        return $this->belongsToMany('App\Staff');
    }

    public function videos()
    {
        return $this->belongsToMany('App\Video');
    }

    public function getUrlAttribute()
    {
        return "/pack/{$this->slug}";
    }

    public function getImageSmallAttribute()
    {
        return "/storage/packs/{$this->id}-small.png";
    }

    public function getImageMediumAttribute()
    {
        return "/storage/packs/{$this->id}-medium.png";
    }

    public function getImageLargeAttribute()
    {
        return "/storage/packs/{$this->id}-large.png";
    }

    public function getFileTrailerAttribute()
    {
        return "/storage/packs/2-trailer.mp4";
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
