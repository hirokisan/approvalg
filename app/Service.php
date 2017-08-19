<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * Get related project
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
