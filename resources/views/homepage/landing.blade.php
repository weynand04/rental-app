@extends('layouts.homepage')
@section('content')
    <div class="row m-4" id="ads">
        @foreach ($mobil as $item)
            <div class="col-md-4 mb-3">
                <div class="app-cover p-2 shadow-md bg-white card h-100 ">
                    <div class="img-cover">
                        <img class="rounded" src="{{ Storage::url($item->gambar) }}" alt=""></img>
                    </div>
                    <div class="det mt-2">
                        <h4 class="mb-0 text-center">{{ $item->nama }}</h4>
                        <ul class="list-group my-2">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-8">Status</div>
                                </div>
                                <span
                                    class="badge {{ $item->status == 'tersedia' ? 'bg-success' : 'bg-warning' }} rounded-pill">{{ $item->status }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-8">Bahan Bakar</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $item->bahan_bakar }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-8">Jumlah Kursi</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $item->jumlah_kursi }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-8">Transmisi</div>
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ $item->transmisi }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold fs-8">Harga Sewa : </div>
                                </div>
                                <span class="badge bg-primary rounded-pill">Rp.
                                    {{ number_format($item->harga_sewa, 2, ',', '.') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-around my-3">
                        <a class="btn  btn-primary w-45 fw-semi fs-8" href="#">Sewa</a>
                        <a class="btn btn-outline-primary w-45 fw-semi fs-8" href="{{ route('detail', $item->slug) }}">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
