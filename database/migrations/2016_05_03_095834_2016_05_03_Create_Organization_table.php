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
            $table->string('');
            $table->index('');
            $table->timestamps();
            $table->timestamps();
            $table->text('');
            $table->time('');
            $table->float('');
            $table->enum('',['','','']);
            $table->integer('');
            $table->json('');
            $table->date('');
            $table->dateTime('');
            $table->char('');
            $table->double('');
            $table->binary('');
            $table->boolean('');
            $table->bigInteger('');

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
