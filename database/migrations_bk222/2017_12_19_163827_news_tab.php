<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tab', function (Blueprint $table) {
            // Primary key
            $table->increments('id');
            
            // Lang
            $table->string('lang_code',10)->default('vi');
            
            // Content
            $table->string('icon',255)->nullable();
            $table->string('title_tab',255)->nullable();           
            $table->string('title',255)->nullable();
            $table->string('description',255)->nullable();
            $table->text('content')->nullable();

            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();   
            $table->integer('sticky')->nullable();   
            
            // Token
            $table->string('_Token',255)->nullable();
            
            // Times Edit_add
            $table->timestamps();

            // Foregin key
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_tab');
    }
}
