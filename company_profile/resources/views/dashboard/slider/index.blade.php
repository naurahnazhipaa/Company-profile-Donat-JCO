@extends('dashboard.layout')

@section('content')
    <p class="card-title">slider</p>
    <div class="pb-3"><a href="{{ route('slider.create') }}" class="btn btn-primary">Tambah slider</a></div>
    <div class="table-responsive">
        <table class="table table-striped">
            <head>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </head>
        </table>
    </div>
@endsection
