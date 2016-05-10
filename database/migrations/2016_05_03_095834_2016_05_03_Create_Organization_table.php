<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization',function(Blueprint $table){
            $table->increments('id');
            $table->string('logo')->unique();
            $table->string('name')->unique();
            $table->tinyInteger('status');
            $table->timestamps();//创建create_at update_at

        });

       Schema::table('tableName',function($table){
           $table->string('')->nullable();//允许其为空
           $table->string('')->first();//将该列设置为表的第一列
           $table->default("value");//设置默认值
           $table->unsigned();//将integer列为unsigned
       });

        //
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
