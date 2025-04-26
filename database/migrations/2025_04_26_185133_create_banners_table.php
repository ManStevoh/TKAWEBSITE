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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('background_image'); // for example: 'images/slider-main/slider_1.png'
            $table->string('title');             // for example: 'Welcome to Tech Kidz Africa'
            $table->string('subtitle');          // for example: 'We nurture technological skills...'
            $table->string('button1_text')->nullable(); // button 1 text (e.g., 'Our Services')
      
            $table->timestamps();                      // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
