@extends('layout')

@section('content')

<div class="container mt-5">
        <div class="title mb-5">
            <h1 class="title-item">Dans quelle zone êtes vous?</h1>
        </div>
        <div class="city row">
            @foreach ($zones as $zone)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: auto; heigt: 50px;">
                        <img src="/img/Blog-post/post-3.jpg" class="card-img-top" alt="{{ $zone->name }}">
                        <div class="card-body">
                            <p class="card-text"> <a class="place" href="/{{ $zone->city->id }}/{{ $zone->id }}/pharmacy">{{ $zone->name }}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
