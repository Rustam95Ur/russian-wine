<?php

namespace App\Filters;

class WineFilter extends QueryFilter
{
    /**
     * @param $keyword
     * @return mixed
     */
    public function title($keyword = null)
    {
        if ($keyword) {
            return $this->builder->where('title', 'like', '%' . $keyword . '%');
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function wine_class($id)
    {
        return $this->builder->where('class_id', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function color($id)
    {
        return $this->builder->where('color_id', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function sugar($id)
    {
        return $this->builder->where('sugar_id', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function region($id)
    {
        return $this->builder->where('region_id', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function winery($id)
    {
        return $this->builder->where('winery_id', $id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function sort($id)
    {
        return $this->builder->where('grape_sort_id', $id);

    }
    public function price($order = 'asc')
    {
        return $this->builder->orderBy('price', $order);
    }
}
