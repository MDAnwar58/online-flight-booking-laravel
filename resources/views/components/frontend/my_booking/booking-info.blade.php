<div class="col-md-9">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card px-1 py-2">
                <nav>
                    <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1" id="nav-tab" role="tablist">
                        <button class="nav-link active py-2" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">
                            <i class="ri-plane-line"></i> Flights
                        </button>
                        <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            Profile
                        </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            Contact
                        </button> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            <!-- flight booking list start -->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card px-4 py-4">
                        <div class="row">
                            @if ($bookingFlights->count() > 0)
                                @foreach ($bookingFlights as $bookingFlight)
                                    @php
                                        $bookingFlightId = $bookingFlight->flight_id;
                                        $flightIds = explode(', ', $bookingFlightId);
                                    @endphp
                                    @if ($flightIds[0])
                                        @php
                                            $departureflight = \App\Models\Flight::where('id', $flightIds[0])->first();
                                            $returnflight = '';
                                        @endphp
                                    @else
                                        @php
                                            $departureflight = \App\Models\Flight::where('id', $flightIds[0])->first();
                                            $returnflight = \App\Models\Flight::where('id', $flightIds[1])->first();
                                        @endphp
                                    @endif
                                    <div class="col-md-12 mb-3">
                                        <div class="card card-body">
                                            <div class="row">
                                                <div class="col-md-12 px-5">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="{{ url('upload/images/airline', $departureflight->airline->image) }}"
                                                                class="rounded-circle pt-2" style="width: 100px;"
                                                                alt="">
                                                            <h6 class="text-secondary text-sm fw-normal mt-2">
                                                                {{ $departureflight->airline->name }}</h6>
                                                            <span class="text-muted"><small>Price</small></span>
                                                            <h5 class="fs-6 fw-semibold">BDT
                                                                {{ $bookingFlight->total_pay }}</h5>
                                                        </div>
                                                        <div class="col-md-3 pt-3">
                                                            <span class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                            <div class="fs-6 fw-semibold pt-2">
                                                                {{ $departureflight->departure_time }}</div>
                                                            <span
                                                                class="text-muted"><small>{{ date('D, d F Y', strtotime($departureflight->departure_date)) }}</small></span><br>
                                                            <span
                                                                class="text-muted">{{ $departureflight->departure_location->location }}
                                                                ({{ $departureflight->departure_location->short_name }})
                                                            </span>
                                                        </div>
                                                        <div class="col-md-3 pt-2 d-flex justify-content-center">
                                                            <div class="text-center">
                                                                <div class="fs-6 fw-semibold pt-2 text-muted">
                                                                    {{ $departureflight->duration }}
                                                                </div>
                                                                <span
                                                                    style="width: 100px; height: 2px; display: inline-block;"
                                                                    class="bg-primary"></span>
                                                                <div class="text-muted fs-6 fw-light mt-2">
                                                                    {{ $departureflight->flight_status }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 pt-3 text-end">
                                                            <span class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                            <div class="fs-6 fw-semibold pt-2">
                                                                {{ $departureflight->arrival_time }}</div>
                                                            <span
                                                                class="text-muted"><small>{{ date('D, d F Y', strtotime($departureflight->arrival_date)) }}</small></span><br>
                                                            <span
                                                                class="text-muted">{{ $departureflight->arrival_location->location }}
                                                                ({{ $departureflight->arrival_location->short_name }})</span>
                                                        </div>
                                                        <div class="col-md-12 text-end">
                                                            <button
                                                                class="bg-transparent border-0 text-primary text-capitalize"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseExample{{ $departureflight->id }}"
                                                                aria-expanded="false" aria-controls="collapseExample"
                                                                onclick="hrHideOrShow({{ $departureflight->id }})">
                                                                <span class="view{{ $departureflight->id }}">view</span><span
                                                                    class="hide{{ $departureflight->id }} d-none">Hide</span> flight details
                                                            </button>
                                                            <div class="row flight_details">
                                                                <div class="col-md-12 d-none" id="booking_details_hr{{ $departureflight->id }}">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="collapse"
                                                                        id="collapseExample{{ $departureflight->id }}">
                                                                        <div class="row pb-2">
                                                                            <div class="col-md-12">
                                                                                <nav>
                                                                                    <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1"
                                                                                        id="nav-tab" role="tablist">
                                                                                        <button
                                                                                            class="nav-link active py-2"
                                                                                            id="nav-flight-details-tab"
                                                                                            data-bs-toggle="tab"
                                                                                            data-bs-target="#nav-flight-details{{ $departureflight->id }}"
                                                                                            type="button"
                                                                                            role="tab"
                                                                                            aria-controls="nav-flight-details{{ $departureflight->id }}"
                                                                                            aria-selected="true">Flights
                                                                                            Details
                                                                                        </button>
                                                                                        <button class="nav-link"
                                                                                            id="nav-summary-tab"
                                                                                            data-bs-toggle="tab"
                                                                                            data-bs-target="#nav-summary{{ $departureflight->id }}"
                                                                                            type="button"
                                                                                            role="tab"
                                                                                            aria-controls="nav-summary{{ $departureflight->id }}"
                                                                                            aria-selected="false">
                                                                                            Summary
                                                                                        </button>
                                                                                        <!-- <button class="nav-link" id="nav-rules-tab" data-bs-toggle="tab" data-bs-target="#nav-rules" type="button" role="tab" aria-controls="nav-rules" aria-selected="false">
                                                                                    Rules
                                                                                </button> -->
                                                                                    </div>
                                                                                </nav>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-content mt-3"
                                                                            id="nav-tabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="nav-flight-details{{ $departureflight->id }}"
                                                                                role="tabpanel"
                                                                                aria-labelledby="nav-flight-details-tab"
                                                                                tabindex="0">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="card">
                                                                                            <h5
                                                                                                class="card-header text-center">
                                                                                                {{ $departureflight->departure_location->location }}
                                                                                                to
                                                                                                {{ $departureflight->arrival_location->location }}
                                                                                            </h5>
                                                                                            <div
                                                                                                class="card-body text-start">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-12 d-flex">
                                                                                                        <img src="{{ url('upload/images/airline', $departureflight->airline->image) }}"
                                                                                                            class="rounded-circle pt-2"
                                                                                                            style="width: 50px; height: 55px;"
                                                                                                            alt="">
                                                                                                        <div
                                                                                                            class="pt-3 ps-2">
                                                                                                            <h5
                                                                                                                class="fs-6 fw-semibold">
                                                                                                                Flight
                                                                                                                Number
                                                                                                                <span
                                                                                                                    class="fs-6 fw-normal">{{ $departureflight->flight_number }}</span>
                                                                                                            </h5>
                                                                                                            <div
                                                                                                                class="h6 fs-6 fw-normal text-muted">
                                                                                                                Aircraft
                                                                                                                :
                                                                                                                <span>{{ $departureflight->plane_on }}</span>
                                                                                                            </div>
                                                                                                            <div class="h6 fw-normal text-muted"
                                                                                                                style="font-size: 13px;">
                                                                                                                Available
                                                                                                                seats:
                                                                                                                <span>{{ $bookingFlight->person }}</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-12 pt-3 pb-2">
                                                                                                        <div
                                                                                                            class="row align-items-center">
                                                                                                            <div
                                                                                                                class="col-md-4">
                                                                                                                <div
                                                                                                                    class="h6 fw-semibold">
                                                                                                                    {{ $departureflight->departure_time }}
                                                                                                                </div>
                                                                                                                <div class="fw-semibold text-dark"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    {{ date('D, d F Y', strtotime($departureflight->departure_date)) }}
                                                                                                                </div>
                                                                                                                <div class="fw-semibold"
                                                                                                                    style="font-size: 13px;">
                                                                                                                    ({{ $departureflight->departure_location->short_name }})
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4 text-center">
                                                                                                                <div class="h6 fw-semibold text-muted"
                                                                                                                    style="font-size: 12px; margin-bottom: -13px;">
                                                                                                                    {{ $departureflight->duration }}
                                                                                                                </div>
                                                                                                                <span
                                                                                                                    style="width: 80px; height: 2px; display: inline-block;"
                                                                                                                    class=" bg-primary"></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4 text-end">
                                                                                                                <div
                                                                                                                    class="h6 fw-semibold">
                                                                                                                    {{ $departureflight->arrival_time }}
                                                                                                                </div>
                                                                                                                <div class="fw-semibold text-dark"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    {{ date('D, d F Y', strtotime($departureflight->arrival_date)) }}
                                                                                                                </div>
                                                                                                                <div class="fw-semibold"
                                                                                                                    style="font-size: 13px;">
                                                                                                                    ({{ $departureflight->arrival_location->short_name }})
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4">
                                                                                                                <div class="fw-normal text-muted"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    Terminal
                                                                                                                </div>
                                                                                                                <div class="fw-normal text-muted"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    {{ $departureflight->departure_location->name }}
                                                                                                                    {{ $departureflight->departure_location->location }}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4">
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="col-md-4 text-end">
                                                                                                                <div class="fw-normal text-muted"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    Terminal
                                                                                                                </div>
                                                                                                                <div class="fw-normal text-muted"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    {{ $departureflight->arrival_location->name }}
                                                                                                                    {{ $departureflight->arrival_location->location }}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($returnflight != '')
                                                                                        <div class="col-md-6">
                                                                                            <div class="card">
                                                                                                <h5
                                                                                                    class="card-header text-center">
                                                                                                    {{ $returnflight->departure_location->location }}
                                                                                                    to
                                                                                                    {{ $returnflight->arrival_location->location }}
                                                                                                </h5>
                                                                                                <div
                                                                                                    class="card-body text-start">
                                                                                                    <div
                                                                                                        class="row">
                                                                                                        <div
                                                                                                            class="col-md-12 d-flex">
                                                                                                            <img src="{{ url('upload/images/airline', $returnflight->airline->image) }}"
                                                                                                                class="rounded-circle pt-2"
                                                                                                                style="width: 50px; height: 55px;"
                                                                                                                alt="">
                                                                                                            <div
                                                                                                                class="pt-3 ps-2">
                                                                                                                <h5
                                                                                                                    class="fs-6 fw-semibold">
                                                                                                                    Flight
                                                                                                                    Number
                                                                                                                    <span
                                                                                                                        class="fs-6 fw-normal">{{ $returnflight->flight_number }}</span>
                                                                                                                </h5>
                                                                                                                <div
                                                                                                                    class="h6 fs-6 fw-normal text-muted">
                                                                                                                    Aircraft
                                                                                                                    :
                                                                                                                    <span>{{ $returnflight->plane_on }}</span>
                                                                                                                </div>
                                                                                                                <div class="h6 fw-normal text-muted"
                                                                                                                    style="font-size: 13px;">
                                                                                                                    Available
                                                                                                                    seats:
                                                                                                                    <span>{{ $bookingFlight->person }}</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-md-12 pt-3 pb-2">
                                                                                                            <div
                                                                                                                class="row align-items-center">
                                                                                                                <div
                                                                                                                    class="col-md-4">
                                                                                                                    <div
                                                                                                                        class="h6 fw-semibold">
                                                                                                                        {{ $returnflight->departure_time }}
                                                                                                                    </div>
                                                                                                                    <div class="fw-semibold text-dark"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        {{ date('D, d F Y', strtotime($returnflight->departure_date)) }}
                                                                                                                    </div>
                                                                                                                    <div class="fw-semibold"
                                                                                                                        style="font-size: 13px;">
                                                                                                                        ({{ $returnflight->departure_location->short_name }})
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-4 text-center">
                                                                                                                    <div class="h6 fw-semibold text-muted"
                                                                                                                        style="font-size: 12px; margin-bottom: -13px;">
                                                                                                                        {{ $returnflight->duration }}
                                                                                                                    </div>
                                                                                                                    <span
                                                                                                                        style="width: 80px; height: 2px; display: inline-block;"
                                                                                                                        class=" bg-primary"></span>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-4 text-end">
                                                                                                                    <div
                                                                                                                        class="h6 fw-semibold">
                                                                                                                        {{ $returnflight->arrival_time }}
                                                                                                                    </div>
                                                                                                                    <div class="fw-semibold text-dark"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        {{ date('D, d F Y', strtotime($returnflight->arrival_date)) }}
                                                                                                                    </div>
                                                                                                                    <div class="fw-semibold"
                                                                                                                        style="font-size: 13px;">
                                                                                                                        ({{ $returnflight->arrival_location->short_name }})
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-4">
                                                                                                                    <div class="fw-normal text-muted"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        Terminal
                                                                                                                    </div>
                                                                                                                    <div class="fw-normal text-muted"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        {{ $returnflight->departure_location->name }}
                                                                                                                        {{ $returnflight->departure_location->location }}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-4">
                                                                                                                </div>

                                                                                                                <div
                                                                                                                    class="col-md-4 text-end">
                                                                                                                    <div class="fw-normal text-muted"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        Terminal
                                                                                                                    </div>
                                                                                                                    <div class="fw-normal text-muted"
                                                                                                                        style="font-size: 11px;">
                                                                                                                        {{ $returnflight->arrival_location->name }}
                                                                                                                        {{ $returnflight->arrival_location->location }}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane fade"
                                                                                id="nav-summary{{ $departureflight->id }}"
                                                                                role="tabpanel"
                                                                                aria-labelledby="nav-summary-tab"
                                                                                tabindex="0">

                                                                                <div class="row">
                                                                                    <div class="col-md-12 px-4">
                                                                                        <div class="table-responsive">
                                                                                            <table
                                                                                                class="table table-bordered table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Summary</th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Price</th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Taxes Fees
                                                                                                        </th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Per
                                                                                                            Passenger
                                                                                                        </th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Total</th>
                                                                                                    </tr>
                                                                                                </thead>

                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>Adult</td>
                                                                                                        <td>BDT
                                                                                                            @if ($returnflight != '')
                                                                                                                {{ $departureflight->price + $returnflight->price }}
                                                                                                            @else
                                                                                                                {{ $departureflight->price }}
                                                                                                            @endif
                                                                                                        </td>
                                                                                                        <td>BDT
                                                                                                            {{ $bookingFlight->taxes }}
                                                                                                        </td>
                                                                                                        <td>BDT
                                                                                                            @if ($returnflight != '')
                                                                                                                ({{ ($departureflight->price + $returnflight->price) * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                            @else
                                                                                                                ({{ $departureflight->price * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                            @endif
                                                                                                            x
                                                                                                            {{ $bookingFlight->person }})
                                                                                                        </td>
                                                                                                        <td>BDT
                                                                                                            @if ($returnflight != '')
                                                                                                                {{ ($departureflight->price + $returnflight->price) * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                            @else
                                                                                                                {{ $departureflight->price * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                            @endif
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                                <tfooter>
                                                                                                    <tr>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Total
                                                                                                            ({{ $bookingFlight->person }}
                                                                                                            Traveler)
                                                                                                        </th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                        </th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                        </th>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                        </th>
                                                                                                        @if ($returnflight != '')
                                                                                                            <th>BDT
                                                                                                                {{ ($departureflight->price + $returnflight->price) * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                            @else
                                                                                                            <th>BDT
                                                                                                                {{ $departureflight->price * $bookingFlight->person + $bookingFlight->taxes }}
                                                                                                        @endif
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                </tfooter>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="tab-pane fade" id="nav-rules" role="tabpanel" aria-labelledby="nav-rules-tab" tabindex="0">
                                                                        
                                                                        Flight Rules
                                                                    </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <div class="card card-body text-center">
                                        <h4>Flight Booking Not Found</h4>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- flight booking list end -->
        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
            tabindex="0">...</div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
            tabindex="0">...</div>

    </div>


</div>

<script>
    function hrHideOrShow(id) {
        let booking_details_hr = document.getElementById(`booking_details_hr${id}`);
        let view = document.querySelector(`.view${id}`);
        let hide = document.querySelector(`.hide${id}`);
        // alert(id)
        booking_details_hr.classList.toggle("d-none");
        view.classList.toggle("d-none");
        hide.classList.toggle("d-none");
    }
</script>
