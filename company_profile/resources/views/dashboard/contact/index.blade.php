@extends('dashboard.layout')

@section('content')
    <p class="card-title">contact</p>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-warning" href="{{ route('contact.create') }}"> Create New contact</a>
            </div>
        </div>
    </div>
 
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>Pesan</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $no => $hasil)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $hasil->namadepan }}</td>
                    <td>{{ $hasil->namabelakang }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>{{ $hasil->pesan }}</td>
                    <td>
                        <a href="/dashboard/contact/{{ $hasil->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <form onsubmit="return confirm('Apakah anda yakin akan mengapusnya?')"
                            action="{{ route('contact.destroy', $hasil->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
    @include('sweetalert::alert')
    @endsection
