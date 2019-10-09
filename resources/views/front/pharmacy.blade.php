@extends('layout')

@section('content')

   @foreach ($pharms as $pharm)
        <a href="/{{ $pharm->id }}/products">{{ $pharm->name }}</a>
   @endforeach


@endsection
