@extends('layoutadmin.main')
@section('content')
    <h2>Form Program Studi</h2>
    <form method="POST" action="/prodi/store">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nim">KODE PRODI</label>
            <input type="text" id="prodi" name="prodi" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="nama">NAMA PRODI</label>
            <input type="text" id="nama_prodi" name="nama_prodi" class="form-control" required>
        </div>
        
        <a href="/prodi" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
