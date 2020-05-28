<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //创建表
    public function up()
    {
        //brand表名字
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('id');//第一个字段是自增的id
            $table->string("name");//第二个字段是name
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //删除表
    public function down()
    {
        Schema::drop('brand');
    }
}
