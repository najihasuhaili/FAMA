<!-- resources/views/pentadbirs/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $pentadbir->nama_pentadbir }}</h1>

    <p>Email: {{ $pentadbir->email_pentadbir }}</p>
    <p>No. Sambungan: {{ $pentadbir->no_sambungan }}</p>

    <a href="{{ route('pentadbir.index') }}">Back to Pentadbirs</a>
@endsection
