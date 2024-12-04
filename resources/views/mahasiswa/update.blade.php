@extends('layoutadmin.main')
@section('content')
    <h2>Update Mahasiswa</h2>
    <form method="POST" action="/mahasiswa/update/{{ $dataMhs->nim_mahasiswa }}">
        @csrf
        <input type="hidden" name="nim" value="{{ $dataMhs->nim_mahasiswa }}">
        <div class="mb-3">
            <label class="form-label" for="nim">NIM</label>
            <input type="text" class="form-control" value="{{ $dataMhs->nim_mahasiswa }}" disabled>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="nim">NAMA</label>
            <input type="text" name="nama" class="form-control" value="{{ $dataMhs->nama_mahasiswa }}" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="nim">ANGKATAN</label>
            <input type="year" name="angkatan" class="form-control" value="{{ $dataMhs->angkatan_mahasiswa }}" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <select name="prodi" class="form-control" required>
                <option value="{{ $dataMhs->kd_prodi }}">{{ $dataMhs->nama_prodi }}</option>
                @foreach ($dataProdi as $item)
                    <option value="{{ $item->kd_prodi }}">{{ $item->nama_prodi }}</option>
                @endforeach
            </select>
        </div>
        
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
