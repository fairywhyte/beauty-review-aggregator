

<nav class="navbar navbar-expand-lg navbar-light">
<nav class="navbar navbar-light">
  <a class="navbar-brand" src="img/home_images/laravelle_logo.ico">

    <img class="laravelle-logo" src="img/home_images/laravelle_logo.ico" width="30" height="30" class="d-inline-block align-top" alt="">
    La Ravelle
  </a>
</nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ action('BlockController@fill_blocks')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('MainController@aboutus')}}">About us & FAQ</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="{{action('SearchController@index')}}" accept-charset="UTF-8">
      <input name="query" type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>
