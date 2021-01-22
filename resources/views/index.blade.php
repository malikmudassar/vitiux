@extends('layouts.site')

@section('content')
<section id="promotion">
  <div class="promotion-img">
    <img src="{{ $promoted->image_large }}">
  </div>
  <div class="container">
    <div class="promotion-content">
      <h1>{{ $promoted->name }}</h1>
      <h2>
        @foreach($promoted->staff as $item)
        {{ $loop->first ? '' : ' & ' }}
        <a href="{{ $item->url }}">{{ $item->name }}</a>
        @endforeach
      </h2>
      <a href="{{ $promoted->url }}" class="btn btn-primary">Consíguelo</a>
    </div>
  </div>
</section>

<div class="marquee">
  <ul>
    @foreach ($advertisements as $advertisement)
      <li><a href="{{ $advertisement->url }}">{{ $advertisement->text }}</a></li>   
      <li class="separator">&#183;</li>
    @endforeach
  </ul>
</div>

<section id="enjoy">
  <div class="container">
    <div class="enjoy-card">
      <div class="enjoy-img">
        <img src="{{ $featured->image_medium }}">
      </div>
      <div class="enjoy-content">
        <p><img src="img/icon-heart.png" class="icon"> 3.6K</p>
        <h1>{{ $featured->name }}</h1>
        <h2>
          @foreach($featured->staff as $item)
          {{ $loop->first ? '' : ' & ' }}
          <a href="{{ $item->url }}">{{ $item->name }}</a>
          @endforeach
        </h2>
        <a href="{{ $featured->url }}" class="btn btn-primary btn-lg">Disfrútalo</a>
      </div>
    </div>
  </div>
</section>

@include('components.more-videos', ['items' => $boosteds, 'title' => 'Videos'])

@include('components.packs', ['items' => $packs])

<section id="vitiux">
  <img src="img/vitiux.png">
</section>

@include('components.videos', ['items' => $videos, 'title' => 'Videos'])

<section id="girlys">
  <div class="container">
    <h1 class="girlys-title">Girlys + Hotboys</h1>
  </div>
  <div class="slider slider-arrow-circle slider-all girlys-slick">
    @foreach($staff as $item)
    <a href="{{ $item->url }}" class="girlys-card">
      <div class="girlys-img">
        <img src="{{ $item->image_medium }}" class="img">
      </div>
      <div class="girlys-content">
        <div class="girlys-content-info">
          <h3>{{ $item->name }}</h3>
        </div>
      </div>
    </a>
    @endforeach
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
          <img src="">
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