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
        Schema::create('province_destinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('destination_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('province_destination');
    }
};
