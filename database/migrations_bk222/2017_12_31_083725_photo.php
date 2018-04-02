<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Lang
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('photo_id',20)->nullable();
            $table->string('title',255);
            $table->string('alias',255);
            $table->string('description',255)->nullable();
            
            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();     
            $table->integer('sticky')->nullable();   

            // Images
            $table->string('link','255')->nullable();
            $table->string('category_link','255')->nullable();             

            // Images
            $table->string('image_show','255')->nullable();

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
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('photo_gallery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo');
    }
}
