<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Get related user
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get related related privilege
     */
    public function privilege()
    {
        return $this->belongsTo('App\Privilege');
    }
}
