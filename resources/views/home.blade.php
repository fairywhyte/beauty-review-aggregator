@extends('layout')

@section('content')



<div class="container">
    <h1>Where serums' best kept secrets get unraveled</h1>
    <form class="form-inline my-lg-0">
        <div>
            <input class="form-control-lg form-control" type="search" placeholder="Enter product name, brand, eg 'Estee Lauder...'">
        </div>
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <div>Or search by...</div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://satyr.io/100x50" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Skin Concern</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://satyr.io/100x50" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Brand Origin</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
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