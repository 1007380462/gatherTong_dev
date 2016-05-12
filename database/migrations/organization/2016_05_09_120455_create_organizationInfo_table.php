<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizationInfo',function(Blueprint $table){
            $table->increments('id');
            $table->integer('organizationId');
            $table->text('purpose');
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
        Schema::drop('organizationInfo');
    }
}
