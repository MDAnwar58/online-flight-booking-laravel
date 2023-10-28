<div class="col-md-9 pb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card px-3 py-5">
                <div class="row justify-content-center">
                    <div class="col-md-5 text-center">
                        <h2 class="fs-3 fw-bold pb-3">Change Password</h2>
                        <input type="password" id="password" class="form-control py-2 px-3" placeholder="Enter New Password">
                        <input type="password" id="password_confirmation" class="form-control py-2 px-3 mt-2" placeholder="Enter Confirmation Password">
                        <button type="button" class="btn btn-outline-primary w-100 mt-2 text-uppercase fw-semibold" style="font-size: 14px;">Password Updated</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let booking_details_hr = document.getElementById('booking_details_hr');

    function hrHideOrShow()
    {
        booking_details_hr.classList.toggle("d-none");
    }
</script>