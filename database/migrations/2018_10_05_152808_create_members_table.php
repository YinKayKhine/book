<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function (Blueprint $table) {
			$table->increments('id');
			$table->string('username');
			$table->string('email')->unique();
			$table->string('password'); 
			$table->text('address');
			$table->string('phone_no');
			$table->string('gender');
			$table->string('nrc');
			$table->timestamps();
			$table->date('deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('members');
	}
}
