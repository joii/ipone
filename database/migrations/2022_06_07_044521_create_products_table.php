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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('product_name_th');
            $table->string('product_name_en');
            $table->string('product_name_ch');
            $table->string('product_subtitle_th');
            $table->string('product_subtitle_en');
            $table->string('product_subtitle_ch');
            $table->text('product_description_th');
            $table->text('product_description_en');
            $table->text('product_description_ch');
            $table->longText('product_detail_th');
            $table->longText('product_detail_en');
            $table->longText('product_detail_ch');
            $table->string('product_size');
            $table->string('product_slug_th');
            $table->string('product_slug_en');
            $table->string('product_slug_ch');
            $table->string('product_thumbnail');
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
        Schema::dropIfExists('products');
    }
};
