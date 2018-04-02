<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_group', function (Blueprint $table) {
            // Primary key
            $table->increments('id');
            // lang_code
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('title',255);             
            $table->string('alias',255);
            $table->string('description',255)->nullable();

            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();  
            $table->integer('sticky')->nullable();

            // Images
            $table->string('icon','255')->nullable();

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
        Schema::dropIfExists('menu_group');
    }
}
