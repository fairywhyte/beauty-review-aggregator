<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');       // adds id, AI, PK
            $table->integer('product_skuId')->nullable();
            $table->integer('brand_id')->nullable(); //brand column replaced by brand_id column
            $table->string('slug')->nullable();
            $table->string('title', 127)->nullable();     // adds user_id (int (11))
            $table->text('description')->nullable();           // adds text (TEXT)
            $table->string('price')->nullable();
            $table->string('average_rating')->nullable();
            $table->integer('total_number_of_ratings')->nullable();
            $table->decimal('five_star_rating_percentage')->nullable();
            $table->decimal('recommended_count_percentage')->nullable();
            $table->text('most_helpful_review')->nullable();
            $table->integer('most_helpful_count')->nullable();
            $table->string('img450')->nullable();
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
        Schema::dropIfExists('products');
    }
}
