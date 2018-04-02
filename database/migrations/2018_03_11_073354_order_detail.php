<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {    
            // Primary key
            $table->increments('id');
            
            $table->string('pro_name',255)->nullable()->comment('Tên sản phẩm');                        
            $table->string('pro_sale',255)->nullable()->comment('Khuyến mãi');                        
            $table->string('pro_price',255)->nullable()->comment('Giá sản phẩm');                        
            // Đơn vị bao gồm : 100 gam -> Number : 100, Text: gam
            // Ví dụ: 3 chai -> Number : 3, Text : chai 
            $table->integer('pro_unit_number')->nullable()->comment('Đơn vị');                        
            $table->string('pro_unit_description',255)->nullable()->comment('Đơn vị');                        
            $table->integer('pro_quantity')->nullable()->comment('Số lượng');  
  
            // Times Edit_add
            // Times Edit_add
            $table->timestamps();

            // // Foregin key
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');;

             // // Foregin key
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('id')->on('product')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
