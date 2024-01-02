@extends('layouts.frontend.app')
@section('title', 'Payment Fail')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-md-4 mt-5">
                <div class="card card-body text-center py-5">
                    <div>
                        <span class="text-danger fs-2"><i class="ri-error-warning-line"></i></span>
                        <p class="pt-2">Your Payment Process Has Been Failed !</p>
                        <a href="{{ route('home') }}" class=" text-capitalize">go to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection