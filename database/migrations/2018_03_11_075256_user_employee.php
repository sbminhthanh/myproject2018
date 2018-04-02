<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employee', function (Blueprint $table) {
            // Primary key
            $table->increments('id');

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
            $table->integer('per_id')->unsigned();
            $table->foreign('per_id')->references('id')->on('permission')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_employee');
    }
}
