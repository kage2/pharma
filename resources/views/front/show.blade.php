@extends('layout')

@section('content')

    <section  class="section-kage">
            <div class="section-header">
                <h1 class="intro-text-title">In which zone are you?</h1>
                <p class="intro-text-para">Choose your zone to direct the search.</p>
            </div>
            <div class="city-content">
                @foreach ($cities as $zone)
                    <div class=" card-kage">
                            <div class="city" >
                                <div class="card-kage-image">
                                    <img src="/img/undraw_messaging_uok8.png" alt="undraw_messaging_uok8" />
                                </div>
                                <div class="card-kage-body">
                                    <h2 class="intro-text-title-secondary"> <a href="/{{ $zone->id }}/pharmacy"> {{ $zone->name }} </a></h2>
                                    <p
                                    class="intro-text-para text-zone"
                                    >Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                        </div>
                    </div>
                @endforeach

              </div>
    </section>
@endsection

@section('script')
    <script src="/js/wow.min.js"></script>

@endsection
