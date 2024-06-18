<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Chef_icon.svg/1500px-Chef_icon.svg.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>POLLERIA MIGUELON I</title>
</head>
<body>
  <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
          <div class="container d-flex justify-content-between flex-row">
            <a href="mainpage.html" class="navbar-brand d-flex align-items-center">
                <i class="fas fa-bread-slice">&nbsp;&nbsp;</i>
                <strong class="fa-sharp fa-solid fa-user-chef">POLLERIA MIGUELON I</strong>
            </a>
            <a href="Nosotros.html" class="btn btn-dark btn-sm">Acerca de nosotros</a>
            <a href="#" class="btn btn-dark btn-sm">Blog</a>
            @if (Route::has('login'))
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Iniciar Sesión
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                        Registrar sesión
                                        </a>
                                    @endif
                                @endauth
                        @endif
          </div>
        </div>
    </header>

    <main class="main" id="main">
        <div class="fixed-top"><a href="#"><button></button></a></div>
        <section class="jumbotron text-center">
          <div class="container">
            <h1 class="jumbotron-heading text-light encabezado">Polleria Miguelon I</h1>
            <p class="subencabezado">Las mejores recetas y con la mejor comunidad sobre variedad de comida. ¡¡ A degustar!!.</p>
            <p>
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="Buscar"/>
                </div>
            </p>
          </div>
        </section>
        <ul class="nav justify-content-center bg-warning">
          <li class="nav-item">
            <a class="nav-link bg-dark" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-dark" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-dark" href="#">Popular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-dark" href="#">Recientes</a>
          </li>
        </ul>
        <div class="album py-5 bg-warning">
          <div class="container">
  
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="https://laroussecocina.mx/wp-content/uploads/2018/01/galletas-de-avena-001-larousse-cocina-1.jpg.webp">
                  </div>
                  <div class="card-body">
                    <p class="card-text">¿Nunca has hecho galletas? ¡Manos a la obra! La receta que os traemos hoy es super fácil y resultona. Eso sí, la calidad del ingrediente...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Sara Pérez</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/06.jpg">
                  </div>            
                  <div class="card-body">
                    <p class="card-text">El postre de tres leches sin horno que mostramos a continuación consiste en la elaboración de una gelatina de leche muy...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Adolfo Vidales</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/04.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">Para disfrutar de un riquísimo pastel de fresas y chocolate lo primero que debes hacer es vaciar el yogur en un bol. A continuación...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Christina Chavez</small>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/05.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">Una receta especial para esos días de frío, pues estas lentejas con chorizo y verduras nos reconfortan por dentro y además...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Bianca Ramírez</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/07.jpeg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">Si se trata de comer delicioso no podremos dejar pasar esta receta que ha muchos encanta. Un pollo al horno con puré...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Pierina Muchica</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/08.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">El pastel de papas es un plato típico de la ciudad de Arequipa pues aquí siempre encontrarás está delicia culinaria que...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Rocío Guzmán</small>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="Imagenes/09.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">El un poco más de 1 minuto se pueden hacer unas galletas con chips de chocolate gracias a nuestro microondas. Sigue los pasos...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Martha Clark</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="https://img-global.cpcdn.com/recipes/4974d9a2e6171789/680x482cq70/bunuelos-de-zapallitos-al-horno-super-bajas-calorias-foto-principal.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">Son tipo buñuelitos crocantes por fuera y suaves y esponjosos por dentro!! Ideal para que los chicos coman verduras.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Pablo Autori</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="container-img">
                    <img class="card-img-top" src="https://www.comida-peruana.com/base/stock/Recipe/265-image/265-image_web.jpg">
                  </div>
                  
                  <div class="card-body">
                    <p class="card-text">El arroz con pato es un plato emblemático de Chiclayo en la región norte de Perú. Su preparación es parecida al arroz con...</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary fa fa-heart"></button>
                        <button type="button" class="btn btn-sm btn-outline-secondary fa-sharp fa-solid fa-plus-minus"></button>
                      </div>
                      <small class="text-muted">Sara Gomez</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
    </main>
    <footer class="text-muted bg-dark">
    <div class="container">
        <p class="float-right">
            <a href="#">↑↑↑ Volver al inicio ↑↑↑</a>
        </p>
        <p>Nuestras redes sociales:
            <div class="redes">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube-square"></i></a>
            </div>
            <p>© 2024 PolleriaMiguelonI - Derechos Reservados</p>
        </p>
    </div>
    </footer>
</body>
</html>