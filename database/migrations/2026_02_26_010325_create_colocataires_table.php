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
        Schema::create('colocataires', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_owner');
            $table->boolean('is_active');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('colocation_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colocataires');
    }
};
