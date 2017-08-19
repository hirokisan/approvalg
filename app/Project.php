<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get related related service
     */
    public function services()
    {
        return $this->belongsTo('App\Project');
    }
}
