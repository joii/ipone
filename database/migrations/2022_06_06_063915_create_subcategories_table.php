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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('subcategory_name_th');
            $table->string('subcategory_name_en');
            $table->string('subcategory_name_ch');
            $table->string('subcategory_subtitle_th');
            $table->string('subcategory_subtitle_en');
            $table->string('subcategory_subtitle_ch');
            $table->text('subcategory_description_th');
            $table->text('subcategory_description_en');
            $table->text('subcategory_description_ch');
            $table->longText('subcategory_detail_th');
            $table->longText('subcategory_detail_en');
            $table->longText('subcategory_detail_ch');
            $table->string('subcategory_slug_th');
            $table->string('subcategory_slug_en');
            $table->string('subcategory_slug_ch');
            $table->string('subcategory_image');
            $table->string('subcategory_background_image');
            $table->string('subcategory_product_image');
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
        Schema::dropIfExists('subcategories');
    }
};
