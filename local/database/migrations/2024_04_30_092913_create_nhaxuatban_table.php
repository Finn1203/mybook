<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaxuatbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhaxuatban', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('tennhaxuatban',120);
            $table->string('diachi',120);
            $table->string('email',100);
            $table->string('fax',11);
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
        Schema::dropIfExists('nhaxuatban');
    }
}
