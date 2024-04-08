@extends('layouts.homepage')

@section('content')

<div class="row">
    <div class="col-md-8 ps-4 ps-lg-3">
        <div class="row bg-white shadow-sm">
            <div class="col-md-4 p-3">
                <img class="w-100" src="{{ asset('template/homepage/assets/images/car.png') }}" alt="">
            </div>
            <div class="col-md-8 p-2">
                <h4 class="fw-semi fs-4 mb-3">GT Car Stunt Master 3D</h4>

                <button class="btn btn-primary w-45 fw-semi fs-8 py-2 me-3"> Download </button>
                <button class="btn border ps-3 w-45 fw-semi fs-8 py-2 btn-outlie-primary"> Add to Wish List </button>



                <div class="row pt-4">
                    <div class="col-md-4 col-6 text-center">
                        <b>3.9 <i class="bi bi-star-fill"></i></b>
                        <p>11.6k Reviews</p>
                    </div>
                     <div class="col-md-4 col-6 text-center">
                        <b>5M+</b>
                        <p>Downloads</p>
                    </div>
                </div>

                 <div class="auth pt-4">
                    <h6 class="text-primary fw-semi mb-0">Zego Global Publishing</h6>
                    <p class="fs-8">contains Ads</p>
                </div>
            </div>
        </div>
        <div class="about row p-2 py-3 bg-white mt-4 shadow-sm">
            <h4 class="fw-semi fs-5">About this Game</h4>
            <p class="fs-8 text-justify">Welcome to the GT Car Stunt Master 3D which are based on Car driving simulator concepts. Looking for Adventure games for you or adventure games online? Then play Car Games in which you will experience circus car racing and Car Stunts as you have experienced before in Car racing stuntman games and car Free stunt games. In this Car Stunt Master 3D - Mega Ramps game you will experience different types of Spider car racing modes like race with Crazy cars, GT racing stunt or Mega Ramp Racing Car Stunt. In this Mega Ramp game you will enjoy the Mega Ramp Car jumping like Muscle car games and other Racing games. Many different Car Stunts, tracks and levels are designed by the racing professionals. Enjoy the Crazy car driving simulator with Superhero cars race as you have never experienced in any Superhero car games. If you are looking for Free Car Games , Racing games or Racing games offline then this Superhero league car stunts racing game is best for your Superhero jumper race experience.</p>
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

    <div class="col-md-4">
         <h4 class="fs-6 fw-bolder my-3 mt-2 mb-3">Related Apps</h4>
        <div class="col-md-12 mb-3">
            <div class="app-cover p-2 shadow-md bg-white">
                <a href="single.html">
                    <div class="row">
                            <div class="img-cover pe-0 col-3"> <img class="rounded" src="{{ asset('template/homepage/assets/images/games/2.png') }}" alt=""></div>
                            <div class="det mt-2 col-9">
                                <h5 class="mb-0 fs-6">Candy Crash</h5>
                                <span class="fs-8">Racing</span>
                                <ul class="row">
                                    <li class="col-8 ratfac">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="col-4"><span class="text-success float-end">Free</span></li>
                                </ul>
                            </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="app-cover p-2 shadow-md bg-white">
                <a href="single.html">
                    <div class="row">
                        <div class="img-cover pe-0 col-3"> <img class="rounded" src="{{ asset('template/homepage/assets/images/games/7.png') }}" alt=""></div>
                        <div class="det mt-2 col-9">
                            <h5 class="mb-0 fs-6">Carrom Pool</h5>
                            <span class="fs-8">Racing</span>
                            <ul class="row">
                                <li class="col-8 ratfac">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="col-4"><span class="text-success float-end">Free</span></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-12 mb-3">
        <div class="app-cover p-2 shadow-md bg-white">
            <a href="single.html">
                <div class="row">
                    <div class="img-cover pe-0 col-3"> <img class="rounded" src="{{ asset('template/homepage/assets/images/games/8.png') }}" alt=""></div>
                    <div class="det mt-2 col-9">
                        <h5 class="mb-0 fs-6">Temple Run</h5>
                        <span class="fs-8">Racing</span>
                        <ul class="row">
                            <li class="col-8 ratfac">
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi text-warning bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                            <li class="col-4"><span class="text-success float-end">Free</span></li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        </div>
    </div>

</div>

@endsection
