<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const TYPE_TASTING = 1;
    const TYPE_TOUR = 2;
}
