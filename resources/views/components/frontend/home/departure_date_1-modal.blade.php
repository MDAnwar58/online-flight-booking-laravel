<div class="modal animated zoomIn" id="departure_date_1-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Departure Date</h6>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form id="departureDateForm1" class="col-12 p-3">
                            <input type="date" onchange="departureSameDate(event)" id="departure_date_second"
                                class="form-control">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="depart_1_ModalClose" onclick="closeDepartrueSameDate()" class="btn btn-sm btn-danger"
                    data-bs-dismiss="modal" aria-label="Close">Close</button>
                <button id="save-btn" onclick="departureDateSameSet()" class="btn btn-sm  btn-primary">Set Date</button>
            </div>
        </div>
    </div>
</div>


<script>
    function getDatePickerId(id)
    {
        let depart_1_ModalClose = document.getElementById("depart_1_ModalClose");
        depart_1_ModalClose.setAttribute("data-id", id);
    }
</script>
