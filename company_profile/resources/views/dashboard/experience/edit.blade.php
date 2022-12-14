@extends('dashboard.layout')

@section('content')
    <div class="pb-3"><a href="{{ route('experience.index') }}" class="btn btn-secondary btn-sm">Kembali</a></div>
    <form action="{{ route('experience.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="judul"
                placeholder="Posisi" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control form-control-sm" name="info1" id="info1" aria-describedby="judul"
                placeholder="Nama Perusahaan" value="{{ $data->info1 }}">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yy" value="{{ $data->tgl_mulai }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yy" value="{{ $data->tgl_akhir }}"></div>
                <div class="col-auto"></div>
            </div>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea type="text" class="form-control summernote" rows="5" name="isi">{{ $data->isi }}</textarea>
        </div>
        <button class="btn btn-primary btn-sm" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
