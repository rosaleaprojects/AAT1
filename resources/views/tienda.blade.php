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
                <a class="nav-link" href="/login">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user">Ver Productos en stock</a>
              </li>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <h1 style="text-align: center; color: black"> Lo más buscado </h1>
    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="/images/nintendosw.jpg" alt="Nintendo Switch image">
    <div class="card-body">
      <h5 class="card-title">Nintendo Switch</h5>
      <p class="card-text">La Nintendo Switch es una consola de videojuegos híbrida que se puede usar como portátil o conectada a un televisor. Su principal característica es la versatilidad de sus mandos, llamados Joy-Con, que se pueden desacoplar para jugar de manera local con otros jugadores.</p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/playstation.jpg" alt="Playstation 4 image">
    <div class="card-body">
      <h5 class="card-title">PlayStation 4</h5>
      <p class="card-text">Ofrece un rendimiento potente con un CPU AMD Jaguar de 8 núcleos y una GPU AMD Radeon con 1.84 TFLOPS, soportando resolución 1080p. Su rendimiento y gráficos son muy positivos y, a día de hoy, todavía sigue siendo una gran consola con una amplia variedad de juegos.</p>
      <br>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/images/xboxone.webp" alt="Card image cap">
    <div class="card-body">
        <br>
      <h5 class="card-title">Xbox One</h5>
      <p class="card-text">La Xbox One cuenta con un procesador AMD Jaguar de 8 núcleos y una GPU AMD Radeon de 1.31 TFLOPS, soportando resolución 1080p. Ofrece un rendimiento sólido y gráficos decentes, con una amplia librería de juegos y acceso a servicios como Xbox Live y Game Pass, manteniéndose relevante aún hoy.</p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>
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
