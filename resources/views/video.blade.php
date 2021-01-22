@extends('layouts.site')

@section('content')
<section id="video">
  <div class="container">
    <div class="embed-responsive embed-responsive-16by9">
      <div class="embed-header">
        <span class="badge badge-primary">TRAILER</span>
        <p><img src="/img/icon-heart.png" class="icon"> 3.6K</p>
      </div>
      <video controls>
        <source src="{{ $video->file_trailer }}" type="video/mp4">
      </video>
    </div>
    <div class="video-content">
      <div class="video-title">
        <h1>{{ $video->name }}</h1>
        <button type="button" class="btn btn-primary btn-with-icon btn-lg" onclick="addToCart()"><img src="/img/icon-cart.png"> {{ $video->price_formatted }}</button>
      </div>
      <div class="video-info">
        <div class="row">
          <div class="col-4">
            <div class="video-section">
              <p>En este video:</p>
              <h5>
                @foreach($video->staff as $item)
                {{ $loop->first ? '' : ' & ' }}
                <a href="{{ $item->url }}">{{ $item->name }}</a>
                @endforeach
              </h5>
            </div>
          </div>
          <div class="col-8">
            <div class="video-section">
              <p>Tags:</p>
              @foreach($video->tags as $item)
              <a href="{{ $item->url }}" class="btn btn-outline-primary btn-sm">#{{ $item->name }}</a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="video-section">
            <p>Descripción:</p>
            <h5>{{ $video->description }}</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('components.more-videos', ['items' => $videos, 'title' => "Más videos de $video->staff_formatted", 'class' => 'videos-title-sm'])

@include('components.packs', ['items' => $packs])

@include('components.videos', ['items' => $related, 'title' => 'Mira estos videos que te van a gustar:', 'class' => 'videos-title-sm'])

@endsection

@push('scripts')
  <script type="text/javascript">
    const product = {
      id: 'video-{{ $video->id }}',
      name: '{{ $video->name }}',
      image_small: '{{ $video->image_small }}',
      staff_formatted: '{{ $video->staff_formatted }}',
      price_formatted: '{{ $video->price_formatted }}',
      price: '{{ $video->price }}'
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