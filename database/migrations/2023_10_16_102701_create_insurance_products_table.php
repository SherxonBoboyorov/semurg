<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('insurancecategory_id')->nullable()->unsigned();
            $table->foreign('insurancecategory_id')
            ->references('id')
            ->on('insurance_categories')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->text('content_ru');
            $table->text('content_uz');
            $table->text('content_en');

            $table->string('meta_title_ru')->nullable();
            $table->string('meta_title_uz')->nullable();
            $table->string('meta_title_en')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();
            $table->text('meta_description_en')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_products');
    }
};
