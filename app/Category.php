<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get related projects
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
