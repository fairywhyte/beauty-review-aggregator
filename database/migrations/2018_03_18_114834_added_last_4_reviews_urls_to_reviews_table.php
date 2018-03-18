<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedLast4ReviewsUrlsToReviewsTable extends Migration
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
            [
            'id_in_shop' => 'P297517',
            'review_url' => 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP297517&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4'
            ]
            );
        DB::table('reviews')->insert(
            [
            'id_in_shop' => 'P400259',
            'review_url' => 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP400259&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4'
            ]
            );
        DB::table('reviews')->insert(
            ['id_in_shop' => 'P204606',
            'review_url' => 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP204606&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4'
            ]
        );
        DB::table('reviews')->insert(
            ['id_in_shop' => 'P417141',
            'review_url' => 'https://api.bazaarvoice.com/data/reviews.json?Filter=ProductId%3AP417141&Sort=Helpfulness%3Adesc&Limit=100&Offset=0&Include=Products%2CComments&Stats=Reviews&passkey=rwbw526r2e7spptqd2qzbkp7&apiversion=5.4'
            ]
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
