<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Create table
        Schema::create('product', function (Blueprint $table) {    
            // Primary key
            $table->increments('id');
            
            // Lang
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('product_id',20)->nullable();
            $table->string('product_title',255); 
            $table->string('product_description',255)->nullable();               
            $table->text('product_content')->nullable();    
            $table->string('alias',255);

            // Order num
            $table->integer('views')->default(1);  
            $table->integer('order_num')->default(1);  

            // Trạng thái nóng
            $table->integer('hot')->nullable(); 
            // Trạng thái mới
            $table->integer('new')->nullable();   
            // Trạng thái mới
            $table->integer('promotion')->nullable();   
            // Trạng thái nổi bật
            $table->integer('sticky')->nullable();   
            // Trạng thái hiển thị
            $table->integer('status')->nullable(); 

            // Images
            $table->string('image_show','255')->nullable();
            $table->text('images')->nullable();

            // Các thuộc tính
            $table->text('properties')->nullable();

            // Các thuộc tính của giá => Price (Giá) + Unit ( Đơn vị ) + Ratio (Tiền / Đơn vị) [500.000 / 1 Kg | 75.000 / 100 gram ] + ( Tăng giảm tối thiểu bao nhiu) [ 100 | 50 | 1 | 0.5 ]
            $table->text('properties_price')->nullable();
            
            $table->text('properties_promotion')->nullable();
                        
            // Token
            $table->string('_Token',255)->nullable();
            
            // SEO
            // |___Meta
            $table->string('meta_title',200)->nullable();
            $table->string('meta_description',300)->nullable();
            $table->string('meta_keyword',200)->nullable();
            // Slug
            $table->string('seo_title',255)->nullable();

            // Slug
            $table->string('slug',255)->nullable();

            // focus keyword
            $table->string('focus_keyword',200)->nullable();


            // Times Edit_add
            $table->timestamps();

            // // Foregin key
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('product_category');

            // // Foregin key
            // $table->integer('brand_id')->unsigned();
            // $table->foreign('brand_id')->references('id')->on('product_brand');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
