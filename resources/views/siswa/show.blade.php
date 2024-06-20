@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data siswa
                    <a href="{{route('siswa.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama siswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{$siswa->nama}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                            name="kelas" value="{{$siswa->kelas}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
