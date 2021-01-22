<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/horizontal-animation-conveyor-ticker/dist/css/jquery.jConveyorTicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/style.css">

    <title>Vitiux</title>
  </head>
  <body>
    <div id="menu">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <div class="navbar-left">
            <a href="#"><img src="img/icon-close.png" class="icon" onclick="toggleMenu()"></a>
          </div>
          <a class="navbar-center" href="/">
            <img src="img/logo-white.png" alt="logo">
          </a>
          <div class="navbar-right">
            <div class="input-group">
              <input type="text" class="form input-search" required>
              <label>Buscar:</label>
            </div>
            <a href="#"><img src="img/icon-search.png" class="icon"></a>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="menu-title">
          Menú
        </div>
        <div class="row">
          <div class="col-3">
            <div class="list-title">Contenido</div>
            <ul>
              <li>Novedades</li>
              <li>Videos</li>
              <li>Fotos</li>
              <li>Packs</li>
              <li>Vitiux Vlu</li>
            </ul>
          </div>
          <div class="col-3">
            <div class="list-title">Categorías</div>
            <ul>
              <li>Vitiux Vlu</li>
              <li>Chilena</li>
              <li>Amateur</li>
              <li>Cosplay</li>
              <li>Parejas</li>
            </ul>
          </div>
          <div class="col-3">
            <div class="list-title">Girlys + Hotboys</div>
            <ul>
              <li>MartinaQueen</li>
              <li>Dana Spice</li>
              <li>Rai</li>
              <li>Nicemoon</li>
              <li>Skin</li>
            </ul>
          </div>
          <div class="col-3">
            <div class="list-title">Perfil</div>
            <ul>
              <li>Favoritos</li>
              <li>Lista de deseos</li>
              <li>Compras</li>
              <li>Historial</li>
              <li>Configuración</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-3 offset-9">
            <div class="list-title">Nosotros</div>
            <ul>
              <li>Trabaja con nosotros</li>
              <li>Manifiesto</li>
              <li>Legal</li>
              <li>Contacto</li>
              <li>
                <img src="img/icon-twitter.svg" class="icon">
                <img src="img/icon-facebook.svg" class="icon">
                <img src="img/icon-instagram.svg" class="icon">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header>
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <div class="navbar-left">
            <a href="#"><img src="img/icon-menu.png" class="icon" onclick="toggleMenu()"></a>
          </div>
          <a class="navbar-center" href="/">
            <img src="img/logo.png" alt="logo">
          </a>
          <div class="navbar-right">
            <a href="/carro-de-compras" id="icon-cart">
              <img src="img/icon-cart.png" class="icon">
            </a>
            <div id="input-group-search">
              <div class="input-group">
                <input type="text" class="form input-search" required>
                <label>Buscar:</label>
              </div>
            </div>
            <a href="javascript:void(0)" onclick="toggleSearch()"><img src="img/icon-search.png" class="icon"></a>
          </div>
        </div>
      </nav>
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="img/logo-secondary.png">
          </div>
          <div class="col-6">
            <p>Yeah, somos un sitio web de porno, pero no uno cualquiera, sino que uno especializado en hacerlo a lo latino, y sobre todo, a lo chileno. Además, contamos con una esencia pura en "hazlo como quieras y con quién quieras" ¿Quieres probarlo? Te aseguro que no te arrepentirás.</p>
          </div>
          <div class="col-4">
            <div class="logos">
              <img src="img/webpay.png">
              <img src="img/khipu.png">
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://www.jqueryscript.net/demo/horizontal-animation-conveyor-ticker/dist/js/jquery.jConveyorTicker.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script>
      $(function() {
        quantityProducts();

        $('.marquee').jConveyorTicker({reverse_elm: true});

        $('.videos-slick').slick({
          infinite: true,
          slidesToShow: 2,
          slidesToScroll: 2
        });

        $('.test-slick').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
        });

        $('.girlys-slick').slick({
          infinite: true,
          slidesToShow: 5,
          slidesToScroll: 5
        });

        $('.packs-slick').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3
        });
      });

      function toggleMenu() {
        $('body').css('overflow', $('body').css('overflow') === 'auto' ? 'hidden' : 'auto');
        $('#menu').fadeToggle();
      }

      function numberFormat(number, decimals, dec_point, thousands_sep) {
        number = number.toFixed(decimals);

        var nstr = number.toString();
        nstr += '';
        x = nstr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? dec_point + x[1] : '';
        var rgx = /(\d+)(\d{3})/;

        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

        return x1 + x2;
      }

      function toggleSearch() {
        $('#input-group-search').fadeToggle();
      }

      $(".input-search").keypress(function(e) {
        if (e.which == 13) {
          location.href = `/busqueda/${ $(this).val() }`;
        }
      });

      function quantityProducts() {
        let cart = JSON.parse(localStorage.getItem('cart'));

        if (cart && cart.length) {
          $('#icon-cart').append(`<span class="count">${ cart.length }</span>`);
        }
      }
    </script>

    @stack('scripts')
  </body>
</html>