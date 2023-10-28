@extends('layouts.frontend.app')
@section('title', 'Profile')

@section('content')
    <div class="container py-5 profile_bg">
        <div class="row">
            <!-- profile sidebar start -->
            @include('components.frontend.sidebar')
            <!-- profile sidebar end -->
            @include('components.frontend.profile.profile-info')
        </div>
    </div>
@endsection
