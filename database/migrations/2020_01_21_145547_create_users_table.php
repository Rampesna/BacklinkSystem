<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name_surname',64);
            $table->string('username',24)->unique();
            $table->string('email',128)->unique();
            $table->string('password',128)->unique();
            $table->string('phone',10)->unique();
            $table->smallInteger('balance')->unsigned();
            $table->tinyInteger('is_activated')->unsigned();
            $table->tinyInteger('is_banned')->unsigned()->default(0);
            $table->tinyInteger('is_admin')->unsigned();
            $table->tinyInteger('is_premium')->unsigned();
            $table->smallInteger('auth_level')->unsigned();
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
        Schema::dropIfExists('users');
    }
}
