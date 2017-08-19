<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->morphs('phase');
            //$table->unsignedTinyInteger('phase_id');
            //$table->string('phase_type', 100);
            $table->unsignedTinyInteger('item_category_id');
            $table->unsignedTinyInteger('authority_id');
            $table->unsignedTinyInteger('notification_id');
            $table->string('pdf_path');
            $table->string('link_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
