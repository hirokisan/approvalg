<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get related service
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    /**
     * Get related category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get related plan
     */
    public function plan()
    {
        return $this->hasOne('App\Plan');
    }

    /**
     * Get related development
     */
    public function development()
    {
        return $this->hasOne('App\Development');
    }
}
