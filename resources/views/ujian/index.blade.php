@extends('layout/main')

@section('title', 'Ujian')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Daftar Ujian</h1>
            <a href="/ujian/create" class="btn btn-primary my-3" >Tambah Data Ujian</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Jumlah Soal</th>
                    <th scope="col">Keterangan</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach( $ujian as $ujn)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>

                        <td>{{ $ujn ->nama_mk }}</td>
                        <td>{{ $ujn ->dosen }}</td>
                        <td>{{ $ujn ->jumlah_soal }}</td>
                        <td>{{ $ujn ->keterangan }}</td>
                        <td>            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </div>
@endsection
