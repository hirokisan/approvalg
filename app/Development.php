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
        return $this->hasMany('App\DevelopItemCategoryStatus');
    }
}
