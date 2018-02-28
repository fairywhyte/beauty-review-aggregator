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
        Schema::create('product_is_in_shop', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('shop_id');
            $table->decimal('rating');
            $table->integer('num_of_ratings');
            $table->date('scraped_at');
            $table->decimal('price');
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
