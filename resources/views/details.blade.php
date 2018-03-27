
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
<title>Product detail</title>

    <style>

    </style>
</head>

<body>
@include('navbar')
    <div class="container">
        <div class="card">
            <h5 class="card-header">{{$product->title}} By {{$product->brand->name}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="{{action('ImageController@show', [$product->slug])}}" alt={{$product->slug}}By{{$product->brand->name}} class="image-responsive">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text "><span class="font-weight-bold">Brand : </span></p><p>{{$product->brand->name}}</p>
                        <p class="card-text "><span class="font-weight-bold">Brand Origin : </span></p><p>{{$product->brand->origin}}</p>
                        <p class="card-text "><span class="font-weight-bold">Average Rating :</span></p><p> {{ number_format($product->average_rating, 1)}}/5.0</p>
                        <p class="card-text "><span class="font-weight-bold">Product Name : </span></p><p>{{$product->title}}</p>
                        <p class="card-text "><span class="font-weight-bold">Price (approx.) : </span></p><p>{{$product->price}}</p>
                        <p class="card-text "><span class="font-weight-bold">Number of Ratings : </span></p><p>{{$product->total_number_of_ratings}}</p>
                        <p class="card-text "><span class="font-weight-bold">Product Details : </span></p><p>{{$product->description}}</p>
                    </div>
                </div>
            </div>
    <!--Reviews-->
            <div class="card-body review-text">
                <p class="card-text px-2"><span class="font-weight-bold">Most Helpful Review : </span><br>{{$product->most_helpful_review}}</p>
                <p class="card-text px-2"><span class="font-weight-bold">Number of Reviews :</span><br>{{$product->most_helpful_count}}</p>
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

