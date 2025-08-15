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
        Schema::create('logistics_details', function (Blueprint $table) {
            $table->id();
                    $table->foreignId('venture_item_id')->constrained('venture_items')->onDelete('cascade');
        $table->string('origin', 255);
        $table->string('destination', 255);
        $table->date('pickup_date')->nullable();
        $table->date('delivery_date')->nullable();
        $table->string('vehicle_type', 50)->nullable();
        $table->string('status', 50)->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistics_details');
    }
};
