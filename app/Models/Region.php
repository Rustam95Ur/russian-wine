<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wines()
    {
        return $this->hasMany('App\Models\Wine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wineries()
    {
//        return $this->hasMany('App\Models\Winery')->orderBy('sort_order', 'ASC');
        return $this->hasMany('App\Models\Winery');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sorts()
    {
        return $this->belongsToMany('App\Models\GrapeSort', 'region_grape_sort');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quote()
    {
        return $this->belongsTo('App\Models\Quote', 'quote_id', 'id');
    }

}
