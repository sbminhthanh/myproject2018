<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountInfomation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_infomation', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

            // Content
            $table->string('name',255);      
            $table->string('phone',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('cmnd',255)->nullable();
            $table->string('images',255)->nullable();
            $table->string('birthdate',255)->nullable();

            // Token
            $table->string('_Token',255)->nullable();
            
            // Times Edit_add
            $table->timestamps();

             // Foregin key
             $table->integer('account_id')->unsigned();
             $table->foreign('account_id')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_infomation');
    }
}
