

<nav class="navbar navbar-expand-lg navbar-light mb-5">
  <div class="row">
    <a class="navbar-brand navbar-left" href="{{action('BlockController@fill_blocks')}}">La Ravelle</a>
    <img class="laravelle-logo" src="img/home_images/laravelle_logo.ico"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="{{ action('BlockController@fill_blocks')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">

        <form method="GET" action="{{action('SearchController@index')}}" accept-charset="UTF-8">
          <div class="input-group ">
              <input name="query" type="text" class="form-control" placeholder="Search" />
              <span class="input-group-btn">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
                </button>
              </span>
          </div>
        </form>
      </li>
    </ul>

  </div>
</div>
</nav>
