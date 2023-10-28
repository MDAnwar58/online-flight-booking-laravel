<!-- profile info start -->
<div class="col-md-9">
    <div id="info" class="card px-3 pt-3 pb-5">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{ url('assets/frontend/images/user.png') }}" style="width: 150px; height: 150px;" alt="">
                <h5 class="ps-3 fs-5 fw-bold">MD Anwar Sayeed</h5>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-primary px-3 rounded-5"
                    onclick="EditProfile()">Edit</button>
            </div>
            <div class="col-md-12 pt-3 ps-4">
                <h4 class="fs-4 fw-semibold">Personal Details</h4>
                <p class=" text-muted fs-6 fw-normal"><i class="ri-question-line fs-6"></i> As mentioned on your
                    passport or government approved IDs</p>
            </div>
            <div class="col-md-12 mb-4">
                <div class="card px-5 py-4">
                    <h4 class="fs-4 fw-semibold">Basic Info</h4>
                    <div class="row py-2 px-3">
                        <div class="col-md-6 ps-2 pb-2"><span class="fs-6 fw-normal">Name</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">MD Anwar Sayeed</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Birthday</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div class="card px-5 py-4">
                    <h4 class="fs-4 fw-semibold">Contact Info</h4>
                    <div class="row py-2 px-3">
                        <div class="col-md-6 ps-2 pb-2"><span>Email Address</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">anwar.saeed656@gmail.com</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Phone Number</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Address</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>City</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Country</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Frequent Flyer Number</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card px-5 py-4">
                    <h4 class="fs-4 fw-semibold">Passport Info</h4>
                    <div class="row py-2 px-3">
                        <div class="col-md-6 ps-2 pb-2"><span>Passport Number</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">xxxxxx</span></div>
                        <hr>
                        <div class="col-md-6 ps-2 pb-2"><span>Passport Expiry Date</span></div>
                        <div class="col-md-6 pb-2"><span class="text-muted">---</span></div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="infoCardEdit" class="card px-3 pt-3 pb-5 d-none">
        <div class="row">
            <div class="col-md-6">
                <div class=" d-sm-flex align-items-sm-center text-sm-start text-center">
                    <img src="{{ url('assets/frontend/images/user.png') }}" style="width: 150px; height: 150px;" alt="">
                    <div class="px-4">
                        <h5 class="fs-5 fw-bold py-sm-0 py-2">anwar.saeed656@gmail.com</h5>
                        <button type="button" class="btn btn-outline-primary px-4">Upload</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <button type="button" class="btn btn-sm btn-outline-danger px-3 rounded-5"
                    onclick="Cancel()">Cancel</button>
            </div>
            <div class="col-md-12 pt-3 ps-4">
                <h4 class="fs-4 fw-semibold">Personal Details</h4>
                <p class=" text-muted fs-6 fw-normal"><i class="ri-question-line fs-6"></i> As mentioned on your
                    passport or government approved IDs</p>
            </div>
            <div class="col-md-12 mb-4">
                <div class="row py-2 px-3">
                    <div class="col-md-6 ps-2 pb-2">
                        <label for="first_name" class="text-muted">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="first_name" id="first_name" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="last_name" class="text-muted">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="last_name" id="last_name" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="date_of_birth" class="text-muted">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div class="row py-2 px-3">
                    <div class="col-md-12">
                        <h4 class="fs-4 fw-semibold">Contact Info</h4>
                        <p class=" text-muted fs-6 fw-normal"><i class="ri-question-line fs-6"></i> Receive
                            booking confirmation & updates</p>
                    </div>
                    <div class="col-md-6 ps-2 pb-2">
                        <label for="contact_number" class="text-muted">Contact Number <span
                                class="text-danger">*</span></label>
                        <input type="text" name="contact_number" id="contact_number" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="address" class="text-muted">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="city" class="text-muted">City</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="conutry" class="text-muted">Country</label>
                        <input type="text" name="conutry" id="conutry" class="form-control"
                            value="Bangladesh">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row py-2 px-3">
                    <div class="col-md-12">
                        <h4 class="fs-4 fw-semibold">Passport Info</h4>
                        <p class=" text-muted fs-6 fw-normal"><i class="ri-question-line fs-6"></i> Travelers
                            holding passport can fill up the the below form which will save more time during flight
                            booking.</p>
                    </div>

                    <div class="col-md-6 ps-2 pb-2">
                        <label for="passport_number" class="text-muted">Passport Number</label>
                        <input type="text" name="passport_number" id="passport_number" class="form-control">
                    </div>
                    <div class="col-md-6 pb-2">
                        <label for="passport_expiry_Date" class="text-muted">Passport Expiry Date</label>
                        <input type="text" name="passport_expiry_Date" id="passport_expiry_Date"
                            class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-4 pt-3 text-end">
                <button type="button"
                    class="btn btn-primary px-5 py-2 fs-6 fw-semibold text-uppercase">Update</button>
            </div>
        </div>
    </div>
</div>

<script>
    let info = document.getElementById('info');
    let infoCardEdit = document.getElementById('infoCardEdit');

    function EditProfile()
    {
        info.classList.add("d-none");
        infoCardEdit.classList.remove("d-none");
    }

    function Cancel()
    {
        infoCardEdit.classList.add("d-none");
        info.classList.remove("d-none");
    }
</script>
