<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * Get related project
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * Get related planItemCategoryStatus
     */
    public function planItemCategoryStatus()
    {
        return $this->hasOne('App\PlanItemCategoryStatus');
    }

    /**
     * Get related itemCategory
     */
    public function itemCategory()
    {
        return $this->morphMany('App\Item', 'phase');
    }
}
