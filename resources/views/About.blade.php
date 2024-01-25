@extends('layout.main')

@section('container')
    <h1>Halaman Posts</h1>
    <h2>{{ $name }}</h2>
    <h3>{{ $Email }}</h3>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection