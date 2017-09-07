<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PlanItemCategoryStatus extends Model
{
    /**
     * Get related plan
     */
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

    /**
     * Create column
     */
    public function createColumn($name)
    {
        Schema::table('plan_item_category_statuses', function(Blueprint $table) use ($name)
        {
           $table->unsignedTinyInteger($name)->default('0');
        });
    }
}
