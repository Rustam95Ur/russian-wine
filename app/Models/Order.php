<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const TYPE_TASTING = 1;
    const TYPE_TOUR = 2;
    const TYPE_NOMINAL_WINE = 3;
    const TYPE_FRANCHISE = 4;
    const TYPE_CART = 5;
    const TYPE_FAVORITE = 6;
    const TYPE_QUESTION = 7;

}
