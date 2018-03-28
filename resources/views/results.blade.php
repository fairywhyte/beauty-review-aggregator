@extends('layout')

@section('content')


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









@php


  $prices=[
    0=>[],
    1=>[],
    2=>[]
  ];

  foreach($products as $product){
    $productPrice = floatval(str_replace('$', '', $product->price));
    $product->price = $productPrice;
    $product->save();

    if($productPrice<=50){
        $prices[0][]=$productPrice;
      }elseif($productPrice<=100){
        $prices[1][]=$productPrice;
      }else{
        $prices[2][]=$productPrice;
    }
  }

  foreach($prices as $range=>$rangeArr){
      foreach($products as $product){
        if($product->price<=$range){
          $range=$product->price;
          break;
        }
      }
  }

@endphp



<div class="container-fluid side-bar float:left">
    <h2> Categories </h2>

  <div class="row">

    <!-- filter sidebar -->
    <div id="filter-sidebar" class="col-xs-6 col-sm-3">

      <div>
        <h4 class="side-bar-h4" id="h4Id1">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Brand
        </h4>

        <div id="group-1" class="list-group collapse in">
            {{-- @for( $i = 0; $i < count($brands_ids); $i++) --}}
            {{-- @for( $i = 0; $i < min(5, count($brands_ids)); $i++) --}}

            @for( $i = 0; $i < count($brands_ids); $i++)
                <a class="list-group-item" href="{{action('SearchController@index', ['brand'=>$brands[ $brands_ids[$i] ]->name])}}">
                    <span class="badge badge-pill badge-primary">{{ $brands_count[  $brands_ids[$i] ] }}</span> {{ $brands[ $brands_ids[$i] ]->name }}
                </a>
            @endfor

        </div>
      </div>



      <div>
        <h4 class="side-bar-h4" id="h4Id4">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Ratings
        </h4>
        <div id="group-4" class="list-group collapse in">
        @for( $i=0; $i < count($prices); $i++)
          <a class="list-group-item" href="{{action('SearchController@index', ['price'=>$i]) }}">

            <span class="badge badge-pill badge-primary">{{count($prices[$i])}}
              </span>
            @if(count($prices[$i]) > 0)
              {{ min($prices[$i])}} - {{max($prices[$i])}}
            @endif
            $
          </a>
          @endfor
        </div>
      </div>

    </div>

    <!-- table container -->
    <div class="col-sm-9">

      <table class="table table-striped table-hover table-responsive">

<div class="container">

@if(isset($q))
<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead">
        <strong class="text-danger">{{ count($products) }}</strong> results were found for the search for
        <strong class="text-danger">{{ $q }}</strong>
    </h2>
</hgroup>
@endif

<section class="products">

    <div class="row">

      @foreach($products as $product)
        <div class="col-sm-12 col-lg-4 col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top pt-5" src="{{action('ImageController@show', [$product->slug] )}}" alt="{{$product->slug}}">
                    <div class="card-body">
                        <p class="card-text text-center">
                          <h5 class="card-title text-center">{{$product->brand->name}}</h5>
                          <p class="product-title text-center">{{$product->title}}</p>
                          <p class="price text-center">Price (approx): $ {{$product->price}}</p>
                          <p class="average-rating text-center ">Average rating: {{number_format($product->average_rating,1)}}</p>
                          @php

                        for($x=1;$x<=$product->getStars();$x++) {
                            echo '<img src="/assets/stars_rating/star.png" />';
                        }
                        if (strpos($product->getStars(),'.')) {
                            echo '<img src="/assets/stars_rating/half-star.png" />';
                            $x++;
                        }
                        while ($x<=5) {
                            echo '<img src="/assets/stars_rating/blank-star.png" />';
                            $x++;
                        }
                        @endphp
                          <p class="number-of-reviews text-center pt-4"><b>Aggregated # of reviews: {{number_format($product->total_number_of_ratings)}}</b></p>
                          <p class="recommended text-center">Recommended: {{($product->recommended_count_percentage)*100}}%</p>
                          <div class="justify-content">
                            <a href="{{action('ProductController@show',[$product->slug])}}" class="btn btn-primary">View</a>
                          </div>

                    </div>
            </div>
          </div>

    @endforeach
    </div>

    </section>


</div>

      </table>

    </div>

  </div>
</div>

<script>

$('#h4Id1').click(function(){
  $('#group-1').toggle();
})

$('#h4Id2').click(function(){
  $('#group-2').toggle();
})

$('#h4Id3').click(function(){
  $('#group-3').toggle();
})

$('#h4Id4').click(function(){
  $('#group-4').toggle();
})

  </script>

  @endsection