@extends('layout.main')

@section('title', 'Detail Mobil')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Mobil</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->merk }}</h5> 
                        <h6 class="card-subtitle mb-2 text-muted">{{ $car->plat }}</h6>
                        <p class="card-text">Rp. {{ $car->harga }}</p>
                        <p class="card-text">{{ $car->nama }}</p>
                        <p class="card-text">{{ $car->nohp }}</p>

                        @if(Auth::user()->admin)
                            <a href="{{ $car->id }} /edit" class="btn btn-primary">Edit</a>

                            <form action="/cars/{{ $car->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        @endif
                        <a href="/cars" class="btn btn-success"><-Back</a>
                    </div>
                </div>
                

            </div>
    </div>
@endsection