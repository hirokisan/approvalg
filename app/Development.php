<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    /**
     * Get related developItemCategoryStatus
     */
    public function developItemCategoryStatus()
    {
        return $this->hasOne('App\DevelopItemCategoryStatus');
    }

    /**
     * Get related itemCategory
     */
    public function itemCategory()
    {
        return $this->morphMany('App\Item', 'phase');
    }
}
