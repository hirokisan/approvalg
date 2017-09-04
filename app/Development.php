<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    /**
     * Get related developmentItemCategoryStatus
     */
    public function developmentItemCategoryStatus()
    {
        return $this->hasOne('App\developmentItemCategoryStatus');
    }

    /**
     * Get related items
     */
    public function items()
    {
        return $this->morphMany('App\Item', 'phase');
    }
}
