@extends('layouts.site')

@section('content')
<section id="vitiux-account">
    <div class="container">
        <h1 class="shopping-title">Cuenta Vitiux</h1>
        <div class="row">
            <div class="col-8">
                <div class="create-account">
                    <h4>Crear una cuenta para continuar</h4>
                    <a href="#">Ya tengo una cuenta Vitiux</a>
                </div>
                <div class="account-form">
                    <div class="input-group">
                        <input type="text" required>
                        <label>E-mail</label>
                    </div>
                    <div class="input-group">
                        <input type="text" required>
                        <label>Nombre o nickname</label>
                    </div>
                    <div class="input-group">
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="form-buttoms">
                        <a href="/carro-de-compras" class="btn btn-back">Atras</a>
                        <a href="/carro-de-compras/medio-de-pago" class="btn btn-primary">Continuar</a>
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