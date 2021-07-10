<div class="modal fade" id="update-task" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Task Short Description</label>
                                <input type="text" name="text" class="form-control" placeholder="Enter short description" value="Kitchen Clean"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Open</option>
                                    <option>Pending</option>
                                    <option>Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Time(h)</label>
                                <input type="text" name="number" @role(['supervisor', 'janitor', 'client']) disabled @endrole class="form-control" placeholder="Enter rough time" value="2"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Charge(LKR)</label>
                                <input type="text" name="Text" @role(['supervisor', 'janitor', 'client']) disabled @endrole class="form-control" placeholder="Enter Estimated Charge" value="300.00" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="Text" class="form-control" rows="5" placeholder="Description"/>Kitchen Area cleainng:
                                A description how to clean the area and some additional special notes
                                </textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
