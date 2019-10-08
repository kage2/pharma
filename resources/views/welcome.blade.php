<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>FindPharm</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/templatemo-digital-trend.css" />
        <link rel="stylesheet" type="text/css" href="/css/aos.css" />

    </head>
    <body>
        <div id="app">
            <!-- MENU BAR -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        FINDPHARM
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/pharmacy" class="nav-link">Nos pharmacies</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- HERO -->
            <section class="hero hero-bg d-flex justify-content-center align-items-center">
                    <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                                    <div class="hero-text">

                                        <h1 class="text-white" data-aos="fade-up">Trouver vos médicaments dans les pharmacies proches de chez vous</h1>

                                        <a href="/cities" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Commencer dès maintenant!</a>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                                    <img src="/img/office.png" class="img-fluid" alt="working girl">
                                </div>
                                </div>

                            </div>
                    </div>
            </section>


        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/aos.js')}}"></script>
        <script src="{{ asset('js/custom.js')}}"></script>
    </body>
</html>
