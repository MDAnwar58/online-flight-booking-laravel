<div class="container flight_search_bg">
    <div class="row">
        <!-- <div class="col-md-12 py-3">
            <div class="card card-body">
                <div class="tab-content  px-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12 d-md-flex fs-6 fw-semibold py-3 px-3">
                                <div class="d-flex justify-content-md-start justify-content-center">
                                    <div class="form-check me-4">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="round_trip">
                                        <label class="form-check-label" for="round_trip">
                                            Round Trip
                                        </label>
                                    </div>
                                    <div class="form-check me-4">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="one_way">
                                        <label class="form-check-label" for="one_way">
                                            One Way
                                        </label>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-md-0 mt-2">
                                    <div class="form-check me-4">
                                        <input id="multi_city" class="form-check-input" type="radio" name="flexRadioDefault" id="multi_city">
                                        <label class="form-check-label" for="multi_city">
                                            Multi City
                                        </label>
                                    </div>
                                    <span class="flights_span bg-secondary"></span>
                                    <select name="" id="" style="appearance: none;" class="border border-0 bg-transparent ms-4 fs-6 fw-semibold text-primary">
                                        <option value="">Coach</option>
                                        <option value="">Premium Economy</option>
                                        <option value="">Business</option>
                                        <option value="">First</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 pt-2">
                                <div class="row">
                                    <div id="convertBox" class="col-xl-5 col-sm-12 d-sm-flex position-relative mb-lg-0 mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text ms-1 bg-light ps-3 pe-0" id="basic-addon1">
                                                <i class="ri-map-pin-fill fs-4 text-secondary"></i>
                                            </span>
                                            <input type="text" class="form-control py-xl-2 py-4 rounded-end border-start-0 text-muted fs-5 fw-semibold focus-ring z-0 bg-light" placeholder="From Where?"  style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)">
                                        </div>
                                        <div class="input-group mt-sm-0 mt-1">
                                            <span class="input-group-text ms-1 bg-light ps-4 pe-0" id="basic-addon1">
                                                <i class="ri-map-pin-fill fs-4 text-secondary "></i>
                                            </span>
                                            <input type="text" class="form-control py-xl-2 py-4 rounded-end focus-ring border-start-0 text-muted fs-5 fw-semibold bg-light"  style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)" placeholder="To Where?">
                                        </div>
                                        <button id="convertBtn" class="bg-light position-absolute start-50 top-50 translate-middle rounded-circle fs-4 text-primary py-0 px-2 z-3 convert_btn">
                                            <i class="ri-arrow-left-right-line d-sm-block d-none"></i>
                                            <i class="ri-arrow-up-down-line d-sm-none d-block"></i>
                                        </button>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 ps-xl-0 ps-3 mt-xl-0">
                                        <div class="row">
                                            <div id="formDate" class="col-md-3 col-sm-6 col-12 mb-md-0 mb-3">
                                                <div class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100">
                                                    <span class="ps-1 pe-3 fs-4"><i class="ri-calendar-todo-fill"></i></span>
                                                    <div class="">
                                                        <span class="text-dark fs-6 fw-bold">Oct 20</span><br>
                                                        <span class="text-muted">2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  id="returnDate" class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-3">
                                                <div class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2">
                                                    <span class="ps-1 pe-3 fs-4"><i class="ri-calendar-todo-fill"></i></span>
                                                    <div class="">
                                                        <span class="text-dark fs-6 fw-bold">Oct 20</span><br>
                                                        <span class="text-muted">2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="travel" class="col-md-3 col-sm-6 col-12">
                                                <div class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center h-100 py-md-0 py-2">
                                                    <span class="ps-1 pe-3 fs-4"><i class="ri-user-fill"></i></span>
                                                    <div class="">
                                                        <span class="text-dark fs-6 fw-bold">1</span><br>
                                                        <span class="text-muted">Travel</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="searchFilterBtn" class="col-md-3 col-sm-6 col-12 mt-md-0 mt-3">
                                                <button id="searchFlightBtn" type="button" class="btn btn-warning h-100 fs-6 fw-bold text-light w-100">Search Flights</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="multipleField" class="col-md-12 pt-2 d-none">
                                <div class="row">
                                    <div class="col-xl-5 col-sm-12 d-sm-flex">
                                        <div class="input-group ">
                                            <span class="input-group-text ms-1 bg-light ps-3 pe-0" id="basic-addon1">
                                                <i class="ri-map-pin-fill fs-4 text-secondary"></i>
                                            </span>
                                            <input type="text" class="form-control py-xl-2 py-4 rounded-end border-start-0 text-muted fs-5 fw-semibold focus-ring z-0 bg-light" placeholder="From Where?"  style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)">
                                        </div>
                                        <div class="input-group mt-sm-0 mt-1">
                                            <span class="input-group-text ms-1 bg-light ps-4 pe-0" id="basic-addon1">
                                                <i class="ri-map-pin-fill fs-4 text-secondary "></i>
                                            </span>
                                            <input type="text" class="form-control py-xl-2 py-4 rounded-end focus-ring border-start-0 text-muted fs-5 fw-semibold bg-light"  style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)" placeholder="To Where?">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-sm-12 ps-xl-0 ps-3 mt-xl-0 mt-3">
                                        <div class="row">
                                            <div id="formDate" class="col-md-4 col-sm-6 col-12">
                                                <div class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100">
                                                    <span class="ps-1 pe-3 fs-4"><i class="ri-calendar-todo-fill"></i></span>
                                                    <div class="">
                                                        <span class="text-dark fs-6 fw-bold">Oct 20</span><br>
                                                        <span class="text-muted">2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="secondSearchFlightBtn" class="col-md-12 pt-3 d-none">
                                <button id="searchFlightBtn" type="button" class="btn btn-warning h-100 fs-6 fw-bold text-light w-100">Search Flights</button>
                            </div>

                            <div class="col-md-12 py-3 px-3">
                                <div class="row">
                                    <div class="col-md-9 d-lg-flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="return" value="option1">
                                            <label class="form-check-label text-muted" for="return">Return to or from another city/airport?</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="direct_flight" value="option1">
                                            <label class="form-check-label text-muted" for="direct_flight">Direct Flights</label>
                                        </div>
                                    </div>
                                    <div id="actionBtn" class="col-md-3 text-lg-end d-none mt-lg-0 mt-2">
                                        <button id="add_flight" type="button" class="text-capitalize border-0 bg-transparent text-primary me-3 fs-6 fw-semibold">
                                            <i class="ri-add-line"></i> add flight</button>
                                            <button id="allClearBtn" type="button" class="text-capitalize border-0 bg-transparent text-danger fs-6 fw-semibold" onclick="allClear()">
                                                <i class="ri-delete-bin-6-line"></i> all clear</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-12 py-2">
            <div class="row justify-content-end">
                <div class="col-md-9">
                    <div class="col-md-12 text-center">
                        <h2 class="fs-2 fw-bolder text-muted">All Flights</h2>
                        <h2 class="fs-2 fw-bolder text-muted d-none">Flights from Dhaka to Chittagong</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 pb-5">
            <div class="container">
                <div class="row">

                    @include('components.frontend.flight-sidebar')
                    <div class="flights col-md-9">
                        <div class="row">
                            @if ($depart_flights != "false")
                                @if ($return_date != '')
                                    @foreach ($depart_flights as $flight)
                                        @php
                                            $return_flights = \App\Models\Flight::where('departure_date', $return_date)
                                                ->where('departure_location_id', $flight->arrival_location_id)
                                                ->where('airline_id', '=', $flight->airline_id)
                                                ->get();
                                        @endphp
                                        @if ($return_flights->count() > 0)
                                            @foreach ($return_flights as $return_flight)
                                                <form action="{{ route('flight.booking') }}" method="GET" class="col-md-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 ps-3">
                                                                                <input type="hidden" name="flight_id[]" value="{{ $flight->id }}">
                                                                                <input type="hidden" name="person" value="{{ $person }}">
                                                                                <img src="{{ url('upload/images/airline', $flight->airline->image) }}"
                                                                                    class="rounded-circle pt-2"
                                                                                    style="width: 100px;"
                                                                                    alt="">
                                                                                <h6
                                                                                    class="text-secondary text-sm fw-normal">
                                                                                    {{ $flight->airline->name }}
                                                                                </h6>
                                                                            </div>
                                                                            <div class="col-md-3 pt-3">
                                                                                <span
                                                                                    class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                                                <div class="fs-6 fw-semibold pt-2">
                                                                                    {{ $flight->departure_time }}
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted"><small>{{ date('D, d F Y', strtotime($flight->departure_date)) }}</small></span><br>
                                                                                <span
                                                                                    class="text-muted">{{ $flight->departure_location->name }}
                                                                                    ({{ $flight->departure_location->short_name }})
                                                                                </span>
                                                                            </div>
                                                                            <div class="col-md-3 pt-2 text-center">
                                                                                <div
                                                                                    class="fs-6 fw-semibold pt-2 text-muted">
                                                                                    {{ $flight->duration }}
                                                                                </div>
                                                                                <span
                                                                                    style="width: 100px; height: 2px; display: inline-block;"
                                                                                    class="bg-primary"></span>
                                                                                <div
                                                                                    class="text-muted fs-6 fw-light mt-2">
                                                                                    {{ $flight->flight_status }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 pt-3">
                                                                                <span
                                                                                    class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                                                <div class="fs-6 fw-semibold pt-2">
                                                                                    {{ $flight->arrival_time }}
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted"><small>{{ date('D, d F Y', strtotime($flight->arrival_date)) }}</small></span><br>
                                                                                <span
                                                                                    class="text-muted">{{ $flight->arrival_location->name }}
                                                                                    ({{ $flight->arrival_location->short_name }})
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12 py-3">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-md-6">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 ps-3">
                                                                                
                                                                                <input type="hidden" name="flight_id[]" value="{{ $return_flight->id }}">
                                                                                <img src="{{ url('upload/images/airline', $return_flight->airline->image) }}"
                                                                                    class="rounded-circle pt-2"
                                                                                    style="width: 100px;"
                                                                                    alt="">
                                                                                <h6
                                                                                    class="text-secondary text-sm fw-normal">
                                                                                    {{ $return_flight->airline->name }}
                                                                                </h6>
                                                                            </div>
                                                                            <div class="col-md-3 pt-3">
                                                                                <span
                                                                                    class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                                                <div class="fs-6 fw-semibold pt-2">
                                                                                    {{ $return_flight->departure_time }}
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted"><small>{{ date('D, d F Y', strtotime($return_flight->departure_date)) }}</small></span><br>
                                                                                <span
                                                                                    class="text-muted">{{ $return_flight->departure_location->name }}
                                                                                    ({{ $return_flight->departure_location->short_name }})
                                                                                </span>
                                                                            </div>
                                                                            <div class="col-md-3 pt-2 text-center">
                                                                                <div
                                                                                    class="fs-6 fw-semibold pt-2 text-muted">
                                                                                    {{ $return_flight->duration }}
                                                                                </div>
                                                                                <span
                                                                                    style="width: 100px; height: 2px; display: inline-block;"
                                                                                    class="bg-primary"></span>
                                                                                <div
                                                                                    class="text-muted fs-6 fw-light mt-2">
                                                                                    {{ $return_flight->flight_status }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 pt-3">
                                                                                <span
                                                                                    class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                                                <div class="fs-6 fw-semibold pt-2">
                                                                                    {{ $return_flight->arrival_time }}
                                                                                </div>
                                                                                <span
                                                                                    class="text-muted"><small>{{ date('D, d F Y', strtotime($return_flight->arrival_date)) }}</small></span><br>
                                                                                <span
                                                                                    class="text-muted">{{ $return_flight->arrival_location->name }}
                                                                                    ({{ $return_flight->arrival_location->short_name }})
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-12 pe-5 d-flex justify-content-between py-2">
                                                                                <div>
                                                                                    <span
                                                                                        class="text-muted"><small>Price</small></span>
                                                                                    <h5 class="fs-6 fw-semibold">
                                                                                        {{ $return_flight->price + $flight->price }}
                                                                                        tk
                                                                                    </h5>
                                                                                </div>

                                                                                <button type="submit"
                                                                                    class="btn btn-primary text-capitalize mt-3">book
                                                                                    now</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
                                        @else
                                            @if (!$depart_flights->count() > 0)
                                            <div class="col-md-12 mb-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card card-body text-center">
                                                            Flight Not Found
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    @foreach ($depart_flights as $flight)
                                        <form action="{{ route('flight.booking') }}" method="GET" class="col-md-12 mb-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-3 ps-3">
                                                                        <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                                                                        <input type="hidden" name="person" value="{{ $person }}">
                                                                        <img src="{{ url('upload/images/airline', $flight->airline->image) }}"
                                                                            class="rounded-circle pt-2"
                                                                            style="width: 100px; height: 100px;"
                                                                            alt="">
                                                                        <h6
                                                                            class="text-secondary text-sm fw-normal mt-2">
                                                                            {{ $flight->airline->name }}</h6>
                                                                        <span
                                                                            class="text-muted"><small>Price</small></span>
                                                                        <h5 class="fs-6 fw-semibold">BDT
                                                                            {{ $flight->price }}</h5>
                                                                    </div>
                                                                    <div class="col-md-3 pt-3">
                                                                        <span
                                                                            class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                                        <div class="fs-6 fw-semibold pt-2">
                                                                            {{ $flight->departure_time }}</div>
                                                                        <span
                                                                            class="text-muted"><small>{{ date('D, d F Y', strtotime($flight->departure_date)) }}</small></span><br>
                                                                        <span
                                                                            class="text-muted">{{ $flight->departure_location->name }}
                                                                            ({{ $flight->departure_location->short_name }})
                                                                        </span>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-3 pt-2 d-flex justify-content-start">
                                                                        <div class="text-center">
                                                                            <div
                                                                                class="fs-6 fw-semibold pt-2 text-muted">
                                                                                {{ $flight->duration }}
                                                                            </div>
                                                                            <span
                                                                                style="width: 100px; height: 2px; display: inline-block;"
                                                                                class="bg-primary"></span>
                                                                            <div class="text-muted fs-6 fw-light mt-2">
                                                                                {{ $flight->flight_status }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 pt-3">
                                                                        <span
                                                                            class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                                        <div class="fs-6 fw-semibold pt-2">
                                                                            {{ $flight->arrival_time }}</div>
                                                                        <span
                                                                            class="text-muted"><small>{{ date('D, d F Y', strtotime($flight->arrival_date)) }}</small></span><br>
                                                                        <span
                                                                            class="text-muted">{{ $flight->arrival_location->name }}
                                                                            ({{ $flight->arrival_location->short_name }})</span>
                                                                    </div>
                                                                    <div class="col-md-12 text-end pb-3 pe-5">
                                                                        <button type="submit"
                                                                            class="btn btn-primary text-capitalize mt-4">book
                                                                            now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                @endif
                            @else
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-body text-center">
                                                Flight Not Found
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3 ps-3">
                                                            <img src="{{ url('assets/frontend/images/airlines.png') }}"
                                                                class="rounded-circle pt-2" style="width: 100px;"
                                                                alt="">
                                                            <h6 class="text-secondary text-sm fw-normal">Biman
                                                                Bangladesh Airlines</h6>
                                                            <span class="text-muted"><small>Price</small></span>
                                                            <h5 class="fs-6 fw-semibold">BDT 2,964</h5>
                                                        </div>
                                                        <div class="col-md-3 pt-3">
                                                            <span class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                            <div class="fs-6 fw-semibold pt-2">20:00</div>
                                                            <span class="text-muted"><small>Fri, 20 Oct
                                                                    2023</small></span><br>
                                                            <span class="text-muted">Dhaka (DAC)</span>
                                                        </div>
                                                        <div class="col-md-3 pt-2 text-center">
                                                            <div class="fs-6 fw-semibold pt-2 text-muted">45 mintes
                                                            </div>
                                                            <span
                                                                style="width: 100px; height: 2px; display: inline-block;"
                                                                class="bg-primary"></span>
                                                            <div class="text-muted fs-6 fw-light mt-2">Non Stop</div>
                                                        </div>
                                                        <div class="col-md-3 pt-3">
                                                            <span class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                            <div class="fs-6 fw-semibold pt-2">20:00</div>
                                                            <span class="text-muted"><small>Fri, 20 Oct
                                                                    2023</small></span><br>
                                                            <span class="text-muted">Chittagong (CGP)</span>

                                                            <button type="button"
                                                                class="btn btn-primary text-capitalize mt-4">book
                                                                now</button>
                                                        </div>
                                                        <div class="col-md-12 text-end">
                                                            <button
                                                                class="bg-transparent border-0 text-primary me-5 text-capitalize"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseExample"
                                                                aria-expanded="false" aria-controls="collapseExample"
                                                                onclick="hrHideOrShow()">
                                                                <span class="view">view</span><span
                                                                    class="hide d-none">Hide</span> flight details
                                                            </button>
                                                            <div class="row flight_details">
                                                                <div class="col-md-12 d-none" id="booking_details_hr">
                                                                    <hr>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="collapse" id="collapseExample">
                                                                        <div class="row pb-2">
                                                                            <div class="col-md-12">
                                                                                <nav>
                                                                                    <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1"
                                                                                        id="nav-tab" role="tablist">
                                                                                        <button
                                                                                            class="nav-link active py-2"
                                                                                            id="nav-flight-details-tab"
                                                                                            data-bs-toggle="tab"
                                                                                            data-bs-target="#nav-flight-details"
                                                                                            type="button"
                                                                                            role="tab"
                                                                                            aria-controls="nav-flight-details"
                                                                                            aria-selected="true">Flights
                                                                                            Details
                                                                                        </button>
                                                                                        <button class="nav-link"
                                                                                            id="nav-summary-tab"
                                                                                            data-bs-toggle="tab"
                                                                                            data-bs-target="#nav-summary"
                                                                                            type="button"
                                                                                            role="tab"
                                                                                            aria-controls="nav-summary"
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
                                                                                id="nav-flight-details"
                                                                                role="tabpanel"
                                                                                aria-labelledby="nav-flight-details-tab"
                                                                                tabindex="0">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="card">
                                                                                            <h5
                                                                                                class="card-header text-center">
                                                                                                Dhaka to Cox's Bazar
                                                                                            </h5>
                                                                                            <div
                                                                                                class="card-body text-start">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-12 d-flex">
                                                                                                        <img src="{{ url('assets/frontend/images/airlines.png') }}"
                                                                                                            class="rounded-circle pt-2"
                                                                                                            style="width: 50px; height: 55px;"
                                                                                                            alt="">
                                                                                                        <div
                                                                                                            class="pt-3 ps-2">
                                                                                                            <h5
                                                                                                                class="fs-6 fw-semibold">
                                                                                                                Novo Air
                                                                                                                <span
                                                                                                                    class="fs-6 fw-normal">VQ
                                                                                                                    |
                                                                                                                    988</span>
                                                                                                            </h5>
                                                                                                            <div
                                                                                                                class="h6 fs-6 fw-normal text-muted">
                                                                                                                Aircraft
                                                                                                                :
                                                                                                                <span>ATR725</span>
                                                                                                            </div>
                                                                                                            <div class="h6 fw-normal text-muted"
                                                                                                                style="font-size: 13px;">
                                                                                                                Available
                                                                                                                seats:
                                                                                                                <span>9</span>
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
                                                                                                                    17:20
                                                                                                                </div>
                                                                                                                <div class="fw-semibold text-dark"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    Tue,
                                                                                                                    24
                                                                                                                    Oct
                                                                                                                    2023
                                                                                                                </div>
                                                                                                                <div class="fw-semibold"
                                                                                                                    style="font-size: 13px;">
                                                                                                                    (DAC)
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4 text-center">
                                                                                                                <div class="h6 fw-semibold text-muted"
                                                                                                                    style="font-size: 12px; margin-bottom: -13px;">
                                                                                                                    45
                                                                                                                    minutes
                                                                                                                </div>
                                                                                                                <span
                                                                                                                    style="width: 80px; height: 2px; display: inline-block;"
                                                                                                                    class=" bg-primary"></span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-4 text-end">
                                                                                                                <div
                                                                                                                    class="h6 fw-semibold">
                                                                                                                    17:20
                                                                                                                </div>
                                                                                                                <div class="fw-semibold text-dark"
                                                                                                                    style="font-size: 11px;">
                                                                                                                    Tue,
                                                                                                                    24
                                                                                                                    Oct
                                                                                                                    2023
                                                                                                                </div>
                                                                                                                <div class="fw-semibold"
                                                                                                                    style="font-size: 13px;">
                                                                                                                    (CCG)
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
                                                                                                                    Hazrat
                                                                                                                    Shahjalal
                                                                                                                    International
                                                                                                                    Airport
                                                                                                                    Dhaka,
                                                                                                                    Bangladesh
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
                                                                                                                    Hazrat
                                                                                                                    Shahjalal
                                                                                                                    International
                                                                                                                    Airport
                                                                                                                    Dhaka,
                                                                                                                    Bangladesh
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
                                                                            <div class="tab-pane fade"
                                                                                id="nav-summary" role="tabpanel"
                                                                                aria-labelledby="nav-summary-tab"
                                                                                tabindex="0">

                                                                                <div class="row">
                                                                                    <div class="col-md-12 px-4">
                                                                                        <div class="table-responsive">
                                                                                            <table
                                                                                                class="table table-bordered table-hover text-start">
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
                                                                                                        <td>BDT 5,108
                                                                                                        </td>
                                                                                                        <td>BDT 1,972
                                                                                                        </td>
                                                                                                        <td>BDT (7,080 x
                                                                                                            1)</td>
                                                                                                        <td>BDT 7,080
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                                <tfooter>
                                                                                                    <tr>
                                                                                                        <th
                                                                                                            class="text-secondary">
                                                                                                            Total (1
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
                                                                                                        <th>BDT 7,080
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
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let booking_details_hr2 = document.getElementById('booking_details_hr2');
    let booking_details_hr = document.getElementById('booking_details_hr');
    let view = document.querySelector(".view");
    let hide = document.querySelector(".hide");
    let view2 = document.querySelector(".view2");
    let hide2 = document.querySelector(".hide2");

    function hrHideOrShow() {
        booking_details_hr.classList.toggle("d-none");
        view.classList.toggle("d-none");
        hide.classList.toggle("d-none");
    }

    function hrHideOrShowTwo() {
        booking_details_hr2.classList.toggle("d-none");
        view2.classList.toggle("d-none");
        hide2.classList.toggle("d-none");
    }

    // function flightPriceRange(event) {
    //     let price = $("#price");
    //     let renge = event.target.value;
    //     price.text(renge);
    // }

    // function airline(event, price, formCheckInput) {
    //     let checkbox = document.getElementById(formCheckInput);
    //     if (checkbox.checked === true) {
    //         checkbox.value = event.target.value;
    //         console.log(price);
    //     }
    // }
</script>
