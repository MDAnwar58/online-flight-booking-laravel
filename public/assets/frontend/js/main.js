let round_trip = document.getElementById("round_trip");
let one_way = document.getElementById("one_way");
let multi_city = document.getElementById("multi_city");
let formDate = document.getElementById("formDate");
let returnDate = document.getElementById("returnDate");
let travel = document.getElementById("travel");
let searchFilterBtn = document.getElementById("searchFilterBtn");
let convertBox = document.getElementById("convertBox");
let convertBtn = document.getElementById("convertBtn");
let multipleField = document.getElementById("multipleField");
let actionBtn = document.getElementById("actionBtn");
let allClearBtn = document.getElementById("allClearBtn");
let searchFlightBtn = document.getElementById("searchFlightBtn");
let secondSearchFlightBtn = document.getElementById("secondSearchFlightBtn");

function getFlightType() {
	round_trip.checked = true;
}
getFlightType()

function roundTrip() {
	if (round_trip.checked === true) {
		convertBox.classList.add("position-relative");
		convertBtn.classList.remove("d-none");
		formDate.classList.add("col-md-3");
		formDate.classList.remove("col-md-4");
		travel.classList.add("col-md-3");
		travel.classList.remove("col-md-4", "mb-md-0", "mb-3");
		searchFilterBtn.classList.add("col-md-3");
		searchFilterBtn.classList.remove("col-md-4");
		returnDate.classList.remove("d-none");
		multipleField.classList.add("d-none");
		actionBtn.classList.add("d-none");
		actionBtn.classList.remove("d-md-flex", "d-block");
		searchFlightBtn.classList.remove("d-lg-block", "d-none");
		secondSearchFlightBtn.classList.add("d-none");
		secondSearchFlightBtn.classList.remove("d-lg-none");
	}
}

round_trip.addEventListener("click", roundTrip);


function oneWay() {
	if (one_way.checked === true) {
		convertBox.classList.add("position-relative");
		convertBtn.classList.remove("d-none");
		formDate.classList.remove("col-md-3");
		formDate.classList.add("col-md-4");
		travel.classList.remove("col-md-3");
		travel.classList.add("col-md-4", "mb-md-0", "mb-3");
		searchFilterBtn.classList.remove("col-md-3");
		searchFilterBtn.classList.add("col-md-4");
		returnDate.classList.add("d-none");
		multipleField.classList.add("d-none");
		actionBtn.classList.add("d-none");
		actionBtn.classList.remove("d-md-flex d-block");
		searchFlightBtn.classList.remove("d-lg-block", "d-none");
		secondSearchFlightBtn.classList.add("d-none");
		secondSearchFlightBtn.classList.remove("d-lg-none");
	}
}

one_way.addEventListener("click", oneWay);


function multiCity() {
	if (multi_city.checked === true) {
		convertBox.classList.remove("position-relative");
		convertBtn.classList.add("d-none");
		formDate.classList.remove("col-md-3");
		formDate.classList.add("col-md-4");
		travel.classList.remove("col-md-3");
		travel.classList.add("col-md-4", "mb-md-0", "mb-3");
		searchFilterBtn.classList.remove("col-md-3");
		searchFilterBtn.classList.add("col-md-4");
		returnDate.classList.add("d-none");
		multipleField.classList.remove("d-none");
		actionBtn.classList.remove("d-none");
		actionBtn.classList.add("text-center");
		searchFlightBtn.classList.add("d-lg-block", "d-none");
		secondSearchFlightBtn.classList.remove("d-none");
		secondSearchFlightBtn.classList.add("d-lg-none");
	}
}

multi_city.addEventListener("click", multiCity);

let multipleFieldShow = $("#multipleField");
let addFlight = $("#add_flight");
let id = 0;

$(document).ready(function () {
	$(addFlight).on("click", function () {
		id++;
		if (id < 4) {
			let row = `<div class="row mt-2 formId z-n1" id="ids${id}">
	<div class="col-xl-5 col-sm-12 d-sm-flex">
	<div class="input-group ">
	<span class="input-group-text ms-1 bg-light ps-3 pe-0" id="basic-addon1">
	<i class="ri-map-pin-fill fs-4 text-secondary"></i>
	</span>
	<input type="text" name="departure_location[]" onkeyup="searchDepartureLocation(event)"
                                                        id="departureInputField${id}"
                                                        class="form-control py-xl-2 py-4 rounded-end border-start-0 text-muted fs-5 fw-semibold focus-ring z-0 bg-light"
                                                        placeholder="From Where?"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)">
                                                    <ul id="formLocation${id}"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
												</div>
												<div class="input-group mt-sm-0 mt-1">
												<span class="input-group-text ms-1 bg-light ps-4 pe-0" id="basic-addon1">
												<i class="ri-map-pin-fill fs-4 text-secondary "></i>
												</span>
												<input type="search" name="arrival_location[]" onkeyup="searchArrivalLocation(event)"
                                                        id="arrivalInputField${id}"
                                                        class="form-control py-xl-2 py-4 rounded-end focus-ring border-start-0 text-muted fs-5 fw-semibold bg-light"
                                                        style="--bs-focus-ring-color: rgba(var(--bs-seconda-rgb), 0)"
                                                        placeholder="To Where?">
                                                    <ul id="whereLocation${id}"
                                                        class="card card-body position-absolute rounded left-0 d-none z-3"
                                                        style="margin: 4.5rem 0 0 0;">

                                                    </ul>
	</div>
	</div>
	<div class="col-xl-7 col-sm-12 ps-xl-0 ps-3 mt-xl-0 mt-3">
	<div class="row">
	<form id="formDate${id}"
                                                        class="col-md-4 col-sm-6 col-12 mb-md-0 mb-3 cursor"
                                                        data-bs-toggle="modal" onclick="openDatePicker(${id})" data-bs-target="#departure_date_${id}-modal"
                                                        style="cursor: pointer;">
                                                        <div
                                                            class="bg-light border border-1 border-secondary rounded px-2 d-flex align-items-center py-2 w-100 trigger">
                                                            <span class="ps-1 pe-3 fs-4">
                                                                <i class="ri-calendar-todo-fill"></i>
                                                            </span>
                                                            <div id="departureDateIsNotEmpty${id}" class="d-none">
                                                                <span class="text-dark fs-6 fw-bold"><span
                                                                        id="departure_mounth${id}"></span> <span
                                                                        id="departure_day${id}"></span></span><br>
                                                                <span class="text-muted" id="departure_year${id}"></span>
                                                            </div>
															<input type="hidden" id="departureDateInput${id}"
																name="departure_date[]">
                                                            <div id="departureDateEmpty${id}">
                                                                <span
                                                                    class="fs-6 fw-normal text-muted">Depart</span><br>
                                                                <span class="fs-6 fw-normal text-muted">Date</span>
                                                            </div>
                                                        </div>
                                                    </form>
	<div onclick="formRemove('ids${id}')" class="col-md-4 col-sm-6 col-12 d-flex align-items-center">
	<button type="button" class="text-capitalize border-0 bg-transparent text-danger fs-6 fw-semibold">
	<i class="ri-delete-bin-6-line"></i> clear</button>
	</div>
	</div>
	</div>
	</div>`;
			multipleFieldShow.append(row);

		}
	});
});

