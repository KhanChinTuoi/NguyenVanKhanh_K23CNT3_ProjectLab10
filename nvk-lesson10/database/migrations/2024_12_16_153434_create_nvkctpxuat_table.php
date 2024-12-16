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
        Schema::create('nvkctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPX');
            $table->string('nvkMavt');
            $table->integer('nvkSlxuat');
            $table->float('nvkDgxuat');
            //primary
            $table->primary('nvkSoPX','nvkMavt');
            //khoa ngoai
            $table->foreign('nvkSoPX')->references('nvkSoPX')->on('nvkpxuat');
            $table->foreign('nvkMavt')->references('nvkMavt')->on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctpxuat');
    }
};
