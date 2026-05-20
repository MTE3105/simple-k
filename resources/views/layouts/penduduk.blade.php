@extends('layouts.index')

@section('judul', 'Data Penduduk')

@section('konten')
    <div class="container mt-4">
        <h1>Data Penduduk</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warga as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
