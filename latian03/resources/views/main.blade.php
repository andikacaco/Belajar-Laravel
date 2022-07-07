@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Mahasiswa</h1>
        </div>
        <div class="section-body">

        </div>
        <table class="table caption-top">
            <h3>Daftar Mahasiswa</h3>
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $list)
                    <tr>
                        <td>{{ $list['nim'] }}</td>
                        <td>{{ $list['nama'] }}</td>
                        <td>{{ $list['tanggal_lahir'] }}</td>
                        <td>{{ $list['ipk'] }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" {{ $list['update'] }}>Edit</a>
                            <a class="btn btn-danger btn-sm" {{ $list['delete'] }}>Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
