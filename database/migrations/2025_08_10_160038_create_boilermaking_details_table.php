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
             $table->foreignId('venture_item_id')->constrained('venture_items')->onDelete('cascade');
        $table->text('project_details');
        $table->string('status', 50)->default('requested');
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
