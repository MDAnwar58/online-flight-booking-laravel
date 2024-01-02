<style>
    #formLocation {
        z-index: 9999;
    }

    .travelPerson,
    .travelSenior,
    .travelChild {
        width: 50px;
    }

    .location {
        margin-top: -50px;
    }
</style>

<div class="hero-bg bg-primary" style="margin: 0 0 7rem 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-light py-5">
                <h1 class="fs-2 fw-bolder">Book Cheap Flights from Over 500 Airlines!</h1>
                <h6 class="pt-4">
                    <span class="bg-warning text-secondary rounded-circle px-1"><i class="ri-phone-fill fs-6"></i></span>
                    Call us 24/7 at <b class="text-warning">1-845-848-0154</b> to Get Cheap Flights!
                </h6>
            </div>
            <div class="col-md-12 z-3">
                <div class="card">
                    <div class="card-header py-0">
                        <nav>
                            <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1" id="nav-tab" role="tablist">
                                <button class="nav-link active py-2" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true"><i class="ri-plane-line"></i> Flights</button>
                            </div>
                        </nav>
                    </div>
                    <div class="card-body filtering_card">
                        <div class="tab-content  px-4" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <form id="flightForm" action="{{ route('flight') }}" method="GET" class="row">
                                    <div class="col-md-12 d-md-flex fs-6 fw-semibold py-3 px-3">
                                        <div class="d-flex justify-content-md-start justify-content-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flight"
                                                    id="round_trip" value="round_trip">
                                                <label class="form-check-label" for="round_trip">
                                                    Round Trip
                                                </label>
                                            </div>
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flight"
                                                    id="one_way" value="one_way">
                                                <label class="form-check-label" for="one_way">
                                                    One Way
                                                </label>
                                            </div>

                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-md-start justify-content-center mt-md-0 mt-2">
                                            <div class="form-check me-4">
                                                <input id="multi_city" class="form-check-input" type="radio"
                                                    name="flight" id="multi_city" value="multi_city">
                                                <label class="form-check-label" for="multi_city">
                                                    Multi City
                                                </label>
                                            </div>
                                            <span class="flights_span bg-secondary"></span>
                                            <select name="" id="" style="appearance: none;"
                                                class="border border-0 bg-transparent ms-4 fs-6 fw-semibold text-primary">
                                                <!-- <option value="">(select)</option> -->
                                                <option value="">Coach</option>
                                                <option value="">Premium Economy</option>
                                                <option value="">Business</option>
                                                <option value="">First</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <div class="row">
                                            <div id="convertBox"
                                                class="col-xl-5 col-sm-12 d-sm-flex position-relative mb-xl-0 mb-3">
                                                <div class="input-group position-relative">
                                                    <span class="input-group-text ms-1 bg-light ps-3 pe-0"
                                                        id="basic-addon1">
                                                        <i class="ri-map-pin-fill fs-4 text-secondary"></i>
                                                    </span>
                                                    <input type="text" name="departure_location[]"
                                                        id="departureInputField"
                                                        class="form-control py-xl-2 py-4 rounded-end border-start-0 text-muted fs-5 fw-semibold focus-ring z-0 bg-light"
                                                        placeholder="From Where?"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)">
                                                    <input type="hidden" name="departure_location_id[]"
                                                        id="departure_location_id">
                                                    <ul id="formLocation"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
                                                </div>
                                                <div class="input-group mt-sm-0 mt-1">
                                                    <span
                                                        class="input-group-text ms-1 bg-light ps-4 pe-0 position-relative"
                                                        id="basic-addon1">
                                                        <i class="ri-map-pin-fill fs-4 text-secondary "></i>
                                                    </span>
                                                    <input type="search" name="arrival_location[]"
                                                        id="arrialInputField"
                                                        class="form-control py-xl-2 py-4 rounded-end focus-ring border-start-0 text-muted fs-5 fw-semibold bg-light"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)"
                                                        placeholder="To Where?">
                                                    <input type="hidden" name="arrival_location_id"
                                                        id="arrival_location_id" name="arrival_location_id[]">
                                                    <ul id="whereLocation"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
                                                </div>
                                                <button type="button" id="convertBtn" onclick="changeLocation()"
                                                    class="bg-light position-absolute start-50 top-50 translate-middle rounded-circle fs-4 text-primary py-0 px-2 z-3 convert_btn">
                                                    <i class="ri-arrow-left-right-line d-sm-block d-none"></i>
                                                    <i class="ri-arrow-up-down-line d-sm-none d-block"></i>
                                                </button>
                                            </div>
                                            <div class="col-xl-7 col-sm-12 ps-xl-0 ps-3 mt-xl-0">
                                                <div class="row">
                                                    <div id="formDate"
                                                        class="col-md-3 col-sm-6 col-12 mb-md-0 mb-3 cursor"
                                                        data-bs-toggle="modal" data-bs-target="#departure_date-modal"
                                                        style="cursor: pointer;">
                                                        <input type="hidden" id="departureDateInput"
                                                            name="departure_date[]">
                                                        <div
                                                            class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100 trigger">
                                                            <span class="ps-1 pe-3 fs-4">
                                                                <i class="ri-calendar-todo-fill"></i>
                                                            </span>
                                                            <div id="departureDateIsNotEmpty" class="d-none">
                                                                <span class="text-dark fs-6 fw-bold"><span
                                                                        id="departure_mounth"></span> <span
                                                                        id="departure_day"></span></span><br>
                                                                <span class="text-muted" id="departure_year"></span>
                                                            </div>
                                                            <div id="departureDateEmpty">
                                                                <span
                                                                    class="fs-6 fw-normal text-muted">Depart</span><br>
                                                                <span class="fs-6 fw-normal text-muted">Date</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="returnDate"
                                                        class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-3 cursor"
                                                        data-bs-toggle="modal" data-bs-target="#arrival_date-modal"
                                                        style="cursor: pointer;">

                                                        <input type="hidden" id="arrivalDateInput"
                                                            name="arrival_date">
                                                        <div
                                                            class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2">
                                                            <span class="ps-1 pe-3 fs-4"><i
                                                                    class="ri-calendar-todo-fill"></i></span>
                                                            <div id="arrivalDateIsNotEmpty" class="d-none">
                                                                <span class="text-dark fs-6 fw-bold"><span
                                                                        id="arrival_month"></span> <span
                                                                        id="arrival_day"></span></span><br>
                                                                <span class="text-muted" id="arrival_year"></span>
                                                            </div>
                                                            <div id="arrivalDateEmpty">
                                                                <span
                                                                    class="text-muted fs-6 fw-normal">Return</span><br>
                                                                <span class="text-muted fs-6 fw-normal"
                                                                    id="arrival_year">Date</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="travel"
                                                        class="col-md-3 col-sm-6 col-12 position-relative"
                                                        style="cursor: pointer;">
                                                        <input type="hidden" id="personInput" name="seats">
                                                        <div class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center h-100 py-md-0 py-2"
                                                            onclick="selectPerson()">
                                                            <span class="ps-1 pe-3 fs-4"><i
                                                                    class="ri-user-fill"></i></span>
                                                            <div class="">
                                                                <span class="text-dark fs-6 fw-bold"
                                                                    id="person">0</span><br>
                                                                <span class="text-muted">Travel</span>
                                                            </div>
                                                        </div>
                                                        <div id="PersonBox"
                                                            class="card card-body position-absolute end-0 me-3 mt-2 d-none">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <div class="me-auto pe-4">Adult</div>
                                                                <div class="d-flex">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        onclick="AdultPerson('minus')">-</button>
                                                                    <input type="text" value="1"
                                                                        id="travelPerson"
                                                                        class="travelPerson text-center">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        onclick="AdultPerson('plus')">+</button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <div class="me-auto pe-4">Senior</div>
                                                                <div class="d-flex">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        id="SeniorPersonMinus"
                                                                        onclick="SeniorPerson('minus', 'SeniorPersonMinus')">-</button>
                                                                    <input type="text" value="0"
                                                                        id="travelSenior"
                                                                        class="travelSenior text-center">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        id="SeniorPersonPlus"
                                                                        onclick="SeniorPerson('plus', 'SeniorPersonPlus')">+</button>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-auto pe-4">Child</div>
                                                                <div class="d-flex">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        id="ChildPersonMinus"
                                                                        onclick="ChildPerson('minus', 'ChildPersonMinus')">-</button>
                                                                    <input type="text" value="0"
                                                                        id="travelChild"
                                                                        class="travelChild text-center">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-light fs-6 fw-blod"
                                                                        id="ChildPersonPlus"
                                                                        onclick="ChildPerson('plus', 'ChildPersonPlus')">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="searchFilterBtn"
                                                        class="col-md-3 col-sm-6 col-12 mt-md-0 mt-3">
                                                        <button id="searchFlightBtn" type="submit"
                                                            class="btn btn-warning h-100 fs-6 fw-bold text-light w-100">Search
                                                            Flights</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="multipleField" class="col-md-12 pt-2 d-none">
                                        <div class="row">
                                            <div class="col-xl-5 col-sm-12 d-sm-flex">
                                                <div class="input-group position-relative">
                                                    <span class="input-group-text ms-1 bg-light ps-3 pe-0"
                                                        id="basic-addon1">
                                                        <i class="ri-map-pin-fill fs-4 text-secondary"></i>
                                                    </span>
                                                    <input type="text" id="departureSecondInputField"
                                                        name="departure_location[]"
                                                        class="form-control py-xl-2 py-4 rounded-end border-start-0 text-muted fs-5 fw-semibold focus-ring z-0 bg-light"
                                                        placeholder="From Where?"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)">
                                                    {{-- <input type="hidden"  name="_id[]"
                                                    id="second_departure_location_id"> --}}
                                                    <ul id="secondFromLocation"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
                                                </div>
                                                <div class="input-group mt-sm-0 mt-1 position-relative">
                                                    <span class="input-group-text ms-1 bg-light ps-4 pe-0"
                                                        id="basic-addon1">
                                                        <i class="ri-map-pin-fill fs-4 text-secondary "></i>
                                                    </span>
                                                    <input type="text" id="arrivalSecondInputField"
                                                        name="arrival_location[]"
                                                        class="form-control py-xl-2 py-4 rounded-end focus-ring border-start-0 text-muted fs-5 fw-semibold bg-light"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)"
                                                        placeholder="To Where?">
                                                    {{-- <input type="text" id="second_arrival_location_id" name="arrival_location_id[]"> --}}
                                                    <ul id="secondWhereLocation"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-sm-12 ps-xl-0 ps-3 mt-xl-0 mt-3 ">
                                                <div class="row">
                                                    <div id="formDate" class="col-md-4 col-sm-6 col-12"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#departure_date_second-modal"
                                                        style="cursor: pointer;">
                                                        <div id="departureDateSecondIsEmpty"
                                                            class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100">
                                                            <span class="ps-1 pe-3 fs-4"><i
                                                                    class="ri-calendar-todo-fill"></i></span>
                                                            <div class="">
                                                                <span
                                                                    class="text-muted fs-6 fw-normal">Depart</span><br>
                                                                <span class="text-muted fs-6 fw-normal"
                                                                    id="departureDateSecondYear">Date</span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="departureDateSecondInput"
                                                            name="departure_date[]">
                                                        <div id="departureDateSecondIsNotEmpty"
                                                            class="d-none bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100">
                                                            <span class="ps-1 pe-3 fs-4"><i
                                                                    class="ri-calendar-todo-fill"></i></span>
                                                            <div class="">
                                                                <span class="text-dark fs-6 fw-bold"><span
                                                                        id="departureDateSecondMonth">Oct</span> <span
                                                                        id="departureDateSecondDay">20</span></span><br>
                                                                <span class="text-muted">2023</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="secondSearchFlightBtn" class="col-md-12 pt-3 d-none">
                                        <button id="searchFlightBtn" type="submit"
                                            class="btn btn-warning h-100 fs-6 fw-bold text-light w-100">Search
                                            Flights</button>
                                    </div>

                                    <div class="col-md-12 py-3 px-3">
                                        <div class="row">
                                            <div class="col-md-9 d-lg-flex">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="return"
                                                        value="option1">
                                                    <label class="form-check-label text-muted" for="return">Return
                                                        to or from another city/airport?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="direct_flight" value="option1">
                                                    <label class="form-check-label text-muted"
                                                        for="direct_flight">Direct Flights</label>
                                                </div>
                                            </div>
                                            <div id="actionBtn" class="col-md-3 text-lg-end d-none mt-lg-0 mt-2">
                                                <button id="add_flight" type="button"
                                                    class="text-capitalize border-0 bg-transparent text-primary me-3 fs-6 fw-semibold">
                                                    <i class="ri-add-line"></i> add flight</button>
                                                <button id="allClearBtn" type="button"
                                                    class="text-capitalize border-0 bg-transparent text-danger fs-6 fw-semibold"
                                                    onclick="allClear()">
                                                    <i class="ri-delete-bin-6-line"></i> all clear</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let formLocation = $("#formLocation"),
        whereLocation = $("#whereLocation"),
        secondFromLocation = $("#secondFromLocation"),
        secondWhereLocation = $("#secondWhereLocation");


    var departureDateValue,
        departureMounthValue,
        departureDayValue,
        departureYearValue,
        arrivalDateValue,
        arrivalMounthValue,
        arrivalDayValue,
        arrivalYearValue;


    let flightForm = document.getElementById("flightForm"),
        departure_mounth = document.getElementById("departure_mounth"),
        departure_day = document.getElementById("departure_day"),
        departure_year = document.getElementById("departure_year"),
        arrival_month = document.getElementById("arrival_month"),
        arrival_day = document.getElementById("arrival_day"),
        arrival_year = document.getElementById("arrival_year"),
        departureInputField = document.getElementById("departureInputField"),
        departureDateInput = document.getElementById("departureDateInput"),
        departureDateIsNotEmpty = document.getElementById("departureDateIsNotEmpty"),
        departureDateEmpty = document.getElementById("departureDateEmpty"),
        arrialInputField = document.getElementById("arrialInputField"),
        arrivalDateInput = document.getElementById("arrivalDateInput"),
        arrivalDateIsNotEmpty = document.getElementById("arrivalDateIsNotEmpty"),
        arrivalDateEmpty = document.getElementById("arrivalDateEmpty");

    $(document).ready(function() {
        // departureInputField or arrialInputField start
        $("#departureInputField").on("keyup", async function() {
            let departureInputFieldValue = $(this).val();
            let response = await axios.post('/get-location', {
                departureLocation: departureInputFieldValue
            });
            if (response.data !== "not found") {
                formLocation.empty();
                formLocation.removeClass("d-none");
                if (response.data.length > 0) {
                    response.data.forEach((item, index) => {
                        let row = `<li class="list-unstyled border border-0 px-1 py-2" onclick="selectDepartureLocation(${item.id})" style="cursor: pointer;">
                                <i class="ri-plane-line"></i> <span>${item.name}</span> (<span>${item.short_name}</span>)
                                <span>${item.location}</span>
                            </li>`;
                        formLocation.append(row);
                    });
                } else {
                    formLocation.addClass("d-none");
                }
            } else {
                formLocation.empty();
                formLocation.removeClass("d-none");
                let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;">
                                <span class="">${response.data}</span>
                            </li>`;
                formLocation.append(row);
            }
        });
        $("#arrialInputField").on("keyup", async function() {
            let arrialInputFieldValue = $(this).val();
            let response = await axios.post("/get-location", {
                arrivelLoaction: arrialInputFieldValue
            });
            if (response.data !== "not found") {
                whereLocation.empty();
                whereLocation.removeClass("d-none");
                if (response.data.length > 0) {
                    response.data.forEach((item, index) => {
                        let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;" onclick="selectArrivalLocation(${item.id})">
                                <i class="ri-plane-line"></i> <span>${item.name}</span> (<span>${item.short_name}</span>)
                                <span>${item.location}</span>
                            </li>`;
                        whereLocation.append(row);
                    });
                } else {
                    whereLocation.addClass("d-none");
                }
            } else {
                whereLocation.empty();
                whereLocation.removeClass("d-none");
                let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;">
                                <span class="">${response.data}</span>
                            </li>`;
                whereLocation.append(row);
            }
        });
        // departureInputField or arrialInputField end

        // departureSecondInputField or arrialSecondInputField start
        $("#departureSecondInputField").on("keyup", async function() {
            let departureSecondInputFieldValue = $(this).val();
            let response = await axios.post('/get-location', {
                departureLocation: departureSecondInputFieldValue
            });
            if (response.data !== "not found") {
                secondFromLocation.empty();
                secondFromLocation.removeClass("d-none");
                if (response.data.length > 0) {
                    response.data.forEach((item, index) => {
                        let row = `<li class="list-unstyled border border-0 px-1 py-2" onclick="selectSecondDepartureLocation(${item.id})" style="cursor: pointer;">
                                <i class="ri-plane-line"></i> <span>${item.name}</span> (<span>${item.short_name}</span>)
                                <span>${item.location}</span>
                            </li>`;
                        secondFromLocation.append(row);
                    });
                } else {
                    secondFromLocation.addClass("d-none");
                }
            } else {
                secondFromLocation.empty();
                secondFromLocation.removeClass("d-none");
                let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;">
                                <span class="">${response.data}</span>
                            </li>`;
                secondFromLocation.append(row);
            }
        });
        $("#arrivalSecondInputField").on("keyup", async function() {
            let arrivalSecondInputFieldValue = $(this).val();
            let response = await axios.post("/get-location", {
                arrivelLoaction: arrivalSecondInputFieldValue
            });
            if (response.data !== "not found") {
                secondWhereLocation.empty();
                secondWhereLocation.removeClass("d-none");
                if (response.data.length > 0) {
                    response.data.forEach((item, index) => {
                        let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;" onclick="selectSecondArrivalLocation(${item.id})">
                                <i class="ri-plane-line"></i> <span>${item.name}</span> (<span>${item.short_name}</span>)
                                <span>${item.location}</span>
                            </li>`;
                        secondWhereLocation.append(row);
                    });
                } else {
                    secondWhereLocation.addClass("d-none");
                }
            } else {
                secondWhereLocation.empty();
                secondWhereLocation.removeClass("d-none");
                let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;">
                                <span class="">${response.data}</span>
                            </li>`;
                secondWhereLocation.append(row);
            }
        });
        // departureSecondInputField or arrialSecondInputField end
    });

    // departure_location_id or arrival_location_id start
    let departure_location_id = document.getElementById("departure_location_id");
    let arrival_location_id = document.getElementById("arrival_location_id");
    let departureId,
        arrivalId,
        departureName,
        arrivalName;

    async function selectDepartureLocation(id) {
        let response = await axios.get("/get-location-by/" + id);
        departure_location_id.value = response.data.id;
        departureId = response.data.id;
        departureInputField.value = response.data.name;
        departureName = response.data.name;
        formLocation.addClass("d-none");
    }
    async function selectArrivalLocation(id) {
        let response = await axios.get("/get-location-by/" + id);
        arrival_location_id.value = response.data.id;
        arrivalId = response.data.id
        arrialInputField.value = response.data.name;
        arrivalName = response.data.name;
        whereLocation.addClass("d-none");
    }

    let change = false;
    async function changeLocation() {
        if (change === false) {
            departure_location_id.value = arrivalId;
            departureInputField.value = arrivalName;
            arrival_location_id.value = departureId;
            arrialInputField.value = departureName;
            change = true;
        } else {
            departureInputField.value = departureName;
            departure_location_id.value = departureId;
            arrival_location_id.value = arrivalId;
            arrialInputField.value = arrivalName;
            change = false;
        }
    }
    // departure_location_id or arrival_location_id end
    
    // departure_second_location_id or arrival_second_location_id start
    let departureSecondInputField = document.getElementById("departureSecondInputField"),
    arrivalSecondInputField = document.getElementById("arrivalSecondInputField");
    let secondDepartureId,
        secondArrivalId,
        secondDepartureName,
        secondArrivalName;

    async function selectSecondDepartureLocation(id) {
        let response = await axios.get("/get-location-by/" + id);
        secondDepartureId = response.data.id;
        departureSecondInputField.value = response.data.name;
        secondDepartureName = response.data.name;
        secondFromLocation.addClass("d-none");
    }
    async function selectSecondArrivalLocation(id) {
        let response = await axios.get("/get-location-by/" + id);
        secondArrivalId = response.data.id
        arrivalSecondInputField.value = response.data.name;
        secondArrivalName = response.data.name;
        secondWhereLocation.addClass("d-none");
    }
    // departure_second_location_id or arrival_second_location_id end




    flightForm.reset();

    function departureDate(event) {

        var selectedDate = new Date(event.target.value);
        var options = {
            month: 'short'
        };


        var monthName = selectedDate.toLocaleString(undefined, options);
        var day = selectedDate.getDate();
        var year = selectedDate.getFullYear();

        departureDateValue = event.target.value;
        departureMounthValue = monthName;
        departureDayValue = day;
        departureYearValue = year;

    }

    function departureDateSet() {
        let departureDateForm = document.getElementById("departureDateForm");
        let modalClose = document.getElementById("modal-close");
        departureDateEmpty.classList.add("d-none");
        departureDateIsNotEmpty.classList.remove("d-none");

        departureDateInput.value = departureDateValue;
        departure_mounth.innerText = departureMounthValue;
        departure_day.innerText = departureDayValue;
        departure_year.innerText = departureYearValue;
        departureDateForm.reset();
        modalClose.click();
    }

    function closeDepartrueDate() {
        let departureDateForm = document.getElementById("departureDateForm");
        let modalClose = document.getElementById("modal-close");
        departureDateForm.reset();
        modalClose.click();
    }


    //arrival
    function arrivalDate(event) {
        var selectedDate = new Date(event.target.value);
        var options = {
            month: 'short'
        };


        var monthName = selectedDate.toLocaleString(undefined, options);
        var day = selectedDate.getDate();
        var year = selectedDate.getFullYear();

        arrivalDateValue = event.target.value;
        arrivalMounthValue = monthName;
        arrivalDayValue = day;
        arrivalYearValue = year;
    }

    function arrivalDateSet() {
        let arrivalDateForm = document.getElementById("arrivalDateForm");
        let modalClose = document.getElementById("arrival-modal-close");
        arrivalDateEmpty.classList.add("d-none");
        arrivalDateIsNotEmpty.classList.remove("d-none");

        arrivalDateInput.value = arrivalDateValue;
        arrival_month.innerText = arrivalMounthValue;
        arrival_day.innerText = arrivalDayValue;
        arrival_year.innerText = arrivalYearValue;

        arrivalDateForm.reset();
        modalClose.click();
    }

    function closeArrivalDate() {
        let arrivalDateForm = document.getElementById("arrivalDateForm");
        let modalClose = document.getElementById("arrival-modal-close");
        arrivalDateForm.reset();
        modalClose.click();
    }


    // get travel person
    let person = document.getElementById("person"),
        personInput = document.getElementById("personInput"),
        travelPerson = document.getElementById("travelPerson"),
        travelSenior = document.getElementById("travelSenior"),
        travelChild = document.getElementById("travelChild"),
        PersonBox = document.getElementById("PersonBox");

    function getTravelPerson() {
        personInput.value = Number(travelPerson.value) + Number(travelSenior.value) + Number(travelChild.value);
        person.innerText = Number(travelPerson.value) + Number(travelSenior.value) + Number(travelChild.value);
    }
    getTravelPerson()

    function AdultPerson(AdultPersonType) {
        if (AdultPersonType === 'minus') {
            if (travelPerson.value > 1) {
                travelPerson.value -= 1;
                getTravelPerson()
            }
        } else {
            travelPerson.value = Number(travelPerson.value) + 1;
            getTravelPerson()
        }
    }

    function SeniorPerson(SeniorPersonType, SeniorPersonId) {
        let SeniorPerson = document.getElementById(`${SeniorPersonId}`);

        if (SeniorPersonType === 'minus') {
            if (travelSenior.value > 0) {
                travelSenior.value -= 1;
                getTravelPerson()
            }
            if (travelSenior.value < 0) {
                SeniorPerson.classList.add("disabled");
            }
        } else {
            travelSenior.value = Number(travelSenior.value) + 1;
            getTravelPerson()
        }
    }

    function ChildPerson(SeniorPersonType, ChlidPersonId) {
        let PersonChlid = document.getElementById(`${ChlidPersonId}`);

        if (SeniorPersonType === 'minus') {
            if (travelChild.value > 0) {
                travelChild.value -= 1;
                getTravelPerson()
            }
            if (travelChild.value < 0) {
                PersonChlid.classList.add("disabled")
            }
        } else {
            travelChild.value = Number(travelChild.value) + 1;
            getTravelPerson()
        }
    }

    function selectPerson() {
        PersonBox.classList.toggle("d-none");
    }



    let departureDateSecondInput = document.getElementById("departureDateSecondInput"),
        departureDateSecondIsNotEmpty = document.getElementById("departureDateSecondIsNotEmpty"),
        departureDateSecondIsEmpty = document.getElementById("departureDateSecondIsEmpty"),
        departureDateSecondMonth = document.getElementById("departureDateSecondMonth"),
        departureDateSecondDay = document.getElementById("departureDateSecondDay"),
        departureDateSecondYear = document.getElementById("departureDateSecondYear");

    let monthValue,
        dayValue,
        yearValue,
        dateValue;




    function departureSecondDate(event) {
        var selectedDate = new Date(event.target.value);
        var options = {
            month: 'short'
        };

        var monthName = selectedDate.toLocaleString(undefined, options);
        var day = selectedDate.getDate();
        var year = selectedDate.getFullYear();

        dateValue = event.target.value;
        monthValue = monthName;
        dayValue = day;
        yearValue = year;
    }


    function departureSecondDateSet() {
        let departSecondModalClose = document.getElementById("departSecondModalClose");
        departureDateSecondIsEmpty.classList.add('d-none');
        departureDateSecondIsNotEmpty.classList.remove('d-none');
        departureDateSecondMonth.innerText = monthValue;
        departureDateSecondDay.innerText = dayValue;
        departureDateSecondYear.innerText = yearValue;
        departureDateSecondInput.value = dateValue;
        departSecondModalClose.click()
    }

    function closeDepartrueSecondDate() {
        let departSecondModalClose = document.getElementById("departSecondModalClose");
        departSecondModalClose.click()
    }
</script>
