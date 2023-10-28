@extends('layouts.frontend.app')
@section('title', 'Change Your Password')

@section('content')
    <div class="container py-5 booking_bg">
        <div class="row">
            <!-- profile sidebar start -->
            @include('components.frontend.sidebar')
            <!-- profile sidebar end -->
            @include('components.frontend.change_password.change-password-form')
        </div>
    </div>
@endsection
