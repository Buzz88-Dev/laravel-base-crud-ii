@extends('front.templates.base')

@section('mainContent')
    <div class="container">
        @foreach ($Comics as $link)
            <div class="container_fumetto">
                <img src="{{ $link['thumb'] }}">
                <span>{{ $link['series']}}</span>
            </div>
        @endforeach
    </div>
@endsection
