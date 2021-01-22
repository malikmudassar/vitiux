<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getUrlAttribute()
    {
        return "/categoria/{$this->slug}";
    }

    public function getImageSmallAttribute()
    {
        return "/storage/categorias/{$this->id}-small.png";
    }

    public function getImageMediumAttribute()
    {
        return "/storage/categorias/{$this->id}-medium.png";
    }

    public function getImageLargeAttribute()
    {
        return "/storage/categorias/{$this->id}-large.png";
    }
}
