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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name_th');
            $table->string('brand_name_en');
            $table->string('brand_name_ch');
            $table->string('brand_description_th');
            $table->string('brand_description_en');
            $table->string('brand_description_ch');
            $table->longText('brand_detail_th');
            $table->longText('brand_detail_en');
            $table->longText('brand_detail_ch');
            $table->string('brand_slug_th');
            $table->string('brand_slug_en');
            $table->string('brand_slug_ch');
            $table->string('brand_logo');
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
        Schema::dropIfExists('brands');
    }
};
