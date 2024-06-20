@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data tabungan
                    <a href="{{route('tabungan.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah"
                            value="{{$tabungan->jumlah}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal</label>
                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal"
                            value="{{$tabungan->tanggal}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control @error('id_siswa') is-invalid @enderror" name="id_siswa"
                            value="{{$tabungan->siswa->nama}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
