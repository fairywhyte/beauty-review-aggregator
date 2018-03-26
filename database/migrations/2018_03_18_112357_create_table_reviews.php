<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('reviews', function(Blueprint $table) {
            $table->increments('id');
            $table->string('id_in_shop')->nullable();
            $table->string('review_url')->nullable();
            $table->longtext('review_text')->nullable();
            $table->longtext('all_reviews_data')->nullable();
            $table->string('rating_count_per_star')->nullable();
            $table->decimal('five_star_rating_percentage')->nullable();
            $table->integer('five_star_rating_count')->nullable();
            $table->integer('recommended_count')->nullable();
            $table->decimal('recommended_count_percentage')->nullable();
            $table->integer('product_id')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}