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
                    <form action="{{route('siswa.update',$siswa->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama siswa</label>
                            <input type="text" value="{{$siswa->nama}}" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Kelas</label>
                            <input type="text" value="{{$siswa->kelas}}" class="form-control @error('kelas') is-invalid @enderror" name="kelas">
                            @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
