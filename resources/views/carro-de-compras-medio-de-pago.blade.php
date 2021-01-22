@extends('layouts.site')

@section('content')
<section id="payment">
    <div class="container">
        <h1 class="payment-title">Medio de pago</h1>
        <div class="row">
            <div class="col-8">
                <div class="payment-method">
                    <p>¡Estás a punto de terminar la compra! Presiona "continuar" para pagar con cualquiera de
                        los siguietes métodos:
                    </p><br>
                    <img src="imgwebpay.svg" class="image-payment-principal">
                    <img src="imgredcompra.svg" class="image-payment-principal"><br>
                    <img src="imgvisa.svg" class="image-payment">
                    <div class="payment-buttoms">
                        <a href="/carro-de-compras/resumen" class="btn btn-back">Atras</a>
                        <a href="/carro-de-compras/checkout" class="btn btn-primary">Continuar</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="purchase-summary">
                    <h4>Resumen de tu compra</h4>
                </div>
                <div id="products"></div>
            </div>
        </div>


    </div>
</section>
@endsection

@push('scripts')
  <script type="text/javascript">
    getProducts();

    function getProducts() {
      let cart = JSON.parse(localStorage.getItem('cart'));

      if (cart && cart.length) {
        let total = 0;

        for (const item of cart) {
          total += parseInt(item.price);

          $('#products').append(`
            <div class="purchase-list">
              <div class="row">
                <div class="col-3">
                  <img src="${ item.image_small }" class="image-purchase-list">
                </div>
                <div class="col-9">
                  <h4>${ item.name }</h4>
                  <h5>${ item.staff_formatted }</h5>
                  <h2>${ item.price_formatted }</h2>
                </div>
              </div>
            </div>
          `);
        }

        $('#products').append(`
          <div class="total-list">
            <div class="row">
              <div class="col-3">
                <p>Total</p>
              </div>
              <div class="col-9">
                <h2>$${ numberFormat(total, 0, ',', '.') } CLP</h2>
              </div>
            </div>
          </div>
        `);
      }
    }
  </script>
@endpush