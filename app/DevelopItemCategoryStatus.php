<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevelopItemCategoryStatus extends Model
{
    /**
     * Get related development
     */
    public function development()
    {
        return $this->belongsTo('App\Development');
    }
}
