<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanItemCategoryStatus extends Model
{
    /**
     * Get related plan
     */
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
