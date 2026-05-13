@extends('layouts.app')
@section('title', 'Profil Pejabat')

@section('content')
    <h1>Data Pejabat</h1>
    <br>
    <p>Nama: {{$nama}}</p>
    <p>NIP: {{$nip}}</p>
    <p>Jabatan: {{$jabatan}}</p>

@endsection