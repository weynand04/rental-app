@extends('layouts.homepage')

@section('content')
    <div class="row">
        <div class="col-md-12 ps-4 ps-lg-3">
            <div class="row shadow-sm">
                <div class="col-md-4 align-content-center">
                    <img src="{{ Storage::url($mobil->gambar) }}" alt="{{ $mobil->nama }}">
                </div>
                <div class="col-md-8 p-2">
                    <div>
                        <h4 class="fw-semi fs-2 mb-3">{{ $mobil->nama }} </h4>
                    </div>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Status
                                <span class="badge rounded-pill bg-success fs-9">
                                    {{ $mobil->status }}
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Bahan Bakar
                                <span class="badge bg-primary rounded-pill">{{ $mobil->bahan_bakar }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Jumlah Kursi
                                <span class="badge bg-primary rounded-pill">{{ $mobil->jumlah_kursi }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Transmisi
                                <span class="badge bg-primary rounded-pill">{{ $mobil->bahan_bakar }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Harga Sewa
                                <span class="badge bg-primary rounded-pill">Rp. {{ $mobil->harga_sewa }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="my-2">
                        <a class="btn btn-primary w-100 fw-semi fs-8"> Sewa </a>
                    </div>
                </div>
            </div>
            <div class="about row p-2 py-3 bg-white mt-4 shadow-sm">
                <h4 class="fw-semi fs-5">Deskripsi</h4>
                <div>
                    <p class="fs-8 text-justify">
                        {{ $mobil->deskripsi }}
                    </p>
                </div>
                <div>
                    <h5>Kelengkapan</h5>
                    <span> P3K
                        {{ $mobil->p3k }}
                    </span>
                    <span> AC
                        {{ $mobil->ac }}
                    </span>
                    <span> Audio
                        {{ $mobil->Audio }}
                    </span>
                    <span> Charger
                        {{ $mobil->charger }}
                    </span>
                </div>
            </div>
            <div class="about row p-2 py-3  bg-white mt-4 shadow-sm">
                <h4 class="fw-semi fs-5">Review</h4>
                <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                    <div class="col-md-12 align-items-center col-9 rcolm">
                        <div class="review">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                        </div>
                        <h3 class="fs-6 fw-semi mt-2">Vinoth kumar
                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                        </h3>
                        <div class="review-text">
                            Great work, keep it up
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                    <div class="col-md-12 align-items-center col-9 rcolm">
                        <div class="review">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                        </div>
                        <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                        </h3>

                        <div class="review-text">
                            Great work, keep it up
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
                <div class="row m-0 reviewrow px-0">
                    <div class="col-md-12 align-items-center col-9 rcolm">
                        <div class="review">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                        </div>
                        <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                        </h3>

                        <div class="review-text">
                            Great work, keep it up
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
