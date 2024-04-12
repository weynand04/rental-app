@extends('layouts.homepage')
@section('content')
    <div class="row m-4" id="ads">
        @foreach ($mobil as $item)
            <div class="col-md-6 mb-3">
                <div class="app-cover p-2 shadow-md bg-white card h-100 ">
                    <div class="img-cover">
                        <img class="rounded" src="{{ Storage::url($item->gambar) }}" alt=""></img>
                    </div>
                    <div class="det mt-2 col-8">
                        <h4 class="mb-0">{{ $item->nama }}
                            <span class="badge bg-secondary fs-8">{{ $item->status }}</span>
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
                        <b class="fs-8">Harga Sewa : Rp. {{ $item->harga_sewa }}</b>
                    </div>
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary w-45 fw-semi fs-8" href="{{ route('detail', $item->slug) }}">
                            Detail
                        </button>
                        <button class="btn btn-primary w-45 fw-semi fs-8" href="#">Sewa</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
