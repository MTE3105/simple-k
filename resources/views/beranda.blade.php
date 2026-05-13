@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-4 fw-bold text-primary">Selamat Datang di SIMPEL-K</h1>
        <p class="fs-5 text-muted">
            Sistem Informasi Kelurahan untuk pelayanan masyarakat yang lebih cepat dan efisien.
        </p>
        <a href="/lurah" class="btn btn-primary btn-lg mt-3">Lihat Profil Lurah</a>
    </div>
</div>
@endsection