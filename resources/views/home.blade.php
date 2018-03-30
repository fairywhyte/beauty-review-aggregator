<title>Home | La Ravelle </title>
@extends('layout')

@section('content')



<div class="searchbox-home container py-5" >

    <form method="GET" action="{{action('SearchController@index')}}" accept-charset="UTF-8">
    <div class="container d-flex flex-column justify-content-start searchbox-entry">
        <h1>Unravel serums' best kept secrets</h1>
        <div class="input-group input-group-lg mb-3">
            <input name="query" id="inputGroup-sizing-lg" type="text" class="form-control" placeholder="Enter product title, brand name, skin concern, eg 'Estee Lauder', 'wrinkles'..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>
    <p class="search-text">Or search by...</p>
    </div>


    <div class="search-categories container mt-1">

        <div class="row d-flex justify-content-between">
                @for($i=0; $i <3; $i ++)
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <div class="search-card card text-center m-auto">
                            <img class="card-img-top" src="{{$blocks[$i]['card-img-top src']}}" alt="{{$blocks[$i]['card-img top alt']}}">
                            <div class="card-body">
                                <p class="card-text font-weight-bold">{{$blocks[$i]['card-text']}}</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-item-1"><a href="{{$blocks[$i]['list-item-1-href']}}">{{$blocks[$i]['list-item-1']}}</a></li>
                                    <li class="list-group-item list-item-2"><a href="{{$blocks[$i]['list-item-2-href']}}">{{$blocks[$i]['list-item-2']}}</a></li>
                                    <li class="list-group-item list-item-3"><a href="{{$blocks[$i]['list-item-3-href']}}">{{$blocks[$i]['list-item-3']}}</a></li>
                                    <a href="{{$blocks[$i]['view-all href']}}" class="btn btn-primary view-all mt-1 justify-content-center">View All</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endfor
        </div>
    </div>

</div>
@endsection