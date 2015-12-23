<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('houses_id')->unsigned();
            $table->integer('block_types_id')->unsigned();
            $table->string('sub_lot_number');
            $table->string('prop_share');
            $table->date('date_from');
            $table->date('date_to');

            $table->foreign('houses_id')->references('id')->on('houses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('block_types_id')->references('id')->on('block_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blocks');
    }
}
