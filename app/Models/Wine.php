<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Wine extends Model
{
    use Translatable;
    protected $translatable = ['title'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Models\Color', 'color_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sugar()
    {
        return $this->belongsTo('App\Models\Sugar', 'sugar_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sort()
    {
        return $this->belongsTo('App\Models\GrapeSort', 'grape_sort_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function winery()
    {
        return $this->belongsTo('App\Models\Winery', 'winery_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function excerpt()
    {
        return $this->belongsTo('App\Models\Excerpt', 'excerpt_id', 'id');
    }
}

