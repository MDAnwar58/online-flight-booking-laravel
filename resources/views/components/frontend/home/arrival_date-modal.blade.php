<div class="modal animated zoomIn" id="arrival_date-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Arrival Date</h6>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form id="arrivalDateForm" class="col-12 p-3">
                            <input type="date" onchange="arrivalDate(event)" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="arrival-modal-close" onclick="closeArrivalDate()" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                aria-label="Close">Close</button>
                <button id="save-btn" onclick="arrivalDateSet()" class="btn btn-sm  btn-success">Set Date</button>
            </div>
        </div>
    </div>
</div>