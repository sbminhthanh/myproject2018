<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            // Primary key
            $table->increments('id');
            // lang_code
            $table->string('lang_code',10)->default('vi');
            
            // Content
            $table->string('menu_title',255);             
            $table->string('alias',255);
            $table->string('menu_description',255)->nullable();
            $table->string('target',20)->nullable();
            $table->string('link',255)->nullable();
            $table->integer('params')->nullable();

            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();  
            $table->integer('sticky')->nullable();

            // Images
            $table->string('icon','255')->nullable();// Icon
            $table->string('images_show','255')->nullable();//Show

            // Times Edit_add
            $table->timestamps();

            // // Foregin key
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('menu_group')->onDelete('cascade');;

            // Tree 
            NestedSet::columns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
