<div class="modal animated zoomIn" id="departure_date_2-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Departure Date</h6>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form id="departureDateSecondForm" class="col-12 p-3">
                            <input type="date" onchange="departureSecondDate(event)" id="departure_date_second"
                                class="form-control">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="departSecondModalClose" onclick="closeDepartrueSecondDate()" class="btn btn-sm btn-danger"
                    data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button id="save-btn" onclick="departureSecondDateSet()" class="btn btn-sm  btn-primary">Set Date</button>
            </div>
        </div>
    </div>
</div>


<script>

</script>
