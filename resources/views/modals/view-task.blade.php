<div class="modal fade" id="view-task" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 pl-0">
                            <p class="lead text-truncate"><strong>Task Short Description</strong></p>
                        </div>
                        <div class="col-sm-6  text-right">
                            @role(['manager', 'supervisor'])
                            <div class="btn-group">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Active
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">In Active</a>
                                   
                                </div>
                            </div>
                            @endrole
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="lead">
                                   <strong> Description</strong></p>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
                            </div>
                            <div class="col-sm-12">
                                <p class="lead">
                                   <strong> Inspection remark</strong></p>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                            </div>
                            <div class="col-sm-12">
                                <p class="lead">
                                   <strong> Client Remark</strong></p>
                                <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star-o ml-2 text-warning"></i> <i class="fa fa-star-o ml-2"></i> <i class="fa fa-star-o ml-2"></i> <i class="fa fa-star-o ml-2"></i> </p>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>