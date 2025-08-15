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
        Schema::create('venture_items', function (Blueprint $table) {
            $table->id();
                  $table->foreignId('venture_id')->constrained('ventures')->onDelete('cascade');
        $table->string('title', 255);
        $table->string('status', 50)->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venture_items');
    }
};
