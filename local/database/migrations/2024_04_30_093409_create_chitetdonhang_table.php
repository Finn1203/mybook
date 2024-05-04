<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitetdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitetdonhang', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_dondathang')->unsigned();
            $table->foreign('id_dondathang')->references('id')->on('dondathang')->onDelete('cascade');
            $table->Integer('id_sach')->unsigned();
            $table->foreign('id_sach')->references('id')->on('sach')->onDelete('cascade');
            $table->tinyInteger('soluong');
            $table->float('dongia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitetdonhang');
    }
}
