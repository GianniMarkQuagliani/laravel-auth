@extends('layouts.admin')

@section('content')

<h1>{{ $title }}</h1>

@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif

<div class="row">
    <div class="col-8">
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method($method)
            <div class="mb-3">
                <label for="title" class="form-label">Titolo post *</label>
                <input id="title" class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{ old('title', $post?->title) }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="reading_time" class="form-label">Tempo di lettura</label>
                <input id="reading_time" class="form-control @error('reading_time') is-invalid @enderror" name="reading_time" type="number" value="{{ old('reading_time', $post?->reading_time) }}">
                @error('reading_time')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input id="image" class="form-control @error('image') is-invalid @enderror" name="image" type="file" value="{{ old('image', $post?->image) }}">
                @error('image')
                    <p class="text-danger">{{ $image }}</p>
                @enderror
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Testo del post" id="text" name="text" style="height: 200px">{{ old('text',$post?->text)  }}</textarea>
                <label for="text">Testo del post</label>
                @error('text')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>

@endsection
