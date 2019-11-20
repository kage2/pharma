@extends('layout')


@section('content')

<section  class="section-kage">
    <div class="section-header">
        <h1 class="intro-text-title">Choose the pharmacy.</h1>
        <p class="intro-text-para"></p>
    </div>
    <div class="city-content">
        @foreach ($pharms as $pharm)
            <div class=" card-kage">
                    <div class="city" >
                        <div class="card-kage-image">
                            <img src="/img/undraw_messaging_uok8.png" alt="undraw_messaging_uok8" />
                        </div>
                        <div class="card-kage-body">
                            <h2 class="intro-text-title-secondary"> <a href="/{{ $pharm->id }}/products">{{ $pharm->name }}</a></h2>
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
