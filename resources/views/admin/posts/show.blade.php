@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Data di creazione: {{ Helper::formatDate($post->date) }}</p>
    <p>Tempo di lettura previsti: {{ $post->reading_time }} min</p>
    <p>{{ $post->text }}</p>

@endsection
