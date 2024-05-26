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
        Schema::create('_creators_pictures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('picture_id')->nullable(true);
            $table->integer('creator_id')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_creators_pictures');
    }
};
