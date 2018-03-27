@extends('layout')

@section('content')





<div class="container-fluid side-bar">
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
      </div>

      <div>
        <h4 class="side-bar-h4" id="h4Id2">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Skin Type
        </h4>
        <div id="group-2" class="list-group collapse in">
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
        </div>
      </div>

      <div>
        <h4 class="side-bar-h4" id="h4Id3">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Price
        </h4>
        <div id="group-3" class="list-group collapse in">
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
        </div>
      </div>

      <div>
        <h4 class="side-bar-h4" id="h4Id4">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Ratings
        </h4>
        <div id="group-4" class="list-group collapse in">
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
          <a class="list-group-item" href="#">
            <span class="badge">3</span> John Lennon
          </a>
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
        <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{action('ImageController@show', [$product->slug] )}}" alt="{{$product->slug}}">
                    <div class="card-body">
                        <p class="card-text">
                          <p class="brand-name">{{$product->brand->name}}</p>
                          <p class="product-title">{{$product->title}}</p>
                          <p class="price">{{$product->price}}</p>
                          <p class="average-rating">Average rating: {{number_format($product->average_rating,1)}}</p>
                          <p class="number-of-reviews">Number of reviews: {{number_format($product->total_number_of_ratings)}}</p>
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