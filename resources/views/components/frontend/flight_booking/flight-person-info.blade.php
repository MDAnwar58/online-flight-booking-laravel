<div class="flight_booking_bg pt-5 pb-5">
    <div class="container">
        <form action="{{ route('flight.booking.continue') }}" method="POST" class="row">
            @csrf
            <div class="col-md-8 d-flex justify-content-between align-items-center px-3">
                <h4 class="text-primary fs-4 fw-semibold">Review Your Booking</h4>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('flight') }}">Flight</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    @if ($return_flight != '')
                        <input type="hidden" name="flight_id[]" value="{{ $departure_flight->id }}">
                        <div class="d-inline-flex align-items-center justify-content-between px-4">
                            <span
                                class="fs-5 fw-semibold">{{ $departure_flight->departure_location->short_name }}-{{ $departure_flight->arrival_location->short_name }}</span>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-primary me-4"data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">View Baggage</button>

                                <div>
                                    <a id="flightCollapseDownUp" onclick="upDown()"
                                        class="border border-1 rounded-circle bg-light text-decoration-none pt-1"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-4 text-muted" id="downArrow"></i>
                                        <i class="ri-arrow-up-s-line fs-4 text-muted d-none" id="upArrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="collapse pb-2" id="collapseExample">
                            <div class="row px-3 py-3">
                                <div class="col-md-7 ps-4 d-flex">
                                    <img src="{{ url('upload/images/airline', $departure_flight->airline->image) }}"
                                        style="width: 80px;" alt="">
                                    <div class="ps-3">
                                        <span class="text-secondary">{{ $departure_flight->airline->name }}</span>
                                        <div class="fs-6 text-dark pt-2">{{ $departure_flight->flight_number }}</div>
                                        <div class="fw-semibold" style="font-size: 14px;">Aircraft :
                                            <span>{{ $departure_flight->plane_on }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-center justify-content-end text-secondary pe-4">
                                    <p>{{ $departure_flight->flight_type->name }} Class</p>
                                </div>

                                <hr class="mt-4">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Depart</div>
                                            <div>{{ $departure_flight->departure_time }}</div>
                                            <span class="text-secondary"
                                                style="font-size: 12px;">{{ date('D, d F Y', strtotime($departure_flight->departure_date)) }}</span>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $departure_flight->departure_location->short_name }})</div>
                                            <div class="fw-lighter">
                                                {{ $departure_flight->departure_location->location }}</div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div class="text-center">
                                                <div class="text-secondary" style="font-size: 12px;">
                                                    {{ $departure_flight->duration }}</div>
                                                <span
                                                    style="width: 100px; height: 2px; display: inline-block; background-color: #0D6EFD;"></span>
                                                <div style="font-size: 13px;">{{ $departure_flight->flight_status }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Arrive</div>
                                            <div>{{ $departure_flight->arrival_time }}</div>
                                            <div class="text-secondary" style="font-size: 12px;">
                                                {{ date('D, d F Y', strtotime($departure_flight->arrival_date)) }}
                                            </div>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $departure_flight->arrival_location->short_name }})</div>
                                            <div class="fw-lighter">{{ $departure_flight->arrival_location->location }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <input type="hidden" name="flight_id[]" value="{{ $return_flight->id }}">
                        <div class="d-inline-flex align-items-center justify-content-between px-4">
                            <span
                                class="fs-5 fw-semibold">{{ $return_flight->departure_location->short_name }}-{{ $return_flight->arrival_location->short_name }}</span>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-sm btn-outline-primary me-4"data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">View Baggage</button>

                                <div>
                                    <a id="flightCollapseDownUp" onclick="secondUpDown()"
                                        class="border border-1 rounded-circle bg-light text-decoration-none pt-1"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample2"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-4 text-muted" id="secondDownArrow"></i>
                                        <i class="ri-arrow-up-s-line fs-4 text-muted d-none" id="secondUpArrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <hr>
                            <div class="row px-3">
                                <div class="col-md-7 ps-4 d-flex">
                                    <img src="{{ url('upload/images/airline', $return_flight->airline->image) }}"
                                        style="width: 80px;" alt="">
                                    <div class="ps-3">
                                        <span class="text-secondary">{{ $return_flight->airline->name }}</span>
                                        <div class="fs-6 text-dark pt-2">{{ $return_flight->flight_number }}</div>
                                        <div class="fw-semibold" style="font-size: 14px;">Aircraft :
                                            <span>{{ $return_flight->plane_on }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-5 d-flex align-items-center justify-content-end text-secondary pe-4">
                                    <p>{{ $return_flight->flight_type->name }} Class</p>
                                </div>

                                <hr class="mt-4">

                                <div class="col-md-12 pb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Depart</div>
                                            <div>{{ $return_flight->departure_time }}</div>
                                            <span class="text-secondary"
                                                style="font-size: 12px;">{{ date('D, d F Y', strtotime($return_flight->departure_date)) }}</span>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $return_flight->departure_location->short_name }})</div>
                                            <div class="fw-lighter">{{ $return_flight->departure_location->location }}
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div class="text-center">
                                                <div class="text-secondary" style="font-size: 12px;">
                                                    {{ $return_flight->duration }}</div>
                                                <span
                                                    style="width: 100px; height: 2px; display: inline-block; background-color: #0D6EFD;"></span>
                                                <div style="font-size: 13px;">{{ $return_flight->flight_status }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Arrive</div>
                                            <div>{{ $return_flight->arrival_time }}</div>
                                            <div class="text-secondary" style="font-size: 12px;">
                                                {{ date('D, d F Y', strtotime($return_flight->arrival_date)) }}</div>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $return_flight->arrival_location->short_name }})</div>
                                            <div class="fw-lighter">{{ $return_flight->arrival_location->location }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <input type="hidden" name="flight_id[]" value="{{ $departure_flight->id }}">
                        <div class="d-inline-flex align-items-center justify-content-between px-4">
                            <span
                                class="fs-5 fw-semibold">{{ $departure_flight->departure_location->short_name }}-{{ $departure_flight->arrival_location->short_name }}</span>
                            <div class="d-flex align-items-center">
                                <button type="button"
                                    class="btn btn-sm btn-outline-primary me-4"data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">View Baggage</button>

                                <div>
                                    <a id="flightCollapseDownUp" onclick="threeUpDown()"
                                        class="border border-1 rounded-circle bg-light text-decoration-none pt-1"
                                        data-bs-toggle="collapse" data-bs-target="#collapseExample3"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <i class="ri-arrow-down-s-line fs-4 text-muted" id="threeDownArrow"></i>
                                        <i class="ri-arrow-up-s-line fs-4 text-muted d-none" id="threeUpArrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse pb-2" id="collapseExample3">
                            <hr>
                            <div class="row px-3 py-3">
                                <div class="col-md-7 ps-4 d-flex">
                                    <img src="{{ url('upload/images/airline', $departure_flight->airline->image) }}"
                                        style="width: 80px;" alt="">
                                    <div class="ps-3">
                                        <span class="text-secondary">{{ $departure_flight->airline->name }}</span>
                                        <div class="fs-6 text-dark pt-2">{{ $departure_flight->flight_number }}</div>
                                        <div class="fw-semibold" style="font-size: 14px;">Aircraft :
                                            <span>{{ $departure_flight->plane_on }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-5 d-flex align-items-center justify-content-end text-secondary pe-4">
                                    <p>{{ $departure_flight->flight_type->name }} Class</p>
                                </div>

                                <hr class="mt-4">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Depart</div>
                                            <div>{{ $departure_flight->departure_time }}</div>
                                            <span class="text-secondary"
                                                style="font-size: 12px;">{{ date('D, d F Y', strtotime($departure_flight->departure_date)) }}</span>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $departure_flight->departure_location->short_name }})</div>
                                            <div class="fw-lighter">
                                                {{ $departure_flight->departure_location->location }}</div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                                            <div class="text-center">
                                                <div class="text-secondary" style="font-size: 12px;">
                                                    {{ $departure_flight->duration }}</div>
                                                <span
                                                    style="width: 100px; height: 2px; display: inline-block; background-color: #0D6EFD;"></span>
                                                <div style="font-size: 13px;">Non Stop</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <div class="text-secondary pb-2" style="font-size: 13px;">Arrive</div>
                                            <div>{{ $departure_flight->arrival_time }}</div>
                                            <div class="text-secondary" style="font-size: 12px;">
                                                {{ date('D, d F Y', strtotime($departure_flight->arrival_date)) }}
                                            </div>
                                            <div class="mt-2 fw-semibold" style="font-size: 14px;">
                                                ({{ $departure_flight->arrival_location->short_name }})</div>
                                            <div class="fw-lighter">
                                                {{ $departure_flight->arrival_location->location }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="row pt-5">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-md-12 pb-3">
                        <h6 class="text-primary fs-4 fw-semibold">Enter Traveler Details</h6>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="px-4 pt-3">
                                <h3 class="fs-4 fw-semibold">Traveler <span>{{ $person }}</span></h3>
                            </div>
                            <hr>
                            <div class="row px-4 pb-4">
                                <div class="col-md-12">
                                    <h5 class="fs-5 fw-semibold">Personal Details</h5>
                                    <div class="d-flex">
                                        <span class="text-muted"><i class="ri-question-line"></i></span>
                                        <span class="text-muted ms-2">As mentioned on your passport or government
                                            approved IDs</span>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="row">
                                        <div class="col-md-6 pb-3">
                                            <label for="">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="first_name" id=""
                                                class="form-control" value="{{ Auth::user()->first_name }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" id=""
                                                class="form-control" value="{{ Auth::user()->last_name }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Date of Birth <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" name="date_of_birth" class="form-control"
                                                value="{{ $contactInfo->date_of_birth }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Passport Number (Optional)</label>
                                            <input type="text" name="passport_number" id=""
                                                class="form-control" value="{{ $personalInfo->passport_number }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Passport Expiry Date (Optional)</label>
                                            <input type="date" name="port_expiry_date" id=""
                                                class="form-control" value="{{ $personalInfo->port_expiry_date }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="city">City <span class="text-danger">*</span></label>
                                            <input type="text" name="city" id="" class="form-control"
                                                value="{{ $contactInfo->city }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Country <span class="text-danger">*</span></label>
                                            <select name="country" id="" class="form-control">
                                                <option value="">(select)</option>
                                                <option @if ($contactInfo->country == 'Bangladesh') @selected(true) @endif
                                                    value="Bangladesh">Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="fs-5 fw-semibold">Contact Details</h5>
                                    <div class="d-flex">
                                        <span class="text-muted"><i class="ri-question-line"></i></span>
                                        <span class="text-muted ms-2">Receive booking confirmation & updates</span>
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="row">
                                        <div class="col-md-6 pb-3">
                                            <label for="">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" id="" class="form-control"
                                                value="{{ Auth::user()->email }}">
                                        </div>

                                        <div class="col-md-6 pb-3">
                                            <label for="">Address</label>
                                            <input type="text" name="address" id="" class="form-control"
                                                value="{{ $contactInfo->address }}">
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Contact Number <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">+88</span>
                                                <input type="number" name="phone" class="form-control"
                                                    value="{{ $contactInfo->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <label for="">Frequent Flyer (If any)</label>
                                            <input type="text" name="frequent_flyer_number" id=""
                                                class="form-control"
                                                value="{{ $contactInfo->frequent_flyer_number }}">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="flexRadioDefault1" checked value="sslcommerz">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    SSLCommerz
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="payment_method"
                                                    id="flexRadioDefault2" value="others">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Others
                                                </label>
                                            </div>
                                            @if (Session::has('error'))
                                                <span class=" text-danger">{{ Session::get('error') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit"
                            class="btn btn-primary w-100 mt-3 py-2 fw-semibold fs-6">Continue</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" sticky-top">
                    <div class="card card-body rounded-bottom-0">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <img src="{{ url('upload/images/airline', $departure_flight->airline->image) }}"
                                    style="width: 70px;" alt="">
                                <div>
                                    <h5 class="ms-3 fs-5 fw-semibold">{{ $departure_flight->airline->name }}</h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <input type="hidden" name="person" value="{{ $person }}">
                            <h6 class="text-secondary">Fare Summary</h6>
                            <div class="text-muted fs-5 pt-2">Adult ( {{ $person }} traveller)</div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between pt-2">
                            <span class="text-muted" style="font-size: 14px;">Base Fare</span>
                            <div>
                                <span>
                                    <span class="text-muted" style="font-size: 14px;">BDT</span>
                                    @if ($return_flight != '')
                                        <span
                                            class="fs-6 fw-semibold">{{ ($departure_flight->price + $return_flight->price) * $person }}</span>
                                    @else
                                        <span class="fs-6 fw-semibold">{{ $departure_flight->price * $person }}</span>
                                    @endif
                                </span>
                                @if ($return_flight != '')
                                    <div class="text-muted" style="font-size: 13px;">( {{ $person }} x
                                        {{ $departure_flight->price + $return_flight->price }} )</div>
                                @else
                                    <div class="text-muted" style="font-size: 13px;">( {{ $person }} x
                                        {{ $departure_flight->price }} )</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between pt-1">
                            <span class="text-muted" style="font-size: 14px;">Taxes + Fees</span>
                            <div>
                                <span>
                                    <input type="hidden" name="taxes" value="{{ 1972 }}">
                                    <span class="text-muted" style="font-size: 14px;">BDT</span>
                                    <span class="fs-6 fw-semibold">1,972</span>
                                </span>
                                <div class="text-muted" style="font-size: 13px;">( {{ $person }} x 1,972 )
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between pt-1">
                            <span class="text-muted" style="font-size: 14px;">Sub-total</span>
                            <div>
                                <span>
                                    <span class="text-muted" style="font-size: 14px;">BDT</span>
                                    @if ($return_flight != '')
                                        <span
                                            class="fs-6 fw-semibold">{{ ($departure_flight->price + $return_flight->price) * $person + 1972 }}</span>
                                    @else
                                        <span
                                            class="fs-6 fw-semibold">{{ $departure_flight->price * $person + 1972 }}</span>
                                    @endif
                                </span>
                                <div class="text-muted" style="font-size: 13px;">( {{ $person }} x 1,972 )
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="rounded-top-0 rounded bg-primary-subtle">
                            <div class="row px-4 py-4">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div>
                                        <span class="fs-5 fw-semibold">You Pay</span>
                                        <span>(for {{ $person }} traveler)</span>
                                    </div>
                                    <div>
                                        <span>BDT</span>
                                        @if ($return_flight != '')
                                            <input type="hidden" name="total_pay"
                                                value="{{ ($departure_flight->price + $return_flight->price) * $person + 1972 }}">
                                            <span>{{ ($departure_flight->price + $return_flight->price) * $person + 1972 }}</span>
                                        @else
                                            <input type="hidden" name="total_pay"
                                                value="{{ $departure_flight->price * $person + 1972 }}">
                                            <span>{{ $departure_flight->price * $person + 1972 }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let downArrow = document.getElementById('downArrow'),
        upArrow = document.getElementById('upArrow'),
        secondDownArrow = document.getElementById('secondDownArrow'),
        secondUpArrow = document.getElementById('secondUpArrow'),
        threeDownArrow = document.getElementById('threeDownArrow'),
        threeUpArrow = document.getElementById('threeUpArrow');

    function upDown() {
        downArrow.classList.toggle("d-none");
        upArrow.classList.toggle("d-none");
    }

    function secondUpDown() {
        secondDownArrow.classList.toggle("d-none");
        secondUpArrow.classList.toggle("d-none");
    }

    function threeUpDown() {
        threeDownArrow.classList.toggle("d-none");
        threeUpArrow.classList.toggle("d-none");
    }
</script>
