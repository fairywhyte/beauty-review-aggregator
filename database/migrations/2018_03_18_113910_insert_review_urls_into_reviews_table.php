<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertReviewUrlsIntoReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            //
        });

        DB::table('reviews')->insert(
            array(
                'id_in_shop' => 'P384780',
                'review_url' => 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP384780&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4'
            )
        );

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
