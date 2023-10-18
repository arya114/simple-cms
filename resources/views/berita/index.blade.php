@extends('layouts.app')

@section('content')
    <h1>Daftar Berita</h1>
    <x-list-berita :beritas="$beritas" />
@endsection
