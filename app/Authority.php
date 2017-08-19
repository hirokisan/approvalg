<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    /**
     * Get related Item
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
