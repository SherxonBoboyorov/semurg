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
        Schema::create('automobile_prices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('car_id')->index();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('CASCADE');

            $table->unsignedBigInteger('automobilemodel_id')->index();
            $table->foreign('automobilemodel_id')->references('id')->on('automobile_models')->onDelete('CASCADE');

            $table->unsignedBigInteger('equipment_id')->index();
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('CASCADE');

            $table->string('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automobile_prices');
    }
};
