@extends('layouts.site')

@section('content')
<section id="shopping-car">
    <div class="container">
        <h1 class="shopping-title">Tu carro de compras</h1>

        <div id="products"></div>

        <div id="products-footer"></div>
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

        $('#products').html(`
          <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
              <div class="headder-row">
                <p class="text-xs">Producto</p>
              </div>
            </div>
            <div class="col-2">
              <div class="headder-row">
                <p class="text-xs">Precio</p>
              </div>
            </div>
          </div>
        `);

        for (const item of cart) {
          total += parseInt(item.price);

          $('#products').append(`
            <div class="row">
                <div class="col-12">
                    <div class="list">
                        <div class="row">
                            <div class="col-2">
                                <div class="product-row">
                                    <img src="${ item.image_small }" class="image-product-row">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="product-row">
                                    <h4>${ item.name }</h4>
                                    <h5>${ item.staff_formatted }</h5><br>
                                    <a href="javascript:void(0)" onclick="deleteProduct('${ item.id }')">Eliminar</a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="product-row">
                                    <p class="product-price">${ item.price_formatted }</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          `);
        }

        $('#products').append(`
          <div class="row mt-5">
            <div class="col-8 ">
              <div class="discount">
                <a href="#">¿Tienes un cupón de descuento?</a>
              </div>
            </div>
            <div class="col-2">
              <p class="total-text">Total</p>
            </div>
            <div class="col-2">
              <p id="total-price" class="product-price">$${ numberFormat(total, 0, ',', '.') } CLP</p>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <div class="continue">
                <a href="/carro-de-compras/resumen" class="btn btn-primary">Continuar</a>
              </div>
            </div>
          </div>
        `);
      }
    }

    function deleteProduct(id) {
      let cart = JSON.parse(localStorage.getItem('cart'));

      cart = cart.filter(function (item) {
        return item.id !== id;
      });

      localStorage.setItem('cart', JSON.stringify(cart));

      location.reload();
    }
  </script>
@endpush