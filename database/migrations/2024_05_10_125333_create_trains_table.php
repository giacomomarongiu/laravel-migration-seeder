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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('enterprise', 20);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('departure_time')->nullable();
            $table->date('arrival_time')->nullable();
            $table->string('train_code', 30)->default('00000');
            $table->integer('carriages_number')->nullable();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
