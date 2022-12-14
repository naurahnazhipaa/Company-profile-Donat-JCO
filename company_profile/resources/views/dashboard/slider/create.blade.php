@extends('dashboard.layout')

@section('content')
    <div class="pb-3"><a href="{{ route('slider.index') }}" class="btn btn-secondary btn-sm">Kembali</a></div>
    <div class="col-md-8 offset-md-2">
        <form action="{{ route('slider.store') }}" method="POST" action="{{ route('slider.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control form-control-sm" name="title" id="title" aria-describedby="title"
                    placeholder="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control form-control-sm" name="deskripsi" id="deskripsi" rows="20" aria-describedby="deskripsi"
                placeholder="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Gambar</label>
                <input type="file" class="form-control form-control-sm" name="image">
            </div>
            
            <button class="btn btn-primary btn-sm" name="simpan" type="submit">SIMPAN</button>
        </form>
    </div>
@endsection
