<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('users', function($table)
      {
          $table->increments('id');
          $table->string('email')->unique();
          $table->string('last_name');
          $table->string('first_name');
          $table->date('birthday')->nullable();
          $table->timestamps();
      });
      
      DB::table('users')->insert(
      array(
      'email' => 'beyer@chemmedia.de',
      'last_name' => 'Beyer',
      'first_name' => 'Anke',
      'birthday' => '1986-07-11'
          )
      );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
