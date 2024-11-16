<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->default('');
            $table->integer('price')->nullable();
            $table->text('dates')->nullable();
            $table->string('special')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('doctors');
    }
};
