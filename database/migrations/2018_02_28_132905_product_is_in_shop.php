<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductIsInShop extends Migration
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
            $table->integer('product_id');
            $table->string('slug')->index('slug');
            $table->integer('shop_id');
            $table->string('id_in_shop');
            $table->decimal('rating');
            $table->integer('num_of_ratings');
            $table->date('scraped_at');
            $table->decimal('price');
            $table->unique(['shop_id', 'id_in_shop']);
            $table->string('product_url');
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
        Schema::dropIfExists('product_is_in_shop');
    }
}
