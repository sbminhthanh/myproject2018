<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WsMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_menu', function (Blueprint $table) {
            // Primary key
            $table->increments('id');
            // lang_code
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('title',255);             
            $table->string('alias',255);
            $table->string('link',255)->nullable();

            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();  
            $table->integer('sticky')->nullable();

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
        Schema::dropIfExists('ws_menu');
    }
}
