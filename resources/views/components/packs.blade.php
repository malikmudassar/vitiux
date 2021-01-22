<section id="test">
  <div class="container">
    <div class="row slider test-slick">
      @foreach($items as $item)
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <div class="test-info">
              <img src="img/vitiux-pack.png">
              <h4>¿Fan de girlys o hot boys?<br>Consigue un pack<br>solo para ti.</h4>
            </div>
          </div>
          <div class="col-6">
            <div class="test-card">
              <div class="test-img">
                <div class="icons">
                  <img src="img/icon-magic-circle.png" class="icon">
                  <img src="img/icon-fire-circle.png" class="icon">
                </div>
                <img src="{{ $item->image_medium }}" class="img">
              </div>
              <div class="test-content">
                <span>{{ $item->name }}</span>
                <h2>
                  @foreach($item->staff as $staff)
                  {{ $loop->first ? '' : ' & ' }}
                  <a href="{{ $staff->url }}">{{ $staff->name }}</a>
                  @endforeach
                </h2>
                <a href="{{ $item->url }}" class="btn btn-secondary btn-lg">Pruébalo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>