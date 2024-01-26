@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Fumetti</h2>
        </div>
        <div class="row">
            @foreach ($comic as $comic)
                <div class="col-4 pb-4">
                    <div class="card" style="height: 100%;">
                        @if ($comic->title)
                            <img src="{{ $comic->description }}" class="card-img-top" alt="{{ $comic->price }}">
                        @else
                            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg"
                                class="card-img-top" alt="{{ $comic->thumb }}">
                        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection