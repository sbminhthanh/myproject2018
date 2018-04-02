<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table
        Schema::create('order', function (Blueprint $table) {    
            // Primary key
            $table->increments('id');
            
            // Content
            $table->string('name',255)->comment('Tên người nhận'); 
            $table->string('email',255)->comment('Email người nhận');               
            $table->string('address',255)->comment('Địa chỉ giao hàng');               
            $table->string('phone',255)->comment('Điện thoại liên lạc');               
            $table->string('total',255)->comment('Tổng tiền trên hóa đơn');               
            $table->text('note')->nullable()->comment('Lời nhắn đến cửa hàng');    

            $table->integer('option')->nullable()->comment('Trạng thái hóa đơn');  
            // Trạng thái hiển thị
            $table->integer('status')->nullable()->comment('Trạng thái đã xem - chưa');  
                        
            // Token
            $table->string('_Token',255)->nullable();
  
            // Times Edit_add
            $table->timestamps();

            // // Foregin key
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');;

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
