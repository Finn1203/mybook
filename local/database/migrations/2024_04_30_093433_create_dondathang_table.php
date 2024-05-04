<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')->references('id')->on('khachhang')->onDelete('cascade');
            $table->float('tongtien');
            $table->string('phuongthucthanhtoan');
            $table->string('hoten',100);
            $table->string('gioitinh',10);
            $table->string('email',150);
            $table->string('diachi');
            $table->string('sodienthoai',10);
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('dondathang');
    }
}
