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
        Schema::create('nvkctdondh', function (Blueprint $table) {
            //$table->id();
            // $table->timestamps();
            $table->string('nvkSoDH');
            $table->string('nvkMavt');
            $table->integer('nvkSldat');
            //tao khoa chinh tren 2 cot (nvkSoDH, nvkMavt)
            $table->primary(['nvkSoDH','nvkMavt']);
            //khoa ngoai
            $table->foreign('nvkSoDH')->references('nvkSoDH')->on('nvkdondh');
            $table->foreign('nvkMavt')->references('nvkMavt')->on('nvkvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkctdondh');
    }
};
