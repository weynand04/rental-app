@extends('layouts.homepage')

@section('content')
    <div class="service px-4 py-5 pt-3">
        <div class="titie-row row mb-3">
        <h2 class="fw-bolder">Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>
    </div>
    <div class="contact-row m-0 mt-5 row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="shadow-md row p-4 m-0 rounded bg-white">
                <div class="col-md-3 text-center align-self-center">
                    <i class="bi fs-1 bi-headphones"></i>
                </div>
                <div class="col-md-9">
                    <h6 class="fs-7 fw-bolder">Phone</h6>
                    <ul>
                        <li>+91 989 8787 878</li>
                        <li>+91 889 1287 978</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="shadow-md row p-4 m-0 rounded bg-white">
                <div class="col-md-3 text-center align-self-center">
                    <i class="bi fs-1 bi-headphones"></i>
                </div>
                <div class="col-md-9">
                    <h6 class="fs-7 fw-bolder">Email</h6>
                    <ul>
                        <li>demo@smarteyeapps.com</li>
                        <li>app@maildeaci.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="shadow-md row p-4 m-0  rounded bg-white">
                <div class="col-md-3 text-center align-self-center">
                    <i class="bi fs-1 bi-headphones"></i>
                </div>
                <div class="col-md-9">
                    <h6 class="fs-7 fw-bolder">Address</h6>
                    <ul>
                        <li>First Floor Vincent Plaza, Kuzhithurai</li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div id="contact" class="contact-row m-0 row">
        <div class="col-md-6">
            <div class="shadow-md p-4 rounded bg-white">
                <h4 class="fs-6 fw-bolder mb-3">Contact Form</h4>
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address">
                    </div>
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder fs-8">Enter Subject</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subject">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bolder fs-8">Example textarea</label>
                        <textarea class="form-control" placeholder="Enter Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button>Submint</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="shadow-md p-4 rounded bg-white">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15659.16664494769!2d77.32095495000002!3d11.1288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1660839868672!5m2!1sen!2sin" style="width:100%" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>
@endsection
