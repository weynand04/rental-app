@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('admin.mobil.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                </div>
                <div class="mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa</label>
                    <input type="number" class="form-control" id="harga_sewa" name="harga_sewa"
                        value="{{ old('harga_sewa') }}">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">URL Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="{{ old('gambar') }}">
                </div>
                <div class="mb-3">
                    <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                    <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar"
                        value="{{ old('bahan_bakar') }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                    <input type="text" class="form-control" id="jumlah_kursi" name="jumlah_kursi"
                        value="{{ old('jumlah_kursi') }}">
                </div>
                <div class="mb-3">
                    <label for="transmisi" class="form-label">Transmisi</label>
                    <select class="form-control" id="transmisi" name="transmisi">
                        <option value="manual">manual</option>
                        <option value="otomatis">otomatis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="tersedia">tersedia</option>
                        <option value="tidak tersedia">tidak tersedia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" value="{{ old('deskripsi') }}"></textarea>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="p3k" name="p3k">
                    <label class="form-check-label" for="p3k">P3K</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="charger" name="charger">
                    <label class="form-check-label" for="charger">Charger</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="Audio" name="Audio">
                    <label class="form-check-label" for="Audio">Audio</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="1" id="ac" name="ac">
                    <label class="form-check-label" for="ac">AC</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
