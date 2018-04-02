<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Create table
        Schema::create('news', function (Blueprint $table) {    
            // Primary key
            $table->increments('id');
            
            // Lang
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('news_id',20)->nullable();
            $table->string('news_title',255); 
            $table->string('news_description',255)->nullable();               
            $table->text('news_content')->nullable();    
            $table->string('alias',255);

            // Status
            $table->integer('views')->default(1);  
            $table->integer('order_num')->default(1);  

            // Trạng thái nóng
            $table->integer('hot')->nullable(); 
            // Trạng thái mới
            $table->integer('new')->nullable();   
            // Trạng thái nổi bật
            $table->integer('sticky')->nullable();   
            // Trạng thái hiển thị
            $table->integer('status')->nullable();    

            // Images
            $table->string('image_show','255')->nullable();
            $table->text('images')->nullable();
            
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
            $table->foreign('category_id')->references('id')->on('news_category');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
