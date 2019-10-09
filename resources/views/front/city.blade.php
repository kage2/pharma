@extends('layout')

@section('content')

    <section  class="section-kage">
            <div class="section-header">
                <h1 class="intro-text-title">In which city are you?</h1>
                <p class="intro-text-para">Choose your zone to direct the search.</p>
            </div>
            <div class="city-content">
                @foreach ($cities as $item)
                    <div class="card-kage">
                        <div class="card-kage-image"></div>
                        <div class="card-kage-body">
                            <h2 class="intro-text-title-secondary">{{ $item -> name }}</h2>
                            <p class="intro-text-para"></p>
                            <a href="" class="k-link">Get zones</a>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection

@section('script')
    <script src="/js/wow.min.js"></script>
@endsection
