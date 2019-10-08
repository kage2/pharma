@extends('layout')

@section('content')

    <section id="blog" class="content-section">
        <div class="section-heading">
            <h1>Localisez vous<br><em>Votre Zone</em></h1>
        </div>
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        @foreach ($cities as $city)
                            <a class="nav-item nav-link" id="nav-{{ $city->name }}-tab" data-toggle="tab" href="#{{ $city->name }}" role="tab" aria-controls="nav-{{ $city->name }}" aria-selected="true">{{ $city->name }}</a>
                        @endforeach

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    @foreach ($cities as $city)

                            <div class="tab-pane fade show" id="{{ $city->name }}" role="tabpanel" aria-labelledby="nav-{{ $city->name }}-tab">

                                <div id="menu" data-stellar-background-ratio="0.5">
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($city->zones()->get() as $zone)
                                                <div class="col-md-4 col-sm-6">
                                                    <!-- MENU THUMB -->
                                                    <div class="menu-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                            <a href="/{{ $zone->id }}/pharmacy" class="image-popup" title="{{ $zone->name }}">
                                                                <img src="/img/Blog-post/post-1.jpg" class="img-responsive" alt="{{ $zone->name }}">

                                                                <div class="menu-info">
                                                                    <div class="menu-item">
                                                                        <h3>{{ $zone->name }}</h3>
                                                                        <p>Tomato / Eggs / Sausage</p>
                                                                    </div>
                                                                    <div class="menu-price">
                                                                        <span>$25</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>

    <div class="container mt-5">
        <div class="title mb-5">
            <h1 class="title-item">Dans quelle ville êtes vous?</h1>
        </div>
    </div>
@endsection

@section('script')
    <script src="/js/wow.min.js"></script>
@endsection
