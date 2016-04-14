<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('number');
            $table->text('description');
            $table->text('work_type');
            $table->timestamp('start');
            $table->timestamp('complete');
            $table->integer('hours');
            $table->boolean('pending');

            $table->integer('order_id')->unsigned();
            $table
                ->foreign('order_id')
                ->references('id')
                ->on('orders');

            $table->integer('bay_id')->unsigned();
            $table
                ->foreign('bay_id')
                ->references('id')
                ->on('bays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stages');
    }
}
