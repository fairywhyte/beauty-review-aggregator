@extends('layout')

@section('content')



<div class="container mx-auto" >
    <div id="searchbox-entry" class="container d-flex flex-column justify-content-start">
        <h1>Where serums' best kept secrets get unraveled</h1>
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-center">
            <input id="searchbox" class="form-control mr-sm-2" style="width: 120vh; height: 7vh" type="search" placeholder="Enter product name or brand, eg 'Drunk Elephant'..." aria-label="Search">
            <button id="search-button" class="btn btn-outline-success my-2 my-sm-0" style="height: 7vh" type="submit">Search</button>
        </form>
    </div>

    <div id="search-by" class="mt-2">Or search by...</div>

    <div class="container mt-3 ">
        <div class="row ">
            <div class="col-sm-12 col-lg-4">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="http://satyr.io/100x50" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Skin Concern</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="http://satyr.io/100x50" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Brand Origin</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="http://satyr.io/100x50" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Brand Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection