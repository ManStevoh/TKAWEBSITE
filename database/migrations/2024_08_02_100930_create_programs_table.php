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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the program
            $table->text('description'); // Description of the program
           // $table->string('program'); // Program type (e.g., Program 1, Program 2)
            
            // Prices and sessions for different levels
            $table->integer('beginner_price')->default(24000);
            $table->integer('beginner_sessions')->default(20);
            $table->integer('intermediate_price')->default(40000);
            $table->integer('intermediate_sessions')->default(40);
            $table->integer('advanced_price')->default(40000);
            $table->integer('advanced_sessions')->default(40);
            $table->integer('expert_price')->default(50000);
            $table->integer('expert_sessions')->default(40);
            
            $table->string('image')->nullable(); // Path to the uploaded image
            
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
