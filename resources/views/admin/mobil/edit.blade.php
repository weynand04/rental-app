@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data Mobil
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('admin.mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 form-group">
                            <label for="nama" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ old('nama', $mobil->nama) }}">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="harga_sewa" class="form-label">Harga Sewa</label>
                            <input type="number" class="form-control" id="harga_sewa" name="harga_sewa"
                                value="{{ old('harga_sewa', $mobil->harga_sewa) }}">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="bahan_bakar" class="form-label">Bahan Bakar</label>
                            <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar"
                                value="{{ old('bahan_bakar', $mobil->bahan_bakar) }}">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                            <input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi"
                                value="{{ old('jumlah_kursi', $mobil->jumlah_kursi) }}">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="transmisi" class="form-label">Transmisi</label>
                            <select class="form-control" id="transmisi" name="transmisi">
                                <option {{ $mobil->transmisi == 'manual' ? 'selected' : null }} value="manual">Manual
                                </option>
                                <option {{ $mobil->transmisi == 'otomatis' ? 'selected' : null }} value="otomatis">Otomatis
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option {{ $mobil->status == 'tersedia' ? 'selected' : null }} value="tersedia">Tersedia
                                </option>
                                <option {{ $mobil->status == 'tidak tersedia' ? 'selected' : null }} value="tidak tersedia">
                                    Tidak
                                    tersedia</option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                value="{{ old('deskripsi', $mobil->deskripsi) }}"></textarea>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-check-label" for="p3k">P3K</label>
                            <select class="form-control" id="p3k" name="p3k">
                                <option {{ $mobil->p3k === 1 ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $mobil->p3k === 0 ? 'selected' : null }} value="0">Tidak tersedia
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-check-label" for="charger">Charger</label>
                            <select class="form-control" name="charger" id="charger">
                                <option {{ $mobil->charger === 1 ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $mobil->charger === 0 ? 'selected' : null }} value="0">Tidak
                                    tersedia
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-check-label" for="Audio">Audio</label>
                            <select class="form-control" name="Audio" id="audio">
                                <option {{ $mobil->audio === 1 ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $mobil->audio === 0 ? 'selected' : null }} value="0">Tidak tersedia
                                </option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-check-label" for="ac">AC</label>
                            <select class="form-control" name="ac" id="ac">
                                <option {{ $mobil->ac === 1 ? 'selected' : null }} value="1">Tersedia</option>
                                <option {{ $mobil->ac === 0 ? 'selected' : null }} value="0">Tidak tersedia
                            </select>
                            </option>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('admin.mobil.update-gambar', $mobil->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <div class="form-group">
                                <img src="{{ Storage::url($mobil->gambar) }}" alt="{{ $mobil->nama }}"
                                    class="img-fluid">
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="form-label">URL Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar"
                                    value="{{ old('gambar', $mobil->gambar) }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
