<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedSkuIdToScrapedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scraped_products', function (Blueprint $table) {
            $table->integer('skuId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scraped_products', function (Blueprint $table) {
            Schema::dropIfExists('scraped_products');
        });
    }
}
