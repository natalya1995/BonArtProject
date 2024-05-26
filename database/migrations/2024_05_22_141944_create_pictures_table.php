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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('img');
            $table->integer('creator_id')->nullable(true);
            $table->string('size');
            $table->string('description');
            $table->integer('janre_id')->nullable(true);
            $table->integer('location_id')->nullable(true);
            $table->integer('sector_id')->nullable(true);
            $table->integer('committent_id')->nullable(true);
            $table->decimal('estimate');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
