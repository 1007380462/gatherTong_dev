<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('organizationId');
            $table->time('startTime');
            $table->time('endTime');
            $table->tinyInteger('status');
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
        Schema::drop('loginLog');
    }
}
