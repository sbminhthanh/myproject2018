<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_access', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Content
            $table->string('access_id',20)->nullable();
            $table->string('access_name',255);             
            $table->string('access_description',255)->nullable();
            $table->text('access_content')->nullable();
            // Login Admintrator
            $table->string('area_admin',255)->nullable();
            // Option Access
            $table->string('news',255)->nullable();
            $table->string('account',255)->nullable();
            $table->string('product',255)->nullable();
            $table->string('gallery',255)->nullable();
            $table->string('cart',255)->nullable();
            $table->string('file',255)->nullable();
            $table->string('video',255)->nullable();
            $table->string('config',255)->nullable();


            // Order num
            $table->integer('order_num')->default(1);  
            // Bật tắt
            $table->integer('status')->nullable();     

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
        Schema::dropIfExists('account_access');
    }
}
