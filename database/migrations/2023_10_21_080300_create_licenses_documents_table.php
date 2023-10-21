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
        Schema::create('licenses_documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('licensescategory_id')->nullable()->unsigned();
            $table->foreign('licensescategory_id')
            ->references('id')
            ->on('licenses_categories')
            ->onDelete('cascade');

            $table->string('image');
            
            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('size')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses_documents');
    }
};
