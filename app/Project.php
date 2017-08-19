<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get related related service
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    /**
     * Get related related category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
