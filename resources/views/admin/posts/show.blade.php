@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>

    @php
        $date = new DateTime($post->date);
    @endphp

    <p>Data di creazione: {{ date_format($date, 'd/m/Y') }}</p>

    <p>Tempo di lettura prevvisto: {{ $post->reading_time }} min</p>

    <a href="{{ route('admin.posts.index') }}">Torna alla home di admin</a>

    <a href="#">Modifica</a>
@endsection
