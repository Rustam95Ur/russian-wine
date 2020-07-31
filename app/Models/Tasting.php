<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasting extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function wines()
    {
        return $this->belongsToMany('App\Models\Wine');
    }

}
