<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdLogin',function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId');
            $table->string('openId');
            $table->index('openId');
            $table->string('thirdPlatform');
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
