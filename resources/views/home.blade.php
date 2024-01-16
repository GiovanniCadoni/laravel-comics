@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col h-100">
                    <img class="" src="{{ $comic['thumb'] }}" alt="">
                    <h3 class="text-white">
                        {{ $comic['series'] }}
                    </h3>
                </div>
            @endforeach
        </div>
    </main>
@endsection
