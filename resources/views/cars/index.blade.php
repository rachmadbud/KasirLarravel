@extends('layout.main')

@section('title', 'Buku Mobil')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Data Mobil</h1>

                @if(Auth::user()->admin)
                <a href="/cars/create" class="btn btn-primary my-3">Tambah Data</a>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <ul class="list-group">
                    @foreach ($cars as $car)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$car->merk}} <br>
                            {{$car->plat}}
                            <a href="{{ route('detailCar', $car->id) }}" class="btn btn-info"> <h6> detail </h6></a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection