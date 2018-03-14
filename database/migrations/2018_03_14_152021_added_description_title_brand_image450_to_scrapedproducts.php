<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedDescriptionTitleBrandImage450ToScrapedproducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scraped_products', function (Blueprint $table) {
            $table->string('title', 127)->nullable();
            $table->string('brand', 127)->nullable();
            $table->text('description')->nullable();
            $table->string('image450');
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
