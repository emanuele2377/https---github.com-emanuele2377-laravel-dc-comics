@extends('layouts.app')

@section('content')
<div>
    <h2>Fumetti</h2>
</div>
      <div class="container-fluid">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3 pb-4">
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
                </div>
            @endforeach
     
        </div>
@endsection