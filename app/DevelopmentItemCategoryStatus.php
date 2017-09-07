<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DevelopmentItemCategoryStatus extends Model
{
    /**
     * Get related development
     */
    public function development()
    {
        return $this->belongsTo('App\Development');
    }

    /**
     * Create column
     */
    public function createColumn($name)
    {
        Schema::table('development_item_category_statuses', function(Blueprint $table) use ($name)
        {
           $table->unsignedTinyInteger($name)->default('0');
        });
    }
}
