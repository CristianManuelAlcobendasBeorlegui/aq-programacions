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
        Schema::create('criteris', function (Blueprint $table) {
            $table->id();
            $table->string('criterion');
            $table->string('description')->nullable();
            $table->string('year');
            $table->foreignId('modul_id')->constrained();
            $table->foreignId('ra_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criteris');
    }
};
