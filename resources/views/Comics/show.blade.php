@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-white">
                @if ($comic->thumb)
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                @else
                    <img src="https://upload.wikimedia.org/wikipedia/it/4/41/Logo_PASTA_LA_MOLISANA.png" class="card-img-top"
                        alt="{{ $comic->title }}">
                @endif
            </div>
            <div class="col-6">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection