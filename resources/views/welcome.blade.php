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
        <link rel="stylesheet" type="text/css" href="/css/aos.css" />

    </head>
    <body>
        <div id="app">
            <!-- MENU BAR -->
           @include('incs.navbar')

            <!-- HERO -->

            <section class="intro">
                <div class="intro-text welcome">
                    <h1 class="intro-text-title" data-aos="fade-up">
                            Marketing for the you that never stops movinng
                    </h1>

                    <p class="intro-text-para" data-aos="fade-up">
                            Aenean sed nibh a magna posuere tempor. Nunc faucibus pellentesque nunc in aliquet. Donec congue, nunc vel tempor congue, enim sapien lobortis ipsum, in volutpat sem ex in ligula. Nunc purus est, consequat
                    </p>

                    <a href="/cities" class="btn-kage btn-color" data-aos="fade-up" data-aos-delay="100">Get Started</a>
                </div>
                <div class="intro-image" data-aos="fade-up" data-aos-delay="300">
                    <img src="/img/office.png" alt="pharma image">
                </div>
            </section>



        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/aos.js')}}"></script>
        <script src="{{ asset('js/custom.js')}}"></script>
    </body>
</html>
