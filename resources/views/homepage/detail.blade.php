@extends('layouts.homepage')

@section('content')
    <div class="row">
        <div class="col-md-12 ps-4 ps-lg-3">
            <div class="row bg-white shadow-sm">
                <div class="col-md-4 p-3">
                    <img class="w-100" src="{{ Storage::url($mobil->gambar) }}" alt="{{ $mobil->nama }}">
                </div>
                <div class="col-md-8 p-2">
                    <div>
                        <h4 class="fw-semi fs-2 mb-3">{{ $mobil->nama }}
                            <span class="badge rounded-pill bg-success fs-9">
                                <span class="visual-hidden">
                                    {{ $mobil->status }}
                                </span>
                            </span>
                        </h4>
                    </div>
                    <div>
                        <p class="fs-8">Harga Sewa</p>
                        <h6 class="text-primary fw-semi mb-0">Rp. {{ $mobil->harga_sewa }}</h6>
                        <ul class="row my-2">
                            <li>
                                <span class="text-success fs-8 ">Bahan Bakar</span>
                                <span>{{ $mobil->bahan_bakar }}</span>
                            </li>
                            <li>
                                <span class="text-success fs-8 ">Jumlah Kursi</span>
                                <span>{{ $mobil->jumlah_kursi }}</span>
                            </li>
                            <li>
                                <span class="text-success fs-8 ">Transmisi</span>
                                <span>{{ $mobil->transmisi }}</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button class="btn btn-primary w-45 fw-semi fs-8"> Sewa </button>
                        <button class="btn border w-45 fw-semi fs-8  btn-outlie-primary"> Booking </button>
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
