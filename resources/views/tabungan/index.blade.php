@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center  ">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Data Tabungan
                    <a href="{{ route('tabungan.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table-baru">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                    <th>Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp
                            <tbody>
                                @foreach ($tabungan as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{$item->siswa->nama}}</td>
                                    <td>
                                        <form action="{{ route('tabungan.destroy', $item->id) }}" id="delete-data"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('tabungan.edit', $item->id) }}"
                                                class="btn btn-sm btn-success">
                                                Edit
                                            </a>
                                            <a href="{{ route('tabungan.show', $item->id) }}"
                                                class="btn btn-sm btn-warning">
                                                Show
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
