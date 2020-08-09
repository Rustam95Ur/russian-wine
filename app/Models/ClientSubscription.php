<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientSubscription extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function set()
    {
        return $this->belongsTo('App\Models\Set', 'set_id', 'id');
    }

    public function delivery()
    {
        return $this->hasMany('App\Models\ClientSubscriptionStatus', 'client_subscription_id');
    }

}