async function searchDepartureLocation(event) {
	let formLocation = $("#formLocation" + id);
	let departureInputFieldValue = event.target.value;
	let response = await axios.post('/get-location', {
		departureLocation: departureInputFieldValue
	});
	if (response.data !== "not found") {
		formLocation.empty();
		formLocation.removeClass("d-none");
		if (response.data.length > 0) {
			response.data.forEach((item, index) => {
				let row = `<li class="list-unstyled border border-0 px-1 py-2" onclick="selectSameDepartureLocation(${item.id})" style="cursor: pointer;">
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
}
async function selectSameDepartureLocation(departureId) {
	let formLocation = $("#formLocation" + id);
	let departureInputField = document.getElementById(`departureInputField${id}`);
	let response = await axios.get("/get-location-by/" + departureId);
	departureInputField.value = response.data.name;
	formLocation.addClass("d-none");
}

async function searchArrivalLocation(event) {
	let whereLocation = $("#whereLocation" + id);
	let arrialInputFieldValue = event.target.value;
	let response = await axios.post("/get-location", {
		arrivelLoaction: arrialInputFieldValue
	});
	if (response.data !== "not found") {
		whereLocation.empty();
		whereLocation.removeClass("d-none");
		if (response.data.length > 0) {
			response.data.forEach((item, index) => {
				let row = `<li class="list-unstyled border border-0 px-1 py-2" style="cursor: pointer;" onclick="selectSameArrivalLocation(${item.id})">
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
}
async function selectSameArrivalLocation(arrivalId) {
	let whereLocation = $("#whereLocation" + id);
	let response = await axios.get("/get-location-by/" + arrivalId);
	document.getElementById('arrivalInputField' + id).value = response.data.name;
	whereLocation.addClass("d-none");
}

function openDatePicker(datePickerId)
{
	alert(datePickerId)
}

function formRemove(formId) {
	if (formId === "ids1") {
		$("#" + formId).remove();
		id -= 1;
	} else if (formId === "ids2") {
		$("#" + formId).remove();
		id -= 1;
	} else {
		$("#" + formId).remove();
		id -= 1;
	}
	
console.log(id);
}

function allClear() {
	let formId = $(".formId");
	formId.remove();
	id = 0;
}

let departureDate1,
	departDay1,
	departMonthName1,
	departYear1;

function departureSameDate(event) {
	var selectedDate = new Date(event.target.value);
	var options = {
		month: 'short'
	};

	departureDate1 = event.target.value;
	var monthName = selectedDate.toLocaleString(undefined, options);
	var day = selectedDate.getDate();
	var year = selectedDate.getFullYear();
	departDay1 = day;
	departMonthName1 = monthName;
	departYear1 = year;
}

function closeDepartrueSameDate() {
	let departureDateForm1 = document.getElementById('departureDateForm' + id);
	let formDate1 = document.getElementById('formDate' + id);
	departureDateForm1.reset();
	formDate1.reset();
}

function departureDateSameSet() {
	let departureDateInput = document.getElementById(`departureDateInput${id}`),
		departureDateIsNotEmpty = document.getElementById(`departureDateIsNotEmpty${id}`),
		departure_mounth = document.getElementById(`departure_mounth${id}`),
		departure_day = document.getElementById(`departure_day${id}`),
		departure_year = document.getElementById(`departure_year${id}`),
		departureDateEmpty = document.getElementById(`departureDateEmpty${id}`),
		depart_1_ModalClose = document.getElementById('depart_1_ModalClose');

	departureDateInput.value = departureDate1;
	departureDateEmpty.classList.add("d-none");
	departureDateIsNotEmpty.classList.remove("d-none");
	depart_1_ModalClose.click();
	departure_mounth.innerText = departMonthName1;
	departure_day.innerText = departDay1;
	departure_year.innerText = departYear1;
}



