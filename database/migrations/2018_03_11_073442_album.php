<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Content
            $table->string('album_id',20)->nullable();
            $table->string('title',255);
            $table->string('alias',255);
            $table->string('description',255)->nullable();            

            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();     
            $table->integer('sticky')->nullable();
            
            // Images
            $table->string('image_show','255')->nullable();
            $table->text('images')->nullable();

            // Token
            $table->string('_Token',255)->nullable();
           
            // Times Edit_add
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
        Schema::dropIfExists('album');
    }
}
