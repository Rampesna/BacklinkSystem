<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_links', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('user_site_id');
            $table->integer('link_id');
            $table->string('keyword',128);
            $table->tinyInteger('is_added');
            $table->tinyInteger('is_reported');
            $table->tinyInteger('is_seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchased_links');
    }
}
