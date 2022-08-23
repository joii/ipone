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
        Schema::create('business_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('bl_section_id');
            $table->integer('bl_country_id');
            $table->integer('bl_type_id');
            $table->string('bl_name_th');
            $table->string('bl_name_en');
            $table->string('bl_name_ch');
            $table->string('bl_address1_th');
            $table->string('bl_address1_en');
            $table->string('bl_address1_ch');
            $table->string('bl_address2_th');
            $table->string('bl_address2_en');
            $table->string('bl_address2_ch');
            $table->string('bl_address3_th');
            $table->string('bl_address3_en');
            $table->string('bl_address3_ch');
            $table->string('bl_phone');
            $table->string('bl_email');
            $table->string('bl_transportation_th');
            $table->string('bl_transportation_en');
            $table->string('bl_transportation_ch');
            $table->string('bl_bts_th');
            $table->string('bl_bts_en');
            $table->string('bl_bts_ch');
            $table->string('bl_marker');
            $table->string('bl_image');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('business_locations');
    }
};
