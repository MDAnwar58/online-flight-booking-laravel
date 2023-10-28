<div class="col-md-9">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card px-1 py-2">
                <nav>
                    <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1" id="nav-tab" role="tablist">
                        <button class="nav-link active py-2" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
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
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <!-- flight booking list start -->
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card px-4 py-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-3 ps-3">
                                                    <img src="{{ url('assets/frontend/images/airlines.png') }}" class="rounded-circle pt-2" style="width: 100px;" alt="">
                                                    <h6 class="text-secondary text-sm fw-normal">Biman Bangladesh Airlines</h6>
                                                    <span class="text-muted"><small>Price</small></span>
                                                    <h5 class="fs-6 fw-semibold">BDT 2,964</h5>
                                                </div>
                                                <div class="col-md-3 pt-3">
                                                    <span class="text-muted fs-6 fw-semibold">Depart</span><br>
                                                    <div class="fs-6 fw-semibold pt-2">20:00</div>
                                                    <span class="text-muted"><small>Fri, 20 Oct 2023</small></span><br>
                                                    <span class="text-muted">Dhaka (DAC)</span>
                                                </div>
                                                <div class="col-md-3 pt-2 text-center">
                                                    <div class="fs-6 fw-semibold pt-2 text-muted">45 mintes</div>
                                                    <span style="width: 100px; height: 2px; display: inline-block;" class="bg-primary"></span>
                                                    <div class="text-muted fs-6 fw-light mt-2">Non Stop</div>
                                                </div>
                                                <div class="col-md-3 pt-3">
                                                    <span class="text-muted fs-6 fw-semibold">Arrive</span><br>
                                                    <div class="fs-6 fw-semibold pt-2">20:00</div>
                                                    <span class="text-muted"><small>Fri, 20 Oct 2023</small></span><br>
                                                    <span class="text-muted">Chittagong (CGP)</span>
                                                </div>
                                                <div class="col-md-12 text-end">
                                                    <button class="bg-transparent border-0 text-primary me-5 text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" onclick="hrHideOrShow()">
                                                        <span class="view">view</span><span class="hide d-none">Hide</span> flight details
                                                    </button>
                                                    <div class="row flight_details">
                                                        <div class="col-md-12 d-none" id="booking_details_hr"><hr></div>
                                                        <div class="col-md-12">
                                                            <div class="collapse" id="collapseExample">
                                                                <div class="row pb-2">
                                                                    <div class="col-md-12">
                                                                        <nav>
                                                                            <div class="nav nav-tabs fw-semibold fs-6 px-3 pt-1" id="nav-tab" role="tablist">
                                                                                <button class="nav-link active py-2" id="nav-flight-details-tab" data-bs-toggle="tab" data-bs-target="#nav-flight-details" type="button" role="tab" aria-controls="nav-flight-details" aria-selected="true">Flights Details
                                                                                </button>
                                                                                <button class="nav-link" id="nav-summary-tab" data-bs-toggle="tab" data-bs-target="#nav-summary" type="button" role="tab" aria-controls="nav-summary" aria-selected="false">
                                                                                    Summary
                                                                                </button>
                                                                                <!-- <button class="nav-link" id="nav-rules-tab" data-bs-toggle="tab" data-bs-target="#nav-rules" type="button" role="tab" aria-controls="nav-rules" aria-selected="false">
                                                                                    Rules
                                                                                </button> -->
                                                                            </div>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-content mt-3" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active" id="nav-flight-details" role="tabpanel" aria-labelledby="nav-flight-details-tab" tabindex="0">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="card">
                                                                                    <h5 class="card-header text-center">Dhaka to Cox's Bazar</h5>
                                                                                    <div class="card-body text-start">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 d-flex">
                                                                                                <img src="{{ url('assets/frontend/images/airlines.png') }}" class="rounded-circle pt-2" style="width: 50px; height: 55px;" alt="">
                                                                                                <div class="pt-3 ps-2">
                                                                                                    <h5 class="fs-6 fw-semibold">Novo Air <span class="fs-6 fw-normal">VQ | 988</span></h5>
                                                                                                    <div class="h6 fs-6 fw-normal text-muted">Aircraft : <span>ATR725</span></div>
                                                                                                    <div class="h6 fw-normal text-muted" style="font-size: 13px;">Available seats: <span>9</span></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12 pt-3 pb-2">
                                                                                                <div class="row align-items-center">
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="h6 fw-semibold">
                                                                                                            17:20
                                                                                                        </div>
                                                                                                        <div class="fw-semibold text-dark" style="font-size: 11px;">
                                                                                                        Tue, 24 Oct 2023</div>
                                                                                                        <div class="fw-semibold" style="font-size: 13px;">
                                                                                                            (DAC)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 text-center">
                                                                                                        <div class="h6 fw-semibold text-muted" style="font-size: 12px; margin-bottom: -13px;">
                                                                                                            45 minutes
                                                                                                        </div>
                                                                                                        <span style="width: 80px; height: 2px; display: inline-block;" class=" bg-primary"></span>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 text-end">
                                                                                                        <div class="h6 fw-semibold">
                                                                                                            17:20
                                                                                                        </div>
                                                                                                        <div class="fw-semibold text-dark" style="font-size: 11px;">
                                                                                                        Tue, 24 Oct 2023</div>
                                                                                                        <div class="fw-semibold" style="font-size: 13px;">
                                                                                                            (CCG)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">
                                                                                                        Terminal</div>
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">Hazrat Shahjalal International Airport Dhaka, Bangladesh</div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4"></div>

                                                                                                    <div class="col-md-4 text-end">
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">
                                                                                                        Terminal</div>
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">Hazrat Shahjalal International Airport Dhaka, Bangladesh</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="card">
                                                                                    <h5 class="card-header text-center">Cox's Bazar to Dhaka</h5>
                                                                                    <div class="card-body text-start">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 d-flex">
                                                                                                <img src="{{ url('assets/frontend/images/airlines.png') }}" class="rounded-circle pt-2" style="width: 50px; height: 55px;" alt="">
                                                                                                <div class="pt-3 ps-2">
                                                                                                    <h5 class="fs-6 fw-semibold">Novo Air <span class="fs-6 fw-normal">VQ | 988</span></h5>
                                                                                                    <div class="h6 fs-6 fw-normal text-muted">Aircraft : <span>ATR725</span></div>
                                                                                                    <div class="h6 fw-normal text-muted" style="font-size: 13px;">Available seats: <span>9</span></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12 pt-3 pb-2">
                                                                                                <div class="row align-items-center">
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="h6 fw-semibold">
                                                                                                            17:20
                                                                                                        </div>
                                                                                                        <div class="fw-semibold text-dark" style="font-size: 11px;">
                                                                                                        Tue, 24 Oct 2023</div>
                                                                                                        <div class="fw-semibold" style="font-size: 13px;">
                                                                                                            (DAC)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 text-center">
                                                                                                        <div class="h6 fw-semibold text-muted" style="font-size: 12px; margin-bottom: -13px;">
                                                                                                            45 minutes
                                                                                                        </div>
                                                                                                        <span style="width: 80px; height: 2px; display: inline-block;" class=" bg-primary"></span>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 text-end">
                                                                                                        <div class="h6 fw-semibold">
                                                                                                            17:20
                                                                                                        </div>
                                                                                                        <div class="fw-semibold text-dark" style="font-size: 11px;">
                                                                                                        Tue, 24 Oct 2023</div>
                                                                                                        <div class="fw-semibold" style="font-size: 13px;">
                                                                                                            (CCG)
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">
                                                                                                        Terminal</div>
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">Hazrat Shahjalal International Airport Dhaka, Bangladesh</div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4"></div>

                                                                                                    <div class="col-md-4 text-end">
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">
                                                                                                        Terminal</div>
                                                                                                        <div class="fw-normal text-muted" style="font-size: 11px;">Hazrat Shahjalal International Airport Dhaka, Bangladesh</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-summary" role="tabpanel" aria-labelledby="nav-summary-tab" tabindex="0">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-12 px-4">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-bordered table-hover">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="text-secondary">Summary</th>
                                                                                                <th class="text-secondary">Price</th>
                                                                                                <th class="text-secondary">Taxes Fees</th>
                                                                                                <th class="text-secondary">Per Passenger</th>
                                                                                                <th class="text-secondary">Total</th>
                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Adult</td>
                                                                                                <td>BDT 5,108</td>
                                                                                                <td>BDT 1,972</td>
                                                                                                <td>BDT (7,080 x 1)</td>
                                                                                                <td>BDT 7,080</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                        <tfooter>
                                                                                            <tr>
                                                                                                <th class="text-secondary">Total (1 Traveler)</th>
                                                                                                <th class="text-secondary"></th>
                                                                                                <th class="text-secondary"></th>
                                                                                                <th class="text-secondary"></th>
                                                                                                <th>BDT 7,080</th>
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
                    </div>
                </div>
            </div>
            <!-- flight booking list end -->
        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>

    </div>


</div>

<script>
    let booking_details_hr = document.getElementById('booking_details_hr');
    let view = document.querySelector(".view");
    let hide = document.querySelector(".hide");

    function hrHideOrShow()
    {
        booking_details_hr.classList.toggle("d-none");
        view.classList.toggle("d-none");
        hide.classList.toggle("d-none");
    }
</script>