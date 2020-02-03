<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->tinyInteger('remained')->unsigned();
            $table->string('alexa_global',10);
            $table->string('country',3)->nullable();
            $table->string('alexa_country',10);
            $table->string('google_index_count',10)->default(0);
            $table->string('sites_linking_in',10);
            $table->string('type',10);
            $table->tinyInteger('is_adult')->unsigned();
            $table->string('da_value',10);
            $table->string('pa_value',10);
            $table->smallInteger('price')->unsigned();
            $table->tinyInteger('is_delete')->unsigned()->default(0);
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
        Schema::dropIfExists('links');
    }
}
