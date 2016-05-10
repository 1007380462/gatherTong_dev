<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activityInfo',function(Blueprint $table){
            $table->increments('id');
            $table->integer('activityId');
            $table->text('content');
            $table->integer('maxNumber');
            $table->integer('currentNumber');
            $table->timestamps();//创建create_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
