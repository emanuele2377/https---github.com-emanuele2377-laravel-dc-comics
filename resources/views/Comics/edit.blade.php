@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2></h2>
        </div>
        <div class="row">
            <form action="{{ route('pastas.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- title description type image cooking_time weight --}}
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input disabled type="text" class="form-control" id="title" name="title"
                        value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $comic->description }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $comic->image }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection