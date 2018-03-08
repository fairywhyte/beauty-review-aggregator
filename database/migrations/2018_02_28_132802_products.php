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
            $table->string('title', 127)->nullable();     // adds user_id (int (11))
            $table->string('brand', 127)->nullable(); // adds question_id (int (11))
            $table->text('description')->nullable();           // adds text (TEXT)
            $table->string('price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('average_rating')->nullable();
            $table->integer('total_number_of_ratings')->nullable();
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
