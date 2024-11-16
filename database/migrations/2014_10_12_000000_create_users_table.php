<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('bloodgroup')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->default('https://www.google.com/imgres?q=user%20image%20default&imgurl=https%3A%2F%2Fas2.ftcdn.net%2Fv2%2Fjpg%2F03%2F31%2F69%2F91%2F1000_F_331699188_lRpvqxO5QRtwOM05gR50ImaaJgBx68vi.jpg&imgrefurl=http');
            $table->string('dateofbirth')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
