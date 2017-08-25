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
     * Get related itemCategories
     */
    public function itemCategories()
    {
        return $this->morphMany('App\Item', 'phase');
    }
}
