<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('products', function($table)
      {
          $table->increments('id');
          $table->string('title');
          $table->string('model');
          $table->string('description');
          $table->integer('contact')->unsigned();
          $table->foreign('contact')->references('id')->on('users');
          $table->timestamps();
      });
      
      DB::table('products')->insert(
      array(
      'title' => 'Radlader',
      'model' => 'LG952H',
      'description' => 'Loaders is a widely used for highway, railway, construction, water and electricity, ports, mining and other engineering conditions of the construction of construction machinery. ',
      'contact' => '1'
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
		Schema::drop('products');
	}

}
