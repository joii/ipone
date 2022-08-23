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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->string('category_name_th');
            $table->string('category_name_en');
            $table->string('category_name_ch');
            $table->string('category_subtitle_th');
            $table->string('category_subtitle_en');
            $table->string('category_subtitle_ch');
            $table->text('category_description_th');
            $table->text('category_description_en');
            $table->text('category_description_ch');
            $table->longText('category_detail_th');
            $table->longText('category_detail_en');
            $table->longText('category_detail_ch');
            $table->string('category_slug_th');
            $table->string('category_slug_en');
            $table->string('category_slug_ch');
            $table->string('category_image');
            $table->string('category_background_image');
            $table->string('category_product_image');
            $table->integer('status');
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
        Schema::dropIfExists('categories');
    }
};
