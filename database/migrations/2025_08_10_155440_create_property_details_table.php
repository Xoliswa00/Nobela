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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
                    $table->foreignId('venture_item_id')->constrained('venture_items')->onDelete('cascade');
        $table->string('house_size', 50);
        $table->string('yard_size', 50)->nullable();
        $table->unsignedInteger('bedrooms')->default(0);
        $table->unsignedInteger('bathrooms')->default(0);
        $table->decimal('price', 15, 2);
        $table->text('address');
        $table->string('bank_approval_status', 50)->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
