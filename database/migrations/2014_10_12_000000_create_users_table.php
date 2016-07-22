<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cd_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->text('about')->nullable();
            $table->integer('avatar_id')->unsigned()->nullable();
            $table->string('address1', 250)->nullable();
            $table->string('address2', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('postal_code', 100)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('gender', 250)->nullable();
            $table->tinyInteger('email_verified');
            $table->string('verification_code', 250);
            $table->rememberToken('rememberToken');
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
        Schema::drop('cd_users');
    }
}
