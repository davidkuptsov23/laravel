<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('account_number');
            $table->integer('account_types_id')->unsigned();
            $table->boolean('selenium');

            $table->foreign('account_types_id')->references('id')->on('account_types')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('bank_house', function (Blueprint $table) {
            $table->integer('house_id')->unsigned();
            $table->integer('bank_id')->unsigned();

            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bank_house');
        Schema::drop('banks');
    }
}
