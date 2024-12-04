@extends('layoutadmin.main')
@section('content')
    <h2>Update Prodi</h2>
    <form method="POST" action="/prodi/update/{{ $dataProdi->kd_prodi }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="prodi">KODE PRODI</label>
            <input type="text" class="form-control" value="{{ $dataProdi->kd_prodi }}" disabled>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="nama_prodi">NAMA PRODI</label>
            <input type="text" name="nama_prodi" class="form-control" value="{{ $dataProdi->nama_prodi }}" required>
        </div>
        
        <a href="/prodi" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
