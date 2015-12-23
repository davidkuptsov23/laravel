<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('persons_types_id')->unsigned();
            $table->string('name');
            $table->string('mail_address_name')->default('name');
            $table->string('mail_address_zip')->default('house_zip');
            $table->string('mail_address_city')->default('house_city');
            $table->string('mail_address_street')->default('house_street');
            $table->string('mail_address_number')->default('house_number');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('tel_1');
            $table->string('tel_2');
            $table->date('date_from');
            $table->date('date_to');

            $table->foreign('persons_types_id')->references('id')->on('person_types')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('block_person', function (Blueprint $table) {

            $table->integer('block_id')->unsigned();
            $table->integer('person_id')->unsigned();

            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('block_person');
        Schema::drop('persons');
    }
}
