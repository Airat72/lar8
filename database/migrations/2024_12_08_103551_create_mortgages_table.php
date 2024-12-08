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
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_active')->default(false);
            $table->text('description')->nullable();
            $table->unsignedInteger('percent')->default(0); //default 0 для удобства
            $table->unsignedInteger('min_first_payment')->default(0);
            $table->float('max_price')->nullable();
            $table->float('min_price')->nullable();
            $table->unsignedInteger('min_term')->default(0);
            $table->unsignedInteger('max_term')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgages');
    }
};