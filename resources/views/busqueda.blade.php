@extends('layouts.site')

@section('content')
<section id="search-category">
  <div class="container">
      <div class="headder-title">
          <h1 class="title">Búsqueda:</h1>
          <div class="sort">
              <p>Ordenar por:</p>
              <div class="dropdown">
                  <button class="btn btn-sort dropdown-toggle" type="button" id="dropdownMenuButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Recientes
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </div>
          </div>
          <h1 class="result"><b>{{ $q }}</b> - {{ count($videos) }} videos</h1>
      </div>
      <div class="row">
        @foreach($videos as $item)
        <div class="col-4">
          <div class="videos-card">
            <div class="videos-img">
              <img src="imgicon-fire-circle.png" class="icon">
              <a href="{{ $item->url }}"><img src="{{ $item->image_small }}" class="img"></a>
            </div>
            <div class="videos-content">
              <div class="videos-content-title">
                <h4>{{ $item->name }}</h4>
                <h5>
                  @foreach($item->staff as $staff)
                  {{ $loop->first ? '' : ' & ' }}
                  <a href="{{ $staff->url }}">{{ $staff->name }}</a>
                  @endforeach
                </h5>
              </div>
              <p><img src="img/icon-heart.png" class="icon"> 3.6K</p>
              @foreach($item->tags as $tag)
              <a href="{{ $tag->url }}" class="btn btn-outline-primary btn-sm">#{{ $tag->name }}</a>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</section>

<section id="pleasure">
  <div class="container">
    <img src="img/pleasure.png">
  </div>
</section>

<section id="plans">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="plans-card">
          <img src="img/icon-magic-circle-outline.png">
          <h3>Plan<br>Casual</h3>
          <h5>Ven esclavo, de esta no podrás salvarte. Serás nuestro prisionero hasta que lo decidamos.</h5>
          <h4>$9.000</h4>
          <button type="button" class="btn btn-primary">Inténtalo</button>
        </div>
      </div>
      <div class="col-4">
        <div class="plans-card">
          <img src="img/icon-fire-circle-outline.png">
          <h3>Plan<br>Premium</h3>
          <h5>Ven esclavo, de esta no podrás salvarte. Serás nuestro prisionero hasta que lo decidamos.</h5>
          <h4>$9.000</h4>
          <button type="button" class="btn btn-primary">Consíguelo</button>
        </div>
      </div>
      <div class="col-4">
        <div class="plans-card">
          <img src="img/icon-magic-circle-outline.png">
          <h3>Plan<br>Deluxe</h3>
          <h5>Ven esclavo, de esta no podrás salvarte. Serás nuestro prisionero hasta que lo decidamos.</h5>
          <h4>$9.000</h4>
          <button type="button" class="btn btn-primary">Hazlo</button>
        </div>
      </div>
    </div>
    <p>El precio de estos planes pueden variar según temporada, demanda y otros.</p>
  </div>
</section>
@endsection