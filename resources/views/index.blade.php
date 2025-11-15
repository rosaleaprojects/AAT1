<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/productos.css">
  </head>
  <body style="background-image: url('{{ asset('images/backgroundh.jfif') }}'); background-size: cover; background-position: center;">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(43, 221, 96, 1);">
        <div class="container d-flex justify-content-center w-100">
          <a class="navbar-brand" href="#">Gangas VideoGames      </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/index">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tienda">Tienda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/productos">Productos</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="/user">Ver Productos en stock</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Log in</a>
              </li>
              
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div>

    <h2 style="text-align: center; color: black">Bienvenido a Gangas VideoGames</h2>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <h1 style="color: white; text-align: center;" >¿Quiénes somos?</h1>
  <div class="cuadro">
    <p style="color: white;" >
      Una empresa que inició por medio de Facebook, supliendo las necesidades de los amantes de los videojuegos.
      Vendemos consolas de Nintendo Switch, Playstation 4 , Playstation 5 , Xbox, Series X, controles de PS4 y PS5,
      controles de xbox, joycon, videojuegos, estuches, amiibos, accesorios y más.
      Atención personalizada en electrónicos y videojuegos con precios accesibles y servicio técnico.
    </p>
  </div>
 
  <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/index">Inicio</a></li>
                <li class="list-inline-item"><a href="/tienda">Tienda</a></li>
                <li class="list-inline-item"><a href="/contacto">Contacto</a></li>
                <li class="list-inline-item"><a class="nav-link" href="/productos">Productos</a></li>
                <li class="list-inline-item"><a href="#">Terminos y Condiciones</a></li>
                <li class="list-inline-item"><a href="#">Politica de privacidad</a></li>
            </ul>
            <p class="copyright">© 2025 - Derechos Reservados - Rosales S.A.</p>
        </footer>
    </div>

  </body>
</html>
