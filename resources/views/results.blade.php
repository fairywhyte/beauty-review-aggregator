@extends('layout')

@section('content')

<div class="navbar navbar-default visible-xs">
  <div class="container-fluid">
    <button class="btn btn-default navbar-btn" data-toggle="collapse" data-target="#filter-sidebar">
      <i class="fa fa-tasks"></i> Toggle Sidebar
    </button>
  </div>
</div>

<div class="container-fluid">

  <div class="row">

    <!-- filter sidebar -->
    <div id="filter-sidebar" class="col-xs-6 col-sm-3 visible-sm visible-md visible-lg collapse sliding-sidebar">

      <div>
        <h4 data-toggle="collapse" data-target="#group-1">
          <i class="fa fa-fw fa-caret-down parent-expanded"></i>
          <i class="fa fa-fw fa-caret-right parent-collapsed"></i>
          Brand
        </h4>
        <div id="group-1" class="list-group collapse in">
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
        <h4 data-toggle="collapse" data-target="#group-2">
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
        <h4 data-toggle="collapse" data-target="#group-3">
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
        <h4 data-toggle="collapse" data-target="#group-4">
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

<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead">
        <strong class="text-danger">3</strong> results were found for the search for
        <strong class="text-danger">Lorem</strong>
    </h2>
</hgroup>

<section class="products">

    <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 mb-3">
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/03/20/12/38/flower-3243156_1280.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
        </div>

    </section>


</div>

      </table>

    </div>

  </div>
</div>

<script>
  if (!isTouchDevice()) {
  $('[data-toggle*="tooltip"]').tooltip();
}

// utility

function isTouchDevice() {
	return !!('ontouchstart' in window || navigator.msMaxTouchPoints);
}
  </script>

  @endsection