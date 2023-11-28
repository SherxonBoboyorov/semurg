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
        Schema::create('kasko_auto_models', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')
                ->references('id')
                ->on('kasko_auto_brands')
                ->onDelete('CASCADE');

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasko_auto_models');
    }
};
