<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('policy');
            $table->string('cc_id');
            $table->string('broker');
            $table->date('date_turn');
            $table->date('date_from');
            $table->date('date_to');
        });

        Schema::create('house_insurance', function (Blueprint $table) {
            $table->integer('house_id')->unsigned();
            $table->integer('insurance_id')->unsigned();

            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('house_insurance');
        Schema::drop('insurances');
    }
}
