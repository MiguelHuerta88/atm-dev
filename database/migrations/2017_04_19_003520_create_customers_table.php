<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // begin to structure the customers table
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('first');
            $table->string('last');
            $table->string('address');
            $table->char('state', 4);
            $table->string('city');
            $table->integer('zip');
            $table->string('pin'); // hashed
            $table->string('username')->index()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop table
        Schema::drop('customers');
    }
}
