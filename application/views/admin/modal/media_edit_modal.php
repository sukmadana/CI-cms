<!-- MODAL EDIT -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Image ID</label>
                    <div class="col-md-10">
                        <input type="text" name="image_id" id="image_id" class="form-control" placeholder="Image ID" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Image Name</label>
                    <div class="col-md-10">
                        <input type="text" name="image_name" id="image_name" class="form-control" placeholder="Image Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Image Alt Text</label>
                    <div class="col-md-10">
                        <input type="text" name="image_alt" id="image_alt" class="form-control" placeholder="Image Alt Text">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
            </div>
        </div>
        </div>
    </div>
</form>
<!--END MODAL EDIT-->