<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    /**
     * The database table used by the model.
     *s
     * @var string
     */
    protected $table = 'favorite';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'wine_id'
    ];
    public function clients()
    {
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }

    public function wines()
    {
        return $this->belongsTo('App\Models\Wine', 'wine_id', 'id');
    }
}

