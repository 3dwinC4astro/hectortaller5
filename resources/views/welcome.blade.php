<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Noticias</title>
    <link rel="icon" type="image/x-icon" href="{{ secure_asset('assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Noticias</a>
        </div>
    </nav>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ secure_asset('assets/img/home-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Noticias Mundiales</h1>
                        <span class="subheading">Encuentra las mejores noticias de la semana</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($noticias as $noticia)
                    <!-- Post preview -->
                    <div class="post-preview">
                        <a href="post.html"> <!-- Aquí puedes cambiar a la ruta del post individual si la tienes -->
                            <!-- nombre de la noticia -->
                            <h2 class="post-title">{{ $noticia->nombre }}</h2>
                            <!-- descripción noticia -->
                            <h3 class="post-subtitle">{{ $noticia->descripcion }}</h3>
                        </a>
                        <!-- autor -->
                        <p class="post-meta">
                            publicado por
                            <a href="#!">{{ $noticia->autor }}</a>
                            <!-- fecha de publicación -->
                            on {{ \Carbon\Carbon::parse($noticia->fecha_publicacion)->format('F d, Y') }}
                        </p>
                    </div>
                    <!-- Divider -->
                    <hr class="my-4" />
                @endforeach
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="{{ secure_asset('js/scripts.js') }}"></script>
</body>
</html>
