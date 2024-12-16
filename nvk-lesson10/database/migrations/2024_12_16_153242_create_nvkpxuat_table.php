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
        Schema::create('nvkpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPX')->primary();
            $table->date('nvkNgayxuat');
            $table->string('nvkTenkh',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkpxuat');
    }
};
