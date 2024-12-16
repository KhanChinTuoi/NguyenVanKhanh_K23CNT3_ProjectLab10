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
        Schema::create('nvkctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('nvkSoPN');
            $table->string('nvkMavt');
            $table->integer('nvkSlnhap');
            $table->float('nvkDgnhap');
            //primary
            $table->primary('nvkSoPN','nvkMavt');
            //khoa ngoai
            $table->foreign('nvkSoPN')->references('nvkSoPN')->on('nvkpnhap');
            $table->foreign('nvkMavt')->references('nvkMavt')->on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctpnhap');
    }
};
