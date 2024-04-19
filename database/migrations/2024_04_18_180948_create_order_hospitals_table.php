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
        Schema::create('order_hospitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->references('id')->on('orders');
            $table->foreignId('hospital_id')->constrained()->references('id')->on('hospitals');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_hospitals');
    }
};
