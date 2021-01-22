<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function getUrlAttribute()
    {
        return "/busqueda/{$this->slug}";
    }
}
