
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" />


    <link rel="stylesheet" href="/css/app.css">
<title>{{$product->title}}</title>

    <style>

    </style>
</head>

<body>
@include('navbar')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">{{$product->title}}</h5>
                    <div class="card-img-top d-flex  flex-column flex-sm-row align-items-center">
                        <div class="container mt-0">
                             <img class="img-fluid img-detail" height="auto" src="{{action('ImageController@show', [$product->slug])}}" alt="EL_PoreMinimizingSkinRefresher" height="200" width="200"  class="image-responsive">
                        </div>
                        <div class="card-body m-auto">
                        <p class="card-text col-md-8 p-2 m-0">Product Name : {{$product->title}}</p>
                            <p class="card-text col-md-8 p-2 m-0">Brand : {{$product->brand->name}}</p>
                            <p class="card-text col-md-8 p-2 m-0">Brand Origin: {{$product->brand->origin}}</p>
                            <p class="card-text col-md-8 p-2 m-0">Price : {{$product->price}}</p>
                            <p class="card-text col-md-8 p-2 m-0">Aggregated Rating : {{$product->average_rating}}</p>
                            <p class="card-text col-md-8 p-2 m-0">Aggregated Number of Reviews: {{$product->total_number_of_ratings}}</p>
                            <p class="card-text col-md-8 p-2 m-0">{{$product->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

