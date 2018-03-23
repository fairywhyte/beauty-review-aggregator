@extends('layout')

@section('content')



<div class="container mx-auto mt-5 mb-5 py-5" >

    <form method="GET" action="{{action('SearchController@index')}}" accept-charset="UTF-8">
    <div id="searchbox-entry" class="container d-flex flex-column justify-content-start">
        <h1>Unravel serums' best kept secrets</h1>
        <div class="input-group input-group-lg mb-3">
                <input name="query" id="inputGroup-sizing-lg" type="text" class="form-control" placeholder="Enter product title or brand name, eg 'Estee Lauder'..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>



    </div>





    <div id="search-categories" class="container mt-3 ">
        <div class="row">
            <div class="col-sm-12 col-lg-4 mb-4">
                <div class="card text-center m-auto" style="width: 15rem;">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/08/24/11/52/serum-2676494_960_720.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text font-weight-bold">Metrics</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">80% 5-star rating</a></li>
                            <li class="list-group-item"><a href="#">Most Recommended</a></li>
                            <li class="list-group-item"><a href="#">Most Rated</a></li>
                            <a href="#" class="btn btn-primary mt-1 justify-content-center">View All</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4 mb-4">
                <div class="card text-center m-auto" style="width: 15rem;">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/11/14/03/44/asian-1822521_960_720.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text font-weight-bold">Brand Origin</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">K-Beauty</a></li>
                            <li class="list-group-item"><a href="#">French Skincare</a></li>
                            <li class="list-group-item"><a href="#">American Skincare</a></li>
                            <a href="#" class="btn btn-primary mt-1 justify-content-center">View All</a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4 mb-4">
                <div class="card text-center m-auto" style="width: 15rem;">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/11/19/11/35/serum-1050959_960_720.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text font-weight-bold">Hottest Brands</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#">Sunday Riley</a></li>
                            <li class="list-group-item"><a href="#">Drunk Elephant</a></li>
                            <li class="list-group-item"><a href="#">The Ordinary</a></li>
                            <a href="#" class="btn btn-primary mt-1 justify-content-center">View All</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection