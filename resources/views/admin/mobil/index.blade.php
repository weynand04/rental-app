@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3>Daftar Mobil</h3>
            <a href="{{ route('mobil.create') }}" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($mobil->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @else
                            @foreach ($mobil as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->gambar) }}" width="200"
                                            alt="{{ $item->nama }}">
                                    </td>
                                    <td>{{ $item->harga_sewa }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
