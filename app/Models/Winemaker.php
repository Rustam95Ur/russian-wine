<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winemaker extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wines()
    {
        return $this->belongsToMany('App\Models\Wine', 'winemaker_wine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function winery()
    {
        return $this->belongsTo('App\Models\Winery', 'winery_id', 'id');
    }

}
