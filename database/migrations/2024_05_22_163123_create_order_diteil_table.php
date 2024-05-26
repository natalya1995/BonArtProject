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
        Schema::create('order_diteil', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('picture_id')->nullable(true);
            $table->decimal('price');
            $table->integer('bids_id')->nullable(true);
            $table->boolean('Purchase_type')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_diteil');
    }
};
