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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('booking_id');
            // $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreignId('booking_id')->constrained('bookings', indexName: 'payments_booking_id')->onDelete('cascade');
            $table->enum('payment_method', ['manual_transfer', 'cash', 'e_wallet', 'virtual_account']);
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded']);
            $table->string('proof_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
