@extends('layouts.homepage')
@section('content')
    <div class="row m-4" id="ads">
        @foreach ($mobil as $item)
            <div class="col-md-4 mb-3">
                <div class="app-cover p-2 shadow-md bg-white card h-100 ">
                    <div class="img-cover">
                        <img class="rounded" src="{{ Storage::url($item->gambar) }}" alt=""></img>
                    </div>
                    <div class="det mt-2 col-8">
                        <h4 class="mb-0">{{ $item->nama }}
                            <span
                                class="badge {{ $item->status == 'tersedia' ? 'bg-success' : 'bg-warning' }} fs-8">{{ $item->status }}</span>
                        </h4>
                        <ul class="row my-2">
                            <li>
                                <span class="text-success fs-8 ">Bahan Bakar</span>
                                <span>{{ $item->bahan_bakar }}</span>
                            </li>
                            <li>
                                <span class="text-success fs-8 ">Jumlah Kursi</span>
                                <span>{{ $item->jumlah_kursi }}</span>
                            </li>
                            <li>
                                <span class="text-success fs-8 ">Transmisi</span>
                                <span>{{ $item->transmisi }}</span>
                            </li>
                        </ul>
                        <b class="fs-6">Harga Sewa : Rp. {{ number_format($item->harga_sewa, 2, ',', '.') }}</b>
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
