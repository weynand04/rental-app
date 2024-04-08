@extends('layouts.homepage')
@section('content')
    <div class="row m-0">
        <h4 class="fs-6 fw-bolder my-4 mb-3">Recommended Cars  <a class="float-end text-primary text-decoration-underline" href="">
            <small class="fs-8">View All</small></a>
        </h4>
        <div class="col-md-4 mb-3">
            <a href="{{ route('detail') }}">
                <div class="app-cover p-2 shadow-md bg-white">
                    <div class="row">
                    <div class="img-cover pe-0 col-4"> <img class="rounded" src="{{ asset('template/homepage/assets/images/books/1.jpg')}}" alt=""></div>
                    <div class="det mt-2 col-8">
                        <h5 class="mb-0 fs-6">No Man of God</h5>
                        <span class="fs-8">Racing</span>
                        <ul class="row my-2">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                            <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                        </ul>
                        <b class="fs-8">Price : 18$</b>
                    </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('detail') }}">
                <div class="app-cover p-2 shadow-md bg-white">
                    <div class="row">
                    <div class="img-cover pe-0 col-4"> <img class="rounded" src="{{ asset('template/homepage/assets/images/books/2.png') }}" alt=""></div>
                    <div class="det mt-2 col-8">
                        <h5 class="mb-0 fs-6">Super Sonic 2</h5>
                        <span class="fs-8">Racing</span>
                        <ul class="row my-2">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                            <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                        </ul>
                        <b class="fs-8">Price : 18$</b>
                    </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('detail') }}">
                <div class="app-cover p-2 shadow-md bg-white">
                    <div class="row">
                    <div class="img-cover pe-0 col-4"> <img class="rounded" src="{{ asset('template/homepage/assets/images/books/3.png') }}" alt=""></div>
                    <div class="det mt-2 col-8">
                        <h5 class="mb-0 fs-6">The Lost City</h5>
                        <span class="fs-8">Racing</span>
                        <ul class="row my-2">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                            </li>
                            <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                        </ul>
                        <b class="fs-8">Price : 18$</b>
                    </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
