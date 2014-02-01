<?php

use Illuminate\Database\Migrations\Migration;

class UserTableAddTypeColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user',function($table){
			$table->text('type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user',function($table){
			$table->dropColumn('type');
		});
	}

}