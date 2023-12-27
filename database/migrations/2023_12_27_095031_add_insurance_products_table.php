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
        Schema::table('insurance_products', function (Blueprint $table) {
            $table->string('title_left_ru')->nullable();
            $table->string('title_left_uz')->nullable();
            $table->string('title_left_en')->nullable();

            $table->string('title_right_ru')->nullable();
            $table->string('title_right_uz')->nullable();
            $table->string('title_right_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
