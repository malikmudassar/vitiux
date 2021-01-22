@extends('layouts.site')

@section('content')
<section id="pack">
  <div class="container">
    <div class="pack-content">
      <img src="/img/vitiux-pack.png">
      <div class="pack-card">
        <div class="embed-responsive embed-responsive-16by9">
          <div class="embed-header">
            <p><img src="/img/icon-heart.png" class="icon"> 3.6K</p>
          </div>
          <span class="badge badge-primary">TRAILER</span>
          <div class="embed-title">
            <span>{{ $pack->name }}</span>
          </div>
          <video controls>
            <source src="{{ $pack->file_trailer }}" type="video/mp4">
          </video>
        </div>
        <div class="pack-card-content">
          <span>{{ $pack->name }}</span>
          <h2>
            @foreach($pack->staff as $staff)
            {{ $loop->first ? '' : ' & ' }}
            <a href="{{ $staff->url }}">{{ $staff->name }}</a>
            @endforeach
          </h2>
          <button type="button" class="btn btn-primary btn-with-icon btn-lg" onclick="addToCart()"><img src="/img/icon-cart.png"> {{ $pack->price_formatted }}</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="this-pack" class="videos videos-sm">
  <div class="container">
    <h1 class="videos-title videos-title-sm">Este pack contiene:</h1>
    <div class="row">
      @foreach($pack->videos as $item)
      <div class="col-4">
        <div class="videos-card">
          <div class="videos-img">
            <img src="/img/icon-fire-circle.png" class="icon">
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
            <p><img src="/img/icon-heart.png" class="icon"> 3.6K</p>
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

<section class="packs">
  <div class="container">
    <div class="packs-title"><span>Más packs</span></div>
    <div class="row slider packs-slick">
      @foreach($packs as $item)
      <div class="col-4">
        <div class="packs-card">
          <div class="packs-card-content">
            <img src="/img/vitiux-pack.png" class="packs-card-logo">
            <img src="/img/icon-fire-circle.png" class="packs-card-icon">
            <div class="packs-card-info">
              <span>{{ $item->name }}</span>
              <p>
                @foreach($item->staff as $staff)
                {{ $loop->first ? '' : ' & ' }}
                <a href="{{ $staff->url }}">{{ $staff->name }}</a>
                @endforeach
              </p>
            </div>
            <a href="{{ $item->url }}"><img src="{{ $item->image_small }}" class="packs-card-img"></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('components.videos', ['items' => $videos, 'title' => 'Videos'])

@endsection

@push('scripts')
  <script type="text/javascript">
    const product = {
      id: 'pack-{{ $pack->id }}',
      name: '{{ $pack->name }}',
      image_small: '{{ $pack->image_small }}',
      staff_formatted: '{{ $pack->staff_formatted }}',
      price_formatted: '{{ $pack->price_formatted }}',
      price: '{{ $pack->price }}'
    };

    function addToCart() {
      let cart = JSON.parse(localStorage.getItem('cart'));

      if (!cart) {
        cart = [];
      }

      const item = cart.find(function (item) {
        return item.id === product.id;
      });

      if (!item) {
        cart.push(product);
        localStorage.setItem('cart', JSON.stringify(cart));
      }

      location.href = '/carro-de-compras';
    }
  </script>
@endpush