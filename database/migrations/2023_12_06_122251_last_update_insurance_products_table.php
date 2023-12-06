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

            $table->string('banner_text_ru');
            $table->string('banner_text_uz');
            $table->string('banner_text_en');

            $table->text('banner_content_ru');
            $table->text('banner_content_uz');
            $table->text('banner_content_en');
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
