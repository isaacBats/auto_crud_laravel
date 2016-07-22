<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTable extends Migration {

    public function up()
    {
        Schema::create('media', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('type', 100);
            $table->string('source', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('media');
    }
}