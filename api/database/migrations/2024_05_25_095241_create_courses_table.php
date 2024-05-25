<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string ("iamge") ; 
            $table->integer ("privacy") ; 
            $table->unsignedBigInteger('instructor_id');
            $table->string('category');
            $table->timestamps();
            $table->foreign('instructor_id')->references('id')->
            on('users'); 
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
