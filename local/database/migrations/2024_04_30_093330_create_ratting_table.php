<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRattingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratting', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->integer('masach')->unsigned();
            $table->foreign('masach')->references('id')->on('sach')->onDelete('cascade');
            $table->smallInteger('makhachhang')->unsigned();
            $table->foreign('makhachhang')->references('id')->on('khachhang')->onDelete('cascade');
            $table->integer('xeploai')->unsigned();
            $table->text('comment');
            $table->dateTime('ngaydang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratting');
    }
}
