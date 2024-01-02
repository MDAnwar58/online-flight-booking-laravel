@extends('layouts.frontend.app')

@section('content')
    @include('components.frontend.flight_booking.flight-person-info')
    <!-- Modal view baggage -->
    @include('components.frontend.flight_booking.departure-flight')
    @include('components.frontend.flight_booking.return-flight')
    @include('components.frontend.flight_booking.one-way-departure-flight')

@endsection
