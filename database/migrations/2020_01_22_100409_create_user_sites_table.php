<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sites', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->smallInteger('user_id')->unsigned();
            $table->string('url')->unique();
            $table->string('alexa_global',10);
            $table->string('alexa_country',10);
            $table->string('google_index_count',10);
            $table->string('sites_linking_in',10);
            $table->string('da_value',10);
            $table->string('pa_value',10);
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
        Schema::dropIfExists('user_sites');
    }
}
