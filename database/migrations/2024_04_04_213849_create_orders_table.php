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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('latitude');
            $table->double('longitude');
            $table->string('blood_group');
            $table->foreignId('user_id')->nullable()->constrained()->references('id')->on('users');
            $table->foreignId('urgent_user_id')->nullable()->constrained()->references('id')->on('urgent_users');            
            $table->foreignId('car_id')->nullable()->references('id')->on('cars');
            $table->double('price')->unsigned()->nullable();
            $table->string('status')->default('NewOrder');
            $table->boolean('hide')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
