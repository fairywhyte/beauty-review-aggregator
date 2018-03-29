

<nav class="navbar navbar-expand-lg navbar-light mb-5">
  <div class="row">
  <a class="navbar-brand" href="#">La Ravelle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ action('BlockController@fill_blocks')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">

        <form method="GET" action="{{action('SearchController@index')}}" accept-charset="UTF-8">
          <div class="input-group col-md-12">
              <input name="query" type="text" class="form-control input-lg" placeholder="Search" />
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
