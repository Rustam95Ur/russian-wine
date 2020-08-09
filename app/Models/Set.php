<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wines()
    {
        return $this->belongsToMany('App\Models\Wine');
    }

    public function nextSet()
    {
        return $this->belongsTo('App\Models\Set', 'next_set_id', 'id');
    }

    public function prevSet()
    {
        return $this->belongsTo('App\Models\Set', 'prev_set_id', 'id');
    }

    public function scopeSubscription($query)
    {
        return $query->where('in_subscription', 1);
    }
}
