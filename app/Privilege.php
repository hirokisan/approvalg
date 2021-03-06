<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    /**
     * Get related groups
     */
    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
