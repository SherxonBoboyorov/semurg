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
        Schema::create('header_kackos', function (Blueprint $table) {
            $table->id();

            $table->string('image')->nullable();
            $table->string('icon')->nullable();

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('attribute');

            $table->string('link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_kackos');
    }
};
