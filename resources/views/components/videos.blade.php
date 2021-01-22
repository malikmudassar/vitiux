<section class="videos videos-sm">
  <div class="container">
    <h1 class="videos-title {{ $class ?? '' }}">{{ $title }}</h1>
    <div class="row">
      @foreach($items as $item)
      <div class="col-4">
        <div class="videos-card">
          <div class="videos-img">
            <img src="img/icon-fire-circle.png" class="icon">
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