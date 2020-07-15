<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    const WINE_TYPE = 0;
    const MICRO_WINE_TYPE = 1;

    public function images()
    {
        return $this->hasMany('App\Models\WineryImage');
    }

    public function wines()
    {
        return $this->hasMany('App\Models\Wine');
    }
}
