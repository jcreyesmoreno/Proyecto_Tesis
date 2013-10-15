<?php

use Illuminate\Database\Migrations\Migration;

class CreateThesisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thesis', function($table){
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->string('career');
			$table->integer('year');
			$table->string('index');
			$table->string('prologue');
			$table->string('thesis');
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
		Schema::drop('thesis');
	}

}