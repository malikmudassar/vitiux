@extends('layouts.site')

@section('content')
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{ $staff->image_small }}" class="img-profile">
            </div>
            <div class="col-6">
                <div class="profile-title">
                    <h1>{{ $staff->name }}</h1>
                </div>
                <div class="group-info">
                    <div class="col-3">
                        <h4>Likes</h4>
                        <h2>67K</h2>
                    </div>
                    <div class="col-3">
                        <h4>Followers</h4>
                        <h2>2.100</h2>
                    </div>
                    <div class="col-3">
                        <h4>Videos</h4>
                        <h2>12</h2>
                    </div>
                    <div class="col-3">
                        <h4>Packs</h4>
                        <h2>2</h2>
                    </div>
                </div>
                <div class="follow-btn">
                    <button type="button" class="btn btn-primary">Seguir</button>
                </div>
            </div>
            <div class="col-2">
                <img src="/img/icon-fire-circle.png" class="icon">
            </div>
        </div>
    </div>
</section>

@include('components.more-videos', ['items' => $videos, 'title' => 'Nuevos videos', 'class' => 'videos-title-sm'])

<section id="pack-detail">
    <div class="container">
        <h1 class="pack-title-sm">Packs</h1>
        <div class="row slider test-slick">
            @foreach($packs as $item)
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="pack-info">
                            <div class="pack-content">
                                <span>{{ $item->name }}</span>
                                <h2>
                                    @foreach($item->staff as $staff)
                                    {{ $loop->first ? '' : ' & ' }}
                                    <a href="{{ $staff->url }}">{{ $staff->name }}</a>
                                    @endforeach
                                </h2>
                                <div class="contains">
                                    <p><b>Contiene:</b></p>
                                    @foreach($item->videos as $video)
                                    <p>{{ $video->name }}</p>
                                    @endforeach
                                </div>
                                <a href="{{ $item->url }}" class="btn btn-secondary btn-lg">Pruébalo</a>
                                <div class="icons">
                                    <p>Lorem ipsum dolo<img src="/img/icon-magic-circle.png" class="icon"></p>
                                    <p>Adipiscing elit<img src="/img/icon-fire-circle.png" class="icon"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pack-card">
                            <div class="pack-img">
                                <img src="/img/vitiux-pack.png" class="pack-vitiux-img">
                                <img src="/img/test-1.png" class="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('components.videos', ['items' => $others, 'title' => "Otros videos de $staff->name", 'class' => 'videos-title-sm'])
@endsection