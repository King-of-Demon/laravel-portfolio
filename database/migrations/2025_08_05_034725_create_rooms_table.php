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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('hotel_id');
            // $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreignId('hotel_id')->constrained('hotels', indexName: 'rooms_hotel_id')->onDelete('cascade');
            $table->enum('room_type', ['standard', 'deluxe', 'suite']);
            $table->decimal('price', 10, 2);
            $table->integer('capacity')->nullable();
            $table->integer('stock')->nullable();
            $table->text('facilities')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
