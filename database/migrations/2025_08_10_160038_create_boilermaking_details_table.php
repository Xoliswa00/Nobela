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
        Schema::create('boilermaking_details', function (Blueprint $table) {
            $table->id();
           $table->string('name'); // Project or service name
    $table->string('type'); // Type of boilermaking (industrial, residential, etc.)
    $table->integer('duration_days')->nullable(); // Estimated duration in days
    $table->decimal('cost', 12, 2)->nullable(); // Estimated cost
    $table->text('description')->nullable(); // Full project/service description
    $table->json('materials')->nullable(); // List of materials used
    $table->string('status')->default('pending'); // Status: pending, in-progress, completed
      $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boilermaking_details');
    }
};
