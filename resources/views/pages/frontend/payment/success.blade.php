@extends('layouts.frontend.app')
@section('title', 'Payment Success')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-md-4 mt-5">
                <div class="card card-body text-center py-5">
                    <div>
                        <span class=" border border-2 border-success px-2 py-1 rounded-circle text-success fs-4"><i class="ri-check-double-line"></i></span>
                        <p class="pt-2">Your Payment Has Been Complete Successfully !</p>
                        <a href="{{ route('my.booking') }}" class=" text-capitalize">go to your Flight Booking History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection