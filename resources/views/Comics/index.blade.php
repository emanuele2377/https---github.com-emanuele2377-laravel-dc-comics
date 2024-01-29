@extends('layouts.app')

@section('content')
         <h2 class=" pb-4 ps-4">Fumetti</h2>
    <div class="container-fluid">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 pb-4 ps-4">
                      <div class="card" style="width: 50%;">
                           @if ($comic->thumb)
                            <img src="{{ $comic->thumb }}" class="card-img-top">
                            @else
                              <img src=""
                                class="card-img-top" alt="{{ $comic->thumb }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                            </div>
                       </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection