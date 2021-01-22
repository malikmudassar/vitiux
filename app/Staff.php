<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function getUrlAttribute()
    {
        return "/staff/{$this->slug}";
    }

    public function getImageSmallAttribute()
    {
        return "/storage/staff/{$this->id}-small.png";
    }

    public function getImageMediumAttribute()
    {
        return "/storage/staff/{$this->id}-medium.png";
    }

    public function getImageLargeAttribute()
    {
        return "/storage/staff/{$this->id}-large.png";
    }
}
