<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaisachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisach', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->tinyInteger('madanhmuc')->unsigned();
            $table->foreign('madanhmuc')->references('id')->on('danhmuc')->onDelete('cascade');
            $table->string('tenloai',120);
            $table->string('anhbia',120);
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
        Schema::dropIfExists('loaisach');
    }
}
