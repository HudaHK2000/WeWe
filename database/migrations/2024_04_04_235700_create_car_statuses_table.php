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
        Schema::create('car_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignID('car_id')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignID('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_statuses');
    }
};