@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-body">Total Mobil Rental <strong>4</strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small stretched-link" href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-body">Total Mobil Tersedia <strong>4</strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small stretched-link" href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-body">Total Mobil tidak tersedia <strong>4</strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small stretched-link" href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection
