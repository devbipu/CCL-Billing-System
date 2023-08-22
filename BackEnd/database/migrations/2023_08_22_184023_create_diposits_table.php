<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diposits', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')->constrained(
                'customer',
                'id'
            );
            $table->int('add_deposit')->nullable();
            $table->int('return_deposit')->nullable();
            $table->foreignId('user_id')->constrained(
                'users',
                'id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diposits');
    }
};
