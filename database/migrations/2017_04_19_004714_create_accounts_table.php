<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // build table structure
        Schema::create('accounts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('account_number')->index();
            $table->integer('type_id');
            $table->integer('customer_id')->index();
            $table->double('balance', 15,2);

            $table->timestamp('last_access_time');
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
        Schema::drop('accounts');
    }
}
