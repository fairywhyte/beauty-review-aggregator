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
            $table->string('title', 127);     // adds user_id (int (11))
            $table->string('brand', 127); // adds question_id (int (11))
            $table->text('description');           // adds text (TEXT)
            $table->decimal('price');
            $table->string('image', 255);
            $table->decimal('average_rating');
            $table->integer('total_number_of_ratings');
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
