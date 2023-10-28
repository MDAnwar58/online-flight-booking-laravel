@extends('layouts.frontend.app')
@section('title', 'My Booking')

@section('content')
    <div class="container py-5 booking_bg">
        <div class="row">
            <!-- profile sidebar start -->
            @include('components.frontend.sidebar')
            <!-- profile sidebar end -->
            @include('components.frontend.my_booking.booking-info')
        </div>
    </div>
@endsection
