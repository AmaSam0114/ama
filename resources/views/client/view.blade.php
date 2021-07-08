
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Client Review</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Client</a></li>
                    <li class="breadcrumb-item active" aria-current="page">c475756</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row client-details-area mt-5">
        <div class="col-sm-12">
            <table class="table table-striped table-borderless w-50">
                <tr>
                    <th>Client Name</th>
                    <td>John S Pala</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>17/A Waragoda</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>spala@example.com</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>071 2345678</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-12 mt-4">
            <div>
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-phone"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Jobs List</strong> </h5>
        </div>
       

        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job</th>
                        <th scope="col">Supervisor</th>
                        <th scope="col">Initiate at</th>
                        <th scope="col">Terminate at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total Hours</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>job65856</td>
                        <td>Upul</td>
                        <td>2020-12-31</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>10h</td>
                        <td>LKR 15000.00</td>
                        <td><a href="{{route('job.view', ["id" => 1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 " ><i class="fa fa-pencil" ></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job47585</td>
                        <td>Upul</td>
                        <td>2020-07-31</td>
                        <td>2020-09-31</td>
                        <td>closed</td>
                        <td>10h</td>
                        <td>LKR 25000.00</td>
                        <td><a href="{{route('job.view', ["id" => 1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 " ><i class="fa fa-pencil" ></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job8749e7</td>
                        <td>Nishantha</td>
                        <td>2021-07-31</td>
                        <td>2022-07-31</td>
                        <td>Pending</td>
                        <td>5h</td>
                        <td>LKR 15000.00</td>
                        <td><a href="{{route('job.view', ["id" => 1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 " ><i class="fa fa-pencil" ></i> Update</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
@section('modal')
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">New Task</h5>
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
                                <input type="text" name="text" class="form-control" placeholder="Enter short description"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Number of Employees</label>
                                <input type="text" name="number" class="form-control" placeholder="Assigned employee count"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Time(h)</label>
                                <input type="text" name="number" class="form-control" placeholder="Enter rough time"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Charge(LKR)</label>
                                <input type="text" name="Text" class="form-control" placeholder="Enter Estimated Charge"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="Text" class="form-control" rows="5" placeholder="Description"/></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
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
                                <label>Number of Employees</label>
                                <input type="text" name="number" class="form-control" placeholder="Assigned employee count" value="2"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Time(h)</label>
                                <input type="text" name="number" class="form-control" placeholder="Enter rough time" value="2"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Estimated Charge(LKR)</label>
                                <input type="text" name="Text" class="form-control" placeholder="Enter Estimated Charge" value="300.00" />
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
<div class="modal fade" id="map-marker" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="gl-map" style="height: 300px; background-color: #eee;">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-sm btn-primary">Select Location</button>
            </div>
        </div>
    </div>
</div>
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
                            <div class="btn-group">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Active
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">In Active</a>

                                </div>
                            </div>
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
@endsection