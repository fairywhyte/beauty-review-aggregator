<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillEntireBrandOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            //
        });

        DB::table('brands')->insert(
        [
            'name'=>'Algenist',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'AMOREPACIFIC',
            'origin'=>'Korea'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Anthony',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'bareMinerals',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'BECCA',
            'origin'=>'Australia'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'belif',
            'origin'=>'Korea'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Biossance',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Bliss',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Blithe',
            'origin'=>'Korea'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Bobbi Brown',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'boscia',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Caudalie',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Clarins',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'CLINIQUE',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Conture',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'COOLA',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'COVER FX',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'DERMAdoctor',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dermarche Labs',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dior',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dr Roebuck’s',
            'origin'=>'Australia'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dr. Brandt Skincare',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dr. Dennis Gross Skincare',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Dr. Jart+',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Drunk Elephant',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Edible Beauty',
            'origin'=>'Australia'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Erborian',
            'origin'=>'Korea'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Erno Laszlo',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Estée Lauder',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Eve Lom',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Farmacy',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'FARSÁLI',
            'origin'=>'Canada'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'First Aid Beauty',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Fresh',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'GLAMGLOW',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Guerlain',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'IT Cosmetics',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Jack Black',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Josie Maran',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Jurlique',
            'origin'=>'Australia'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Kane NY',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'KAPLAN MD',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Karuna',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Kate Somerville',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'KENZOKI',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Kiehl\'s Since 1851',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Koh Gen Do',
            'origin'=>'Japan'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'KORRES',
            'origin'=>'Greece'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'La Mer',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Lancer',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Lancôme',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'LANEIGE',
            'origin'=>'Korea'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Laura Mercier',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'L’Occitane',
            'origin'=>'France'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'MDSolarSciences',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Murad',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'NARS',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Natasha Denona',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'NuFACE',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'OLEHENRIKSEN',
            'origin'=>'Denmark'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Omorovicza',
            'origin'=>'Hungary'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Origins',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Perricone MD',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Peter Thomas Roth',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'philosophy',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'REN',
            'origin'=>'United Kingdom'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Shiseido',
            'origin'=>'Japan'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'SK-II',
            'origin'=>'Japan'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Skin Inc.',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Skin Laundry',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'SUNDAY RILEY',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Tata Harper',
            'origin'=>'United Kingdom'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Tatcha',
            'origin'=>'Japan'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'The Ordinary',
            'origin'=>'United States'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'VERSO SKINCARE',
            'origin'=>'Sweden'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Vita Liberata',
            'origin'=>'United Kingdom'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Youth To The People',
            'origin'=>'United Kingdom'
        ]
        );
        DB::table('brands')->insert(
        [
            'name'=>'Yves Saint Laurent',
            'origin'=>'France'
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
        Schema::table('brands', function (Blueprint $table) {
            //
        });
    }
}
