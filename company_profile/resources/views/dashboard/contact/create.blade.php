@extends('dashboard.layout')

@section('content')
    <p class="card-title"> Create Contact</p>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-bottom:10px;">
                <a class="btn btn-warning" href="{{ route('contact.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <div class="offset-lg-3 col-lg-7">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="nama" class="form-label">Nama Depan</label>
                            <input type="text" name="namadepan" id="nama" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label for="nama" class="form-label">Nama Belakang</label>
                            <input type="text" name="namabelakang" id="nama" class="form-control"
                                autocomplete="off">
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" autocomplete="off">
                    <label class="form-text">*email anda tidak akan disebarluaskan</label>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="pesan" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-warning w-100">Kirim</button>
                </div>
            </form>
        </div>
    </table>
    @include('sweetalert::alert')
@endsection
