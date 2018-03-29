<title>Product Detail {{$product->title}} By {{$product->brand->name}} | La Ravelle </title>
@extends('layout')

@section('content')
    <div class="container mx-auto px-0">
        <div class="card mb-5">
            <h5 class="card-header header">{{$product->title}} By {{$product->brand->name}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 ">
                        <img class="img-fluid img-responsive d-flex justify-content-center flex-row pt-5 mt-5 mx-4" src="{{action('ImageController@show', [$product->slug])}}" alt={{$product->slug}}By{{$product->brand->name}} class="image-responsive">
                    </div>
                    <div class="col-md-8 pt-4">
                        <p class="card-text"><span class="font-weight-bold">Brand : </span>{{$product->brand->name}}</p>
                        <p class="card-text "><span class="font-weight-bold">Brand Origin : </span>{{$product->brand->origin}}</p>
                        <p class="card-text "><span class="font-weight-bold ">Aggregated Average Rating : </span>{{ number_format($product->average_rating, 1)}} / 5.0</p>
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
                        <p class="card-text pt-2"><span class="font-weight-bold">Aggregated Number of Ratings : </span>{{$product->total_number_of_ratings}}</p>
                        <p class="card-text "><span class="font-weight-bold">Price (approx.) : </span>$ {{$product->price}}</p>
                        <p class="card-text"><span class="font-weight-bold">Product Details : </span></p><p>{{$product->description}}</p>
                    </div>
                </div>
            </div>

    <!--Reviews-->
            <div class="card-body px-2 py-0">
                <p class="card-text mx-4 mb-4"><span class="font-weight-bold">Most Helpful Review : </span><br>{{$product->most_helpful_review}}</p>
                <p class="card-text mx-4 mb-4"><span class="font-weight-bold">Number of People Who Found this Review Helpful:</span><br>{{$product->most_helpful_count}}/{{$product->total_number_of_ratings}}</p>
            </div>
        </div>
    </div>

@endsection
