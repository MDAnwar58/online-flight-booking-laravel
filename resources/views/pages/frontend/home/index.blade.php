@extends('layouts.frontend.app')

@section('content')
    <!--======================== hero area start ========================-->
    @include('components.frontend.home.hero')
    @include('components.frontend.home.departure_date-modal')
    @include('components.frontend.home.departure_date_second-modal')
    @include('components.frontend.home.arrival_date-modal')
    <!--======================== hero area end ========================-->

    <!-- =========================agent support start =========================-->
    @include('components.frontend.home.agent_support')
    <!-- =========================agent support end =========================-->

    <!-- =========================Seamless travel start =========================-->
    @include('components.frontend.home.seamless_travel')
    <!-- =========================Seamless travel end =========================-->

    <!-- =========================Explore start =========================-->
    @include('components.frontend.home.explore')
    <!-- =========================Explore end =========================-->
@endsection
