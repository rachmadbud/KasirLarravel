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
                                <button onClick='return konfirmasi()' class="btn btn-danger deletebtn">Delete</button>
                                
                            </form>

                        @endif
                        <a href="/cars" class="btn btn-success"><-Back</a>
                    </div>
                </div>
            </div>
    </div>

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="deletemodal">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
             
            <div class="modal-body">
            <h4>Are You sure delete this data?? </h4>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/cars/{{ $car->id }}" method="post" class="d-inline">
                @method('delete')
            @csrf
            <button onClick='return konfirmasi()' type="button" class="btn btn-danger">Delete</button>
            </div>
    </div>
    </div>
</div>  --}}



    {{-- <script>
        
        $(document).ready(function(){
            $('.deletebtn').on('click', function(){
                $('#deletemodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.childern("td").map(function(){
                        return $(this).text();
                    }).get();

            });
        });

    </script> --}}


@endsection