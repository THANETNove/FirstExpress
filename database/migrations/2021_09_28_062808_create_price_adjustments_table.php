<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_adjustments', function (Blueprint $table) {
            $table->id();
            $table->string('rebate')->nullable();
            $table->string('weightMin1');
            $table->string('weightMax1');
            $table->string('cost1');
            $table->string('sellingPriceBangkok1');
            $table->string('sellingPriceUpcountry1');
            $table->string('weightMin2');
            $table->string('weightMax2');
            $table->string('cost2');
            $table->string('sellingPriceBangkok2');
            $table->string('sellingPriceUpcountry2');
            $table->string('weightMin3');
            $table->string('weightMax3');
            $table->string('cost3');
            $table->string('sellingPriceBangkok3');
            $table->string('sellingPriceUpcountry3');
            $table->string('weightMin4');
            $table->string('weightMax4');
            $table->string('cost4');
            $table->string('sellingPriceBangkok4');
            $table->string('sellingPriceUpcountry4');
            $table->string('weightMin5');
            $table->string('weightMax5');
            $table->string('cost5');
            $table->string('sellingPriceBangkok5');
            $table->string('sellingPriceUpcountry5');
            $table->string('weightMin6');
            $table->string('weightMax6');
            $table->string('cost6');
            $table->string('sellingPriceBangkok6');
            $table->string('sellingPriceUpcountry6');
            $table->string('weightMin7');
            $table->string('weightMax7');
            $table->string('cost7');
            $table->string('sellingPriceBangkok7');
            $table->string('sellingPriceUpcountry7');
            $table->string('weightMin8');
            $table->string('weightMax8');
            $table->string('cost8');
            $table->string('sellingPriceBangkok8');
            $table->string('sellingPriceUpcountry8');
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
        Schema::dropIfExists('price_adjustments');
    }
}
