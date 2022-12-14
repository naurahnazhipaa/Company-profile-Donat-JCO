@extends('dashboard.layout')

@section('content')
    <form action="{{ route('skill.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Programming Language & Tools</label>
            <input type="text" class="form-control form-control-sm" name="_language" id="judul" aria-describedby="judul"
                placeholder="Programming Language & Tools" value="{{ get_meta_value('_language') }}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Workflow</label>
            <textarea type="text" class="form-control" rows="5" name="_workflow">{{ get_meta_value('_workflow') }}</textarea>
        </div>
        <button class="btn btn-primary btn-sm" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
