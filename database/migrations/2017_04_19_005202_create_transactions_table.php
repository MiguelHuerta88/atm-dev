<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // structure the table
        Schema::create('transactions', function(Blueprint $table){
            $table->increments('id');
            $table->double('amount', 15, 2);
            $table->integer('account_id')->index();
            $table->timestamp('created_at');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop the table
        Schema::drop('transactions');
    }
}
