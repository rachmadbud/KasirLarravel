@extends('layout.main')

@section('title', 'Form Edit Data Mobil')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Edit Data Mobil</h1>

                <form method="post" action="/cars/{{ $car->id}}">
                    @method('patch')
                    @csrf

                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control" id="merk" placeholder="Masukkan merk" name="merk" autocomplete="off" value="{{ $car->merk }}">
                    </div>

                    <div class="form-group">
                        <label for="plat">Plat</label>
                        <input type="text" class="form-control" id="plat" placeholder="Masukkan plat" name="plat" autocomplete="off" value="{{ $car->plat }}">
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" autocomplete="off" value="{{ $car->harga }}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" autocomplete="off" value="{{ $car->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="nohp">No HP</label> 
                        <input type="text" class="form-control" id="nohp" placeholder="Masukkan nohp" name="nohp" autocomplete="off" value="{{ $car->nohp }}">
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                    <a href="/cars" class="btn btn-success"><- Back</a>

                </form>

            </div>
        </div>
    </div>
@endsection