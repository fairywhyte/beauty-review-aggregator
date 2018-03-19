<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraColumnsForReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->longtext('all_reviews_data')->nullable();
            $table->string('rating_count_per_star')->nullable();
            $table->decimal('five_star_rating_percentage')->nullable();
            $table->integer('recommended_count')->nullable();
            $table->decimal('recommended_count_percentage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
}
