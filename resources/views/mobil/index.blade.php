@extends('layout.main')

@section('title', 'Buku Mobil')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Data Mobil</h1>
                
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Plat</th>
                            <th scope="col">time</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mobil as $mbl)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mbl->nama}}</td>
                                <td>{{ $mbl->nohp}}</td>
                                <td>{{ $mbl->merk}}</td>
                                <td>{{ $mbl->plat}}</td>
                                <td>{{ $mbl->created_at}}</td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection