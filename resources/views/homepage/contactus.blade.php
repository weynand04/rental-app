@extends('layouts.homepage')

@section('content')
    <div class="service px-2 py-2 ">
        <div class="titie-row row mb-2">
            <h2 class="fw-bolder">Hubungi Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div id="contact" class="contact-row m-0 row">
        <div class="col-md-6">
            <div class="shadow-md p-4 rounded bg-white">
                <form action="{{ route('contactus.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="nama" class="form-label fw-bolder fs-8">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Alamat Nama">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label fw-bolder fs-8">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan Alamat Email">
                    </div>
                    <div class="mb-2">
                        <label for="subject" class="form-label fw-bolder fs-8">Subjek</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            placeholder="Masukkan Subjek">
                    </div>
                    <div class="mb-2">
                        <label for="pesan" class="form-label fw-bolder fs-8">Pesan</label>
                        <textarea class="form-control" placeholder="Masukkan Pesan" id="pesan" name="pesan" rows="3"></textarea>
                    </div>
                    <div class="mb-2 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
