<title> About Us Page | La Ravelle </title>
@extends('layout')

@section('content')

<div class="container">
    <h1 class="aboutus-h1">
        ABOUT US
        <br>
        <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center">
    </h1>
    <article>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
            an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining .
        </p>
    </article>
    <br>
        <div class="aboutus-h1"><img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" align="center"></div>





  <div class="bullshit-squares">
      <div class="row d-flex justify-content-center">

        <div class="col-sm-12 col-md-4">
          <div class="square-picture"></div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="square-picture"></div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="square-picture"></div>
        </div>

      </div>
  </div>





</div>



@endsection


<style>
    .aboutus-h1{
    text-align: center;
}

.square-picture{

    height:150px;
    width:150px;
    border: 1px dashed white;
    //margin: 0 0 50 126.2px;
    /*   padding: 1px; resize squares */
    background-color: rgba(244, 224, 220, 1);
    // display: inline-block;
    //transform: rotateZ(44deg);
    margin-top: 1em;

}

.bullshit-squares{
    margin-top: 5em;
}
    </style>