@extends('layoutadmin.main')

@section('content')
    <h2>Form Mahasiswa</h2>
    <form method="POST" action="/mahasiswa/store">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="angkatan">Angkatan</label>
            <input type="number" id="angkatan" name="angkatan" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="prodi">Program Studi</label>
            <select name="prodi" id="prodi" class="form-control" required>
                <option value="">Pilih</option>
                @foreach ($dataProdi as $item)
                    <option value="{{ $item->kd_prodi }}">{{ $item->nama_prodi }}</option>
                @endforeach
            </select>
        </div>
        
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
