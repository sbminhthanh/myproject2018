<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Lang
            $table->string('lang_code',10)->default('vi');

            // Content
            $table->string('user',50)->nullable();
            $table->string('pass',100)->nullable();           
            
            // Status
            $table->integer('order_num')->default(1);  
            $table->integer('status')->nullable();     
            $table->integer('sticky')->nullable();   
            $table->integer('active')->nullable();     
            $table->integer('code_active')->nullable();   
            $table->integer('email_active')->nullable();               

            // Token
            $table->string('_Token',255)->nullable();
            
            // Times Edit_add
            $table->timestamps();

            // Foregin key
            $table->integer('access_id')->unsigned();
            $table->foreign('access_id')->references('id')->on('account_access');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
