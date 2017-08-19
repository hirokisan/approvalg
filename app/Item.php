<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Get related user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get related authority
     */
    public function authority()
    {
        return $this->belongsTo('App\Authority');
    }
}
