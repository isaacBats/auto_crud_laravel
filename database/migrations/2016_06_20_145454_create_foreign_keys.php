<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('cd_users', function(Blueprint $table) {
			$table->foreign('avatar_id')->references('id')->on('cd_media')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('cd_users', function(Blueprint $table) {
			$table->dropForeign('users_avatar_id_foreign');
		});
	}
}