<div class="modal fade" id="send-quotation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Quotation to Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client Name</label>
                                <input type="text" name="text" class="form-control" placeholder="Full Name of Client" value=""/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" name="text" class="form-control" placeholder="Clients Company" value=""/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" class="form-control" placeholder="Client Email" value=""/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="Text" class="form-control" value="Quotation for Requested Service"  />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea type="text" name="Text" class="form-control" rows="5" placeholder="Message"/>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="quotation-preview d-flex align-items-center justify-content-center" style="height: 600px; background-color: #eee; border-radius: 10px;">
                                <p class="lead">Preview</p>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Download</button>
                <button type="button" class="btn btn-sm btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>