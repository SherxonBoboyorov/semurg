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
        Schema::create('contact_lists', function (Blueprint $table) {
            $table->id();

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('address_ru');
            $table->string('address_uz');
            $table->string('address_en');

            $table->string('phone');

            $table->string('work_days_ru');
            $table->string('work_days_uz');
            $table->string('work_days_en');

            $table->string('opening_hours_ru');
            $table->string('opening_hours_uz');
            $table->string('opening_hours_en');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_lists');
    }
};
