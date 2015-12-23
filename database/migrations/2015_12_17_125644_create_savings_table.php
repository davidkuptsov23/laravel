<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('houses_id')->unsigned();
            $table->string('bank_name');
            $table->string('mod');
            $table->string('policy_sum');
            $table->string('length_months');
            $table->string('monthly_savings');
            $table->string('policy_number');
            $table->string('account_number');
            $table->date('date_end');
            $table->date('date_from');
            $table->date('date_to');

            $table->foreign('houses_id')->references('id')->on('houses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('savings');
    }
}
