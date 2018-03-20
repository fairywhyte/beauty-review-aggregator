<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScrapedProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('scraped_products', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('product_id')->nullable();
            $table->string('slug')->index('slug')->nullable();
            $table->integer('shop_id')->nullable();
            $table->string('id_in_shop')->nullable();
            $table->decimal('rating')->nullable();
            $table->integer('num_of_ratings')->nullable();
            $table->date('scraped_at')->nullable();
            $table->string('price')->nullable();
            $table->unique(['shop_id', 'id_in_shop'])->nullable();
            $table->string('product_url')->nullable();
            $table->integer('skuId')->nullable();
            $table->text('title')->nullable();
            $table->string('brand', 127)->nullable();
            $table->text('description')->nullable();
            $table->string('image450')->nullable();
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
        //
        Schema::dropIfExists('scraped_products');
    }
}
