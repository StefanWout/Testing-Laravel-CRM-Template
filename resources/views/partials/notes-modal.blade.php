<!-- Add Notes Modal -->
<div class="modal fade" id="addnotesmodal" tabindex="-1" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnotesmodalTitle">Add Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="notes-box">
                    <div class="notes-content">
                        <form id="addnotesmodalTitle" method="post">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="note-title">
                                        <label class="form-label">Note Title</label>
                                        <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="note-description">
                                        <label class="form-label">Note Description</label>
                                        <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                <button type="button" class="btn btn-success" id="btn-n-add">Add</button>
                <button type="button" class="btn btn-success" id="btn-n-save" style="display: none;">Save</button>
            </div>
        </div>
    </div>
</div>
