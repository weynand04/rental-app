@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3>Daftar Mobil</h3>
            <a href="#" class="btn btn-primary">
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
                        @forelse ($mobil as $mobil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mobil->nama }}</td>
                                <td>
                                    <img src="{{ Storage::url($mobil->gambar) }}" width="200" alt="{{ $mobil->nama }}">
                                </td>
                                <td>{{ $mobil->harga_sewa }}</td>
                                <td>{{ $mobil->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
