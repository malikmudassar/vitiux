@extends('layouts.site')

@section('content')
<section id="successful-purchase">
    <div class="container">
        <h1 class="purchase-title">Compra exitosa</h1>
        <div class="row">
            <div class="col-12">
                <div class="purchase-row">
                    <p>Hemos enviado un comprobante de compra a tu correo <a href="#">jack@gmail.com</a>.</p>
                    <br>
                    <p>Puedes comenzar a ver tus videos cuando quieras !Incluso ahora mismo! Ingresa al
                        siguiente link <a href="#">www.vitiux.cl/compras</a> ver tus videos comprados. Además,
                        recuerda que quedarán guardados en tu cuenta para que puedas verlos cuando quieras.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="videos">
    <div class="container">
        <div class="row slider slider-arrow-circle videos-slick">
            <div class="col-6">
                <div class="videos-card">
                    <div class="videos-img">
                        <img src="imgicon-fire-circle.png" class="icon">
                        <img src="imgvideos-1.png" class="img">
                    </div>
                    <div class="videos-content">
                        <div class="videos-content-title">
                            <h4>Probando al aire libre</h4>
                            <h5>MartinaQueen & Rai</h5>
                        </div>
                        <p><img src="img/icon-heart.png" class="icon"> 3.6K</p>
                        <button type="button" class="btn btn-outline-primary btn-sm">#amateur</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#cosplay</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#chilena</button>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="videos-card">
                    <div class="videos-img">
                        <img src="imgicon-magic-circle.png" class="icon">
                        <img src="imgvideos-2.png" class="img">
                    </div>
                    <div class="videos-content">
                        <div class="videos-content-title">
                            <h4>Disfrutando mientras hago cosplay</h4>
                            <h5>Nicemoon & Skin</h5>
                        </div>
                        <p><img src="img/icon-heart.png" class="icon"> 3.6K</p>
                        <button type="button" class="btn btn-outline-primary btn-sm">#amateur</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#cosplay</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#chilena</button>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="videos-card">
                    <div class="videos-img">
                        <img src="imgicon-magic-circle.png" class="icon">
                        <img src="imgvideos-1.png" class="img">
                    </div>
                    <div class="videos-content">
                        <div class="videos-content-title">
                            <h4>Probando al aire libre</h4>
                            <h5>MartinaQueen & Rai</h5>
                        </div>
                        <p><img src="img/icon-heart.png" class="icon"> 3.6K</p>
                        <button type="button" class="btn btn-outline-primary btn-sm">#amateur</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#cosplay</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">#chilena</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection