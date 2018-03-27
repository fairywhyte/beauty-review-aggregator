<?php

//$products connects to the products table in the database
//i have a controller as well that is generating search results, will put it all the way down

 @php
            $brands = [];
            $brands_count = [];

            foreach($products as $product){
                if(!isset($brands_count[$product->brand_id])){
                    $brands_count[$product->brand_id] = 0;
                }

                $brands_count[$product->brand_id]++;
                $brands[$product->brand_id] = $product->brand;
            }

            arsort($brands_count);
            $brands_ids = array_keys($brands_count);
        @endphp

        <div id="group-1" class="list-group collapse in">
            {{-- @for( $i = 0; $i < count($brands_ids); $i++) --}}
            {{-- @for( $i = 0; $i < min(5, count($brands_ids)); $i++) --}}

            @for( $i = 0; $i < count($brands_ids); $i++)
                <a class="list-group-item" href="#">
                    <span class="badge">{{ $brands_count[  $brands_ids[$i] ] }}</span> {{ $brands[ $brands_ids[$i] ]->name }}
                </a>
            @endfor

        </div>





// NEW VERSION

@php

  // $ranges=array("50", "100", "150")
  $prices=[
		50=>[],
  	100=>[],
  	150=>[]
	];

// 	for($products as $prod){ //loop over each product
//     $prodPrice=$prod->price;//prolly have to do some string->num conversion on them

//     if($prodPrice<=100){
//       $prices[50]=$prodPrice; //add to the array which contains prices <=50
//     }else if($prodPrice<=150){
//       $prices[100]=$prodPrice; //etc
//     }else{
//       $prices[150]=$prodPrice; //etc
//     }
//   }

	// 	go over each range and fill by that
	//first <= 50, then <=100 etc
	for($prices as $range=>$rangeArr){ //$key=>$value : 50=>[1, 6, 49]
    	for($products as $prod){ //find products that have a price <= $range : 50, 100 etc
        if($prod->price<=$range){ //price <= $range
          $range=$prod->price; //add to the existing array under each range
          break; //dance
        }
      }
  }
  					//arrays to make it work

						// $prices = [];
						// $prices_count [];

							//$product stands for the product table in the database(connects direcrly to it)=
  						// $product->price  selects the price from the table product

              // foreach($products as $product){
              //   if(!isset($prices_count[$product->price])){
              //       $prices_count[$product->price] = 0;
              //   }

              //gets the count of how many products per brand

						// $prices_count[$product->price]++;
						// not sure what to do with the line below
						// $brands[$product->brand_id] = $product->brand;
						// }

            arsort($prices_count);
            $brands_ids = array_keys($prices_count);
@endphp





        <div>
             @for($prices as $range=>$rangeArr) //$key=>$value : 50=>[1, 6, 49]
             		<div>
                  products: {{count($rangeArr);}} //how many products are in given range, $prices[50] should hold an array.
                  ranges: {{min($rangeArr)}} - {{max($rangeArr)}} //min max
                </div>
             @endfor
      	</div>











                  ///EVERYTHING BELOW IS JUST NOTES, NOTHING IS CODE ON THE SAME PAGE

                  //$product = is the product table in the database
                  //brand_id is a column in the database under the products table
                  //brand is in another table

                  //instead of brands and brands_count I need to switch it to prices and prices_count
                  //prices is located in the same table as $product


                  //table in database
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



					//SEARCH CONTROLLER



class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('query');

        $words = explode(' ', $q);

        $query = Product::query();

        foreach($words as $word){
            $query->where(function($query) use ($word){
                $query
                ->where('title', 'LIKE', '%'.$word.'%')
                ->orWhere('description', 'LIKE', '%'.$word.'%')
                ->orWhereHas('brand', function($query) use ($word){
                    $query
                    ->where('name', 'LIKE', '%'.$word.'%')
                    ->orWhere('origin', 'LIKE', '%'.$word.'%');
                });

            });
        }

        $products = $query->get();
        //toSql

        //return $products;
        return view('results', ['products' => $products, 'q' => $q]);
    }

}