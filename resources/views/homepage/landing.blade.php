@extends('layouts.homepage')
@section('content')
    <div class="row m-4" id="ads">
        @foreach ($mobil as $item)
            <div class="col-md-6 mb-3">
                <div class="app-cover p-2 shadow-md bg-white">
                    <div class="img-cover pe-0 col-4 align-content-center"> <img class="rounded"
                            src="{{ Storage::url($item->gambar) }}" alt="">
                    </div>
                    <div class="det mt-2 col-8">
                        <div class="d-flex justify-between">
                            <h4 class="mb-0">{{ $item->nama }}</h4>
                            <span class="badge bg-secondary fs-8">{{ $item->status }}</span>
                        </div>
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
                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-primary">Detail</a>
                    <a href="#" class="btn btn-primary">Sewa</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
