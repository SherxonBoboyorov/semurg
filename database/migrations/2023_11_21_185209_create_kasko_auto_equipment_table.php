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
        Schema::create('kasko_auto_equipments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('model_id')->index();
            $table->foreign('model_id')
                ->references('id')
                ->on('kasko_auto_models')
                ->onDelete('CASCADE');

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->decimal('price', 12, 2, true);
            $table->decimal('tariff', 3, 1, true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasko_auto_equipments');
    }
};
