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
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->timestamps();
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('posts')->onDelete('cascade');
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
