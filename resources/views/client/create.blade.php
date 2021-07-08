
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>New Client</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Client</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-4">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Type</option>
                    <option> Manager</option>
                    <option> Supervisor</option>
                    <option> Janitor</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="date" class="form-control"/>
            </div>
        </div>
    </div>
    <div class="row field-area mt-5">

        <div class="col-sm-3">
            <div class="form-group">
                <label>Address 01</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Address o1"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Address 02</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Address 02"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Street</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Street"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>City</label>
                <input type="text" name="date" class="form-control" placeholder="Enter City"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Email Address"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Contact Number"/>
            </div>
        </div>
    </div>
    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Jobs List</strong> </h5>
        </div>
        <div class="col-sm-9 text-right"><button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#job-apply-extended"><i class="fa fa-plus"></i> Add Job</button></div>

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
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" ></i> Update</a></td>
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
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" ></i> Update</a></td>
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
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" ></i> Update</a></td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mt-5">

            <label>
                <input type="checkbox" name="send" checked/> Send Account Details to user
            </label>
        </div>
    </div>
    <div class="row page-action-area mt-3">
        <div class="col-sm-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#send-quotation">Create</button>
        </div>

    </div>
</section>
@endsection
@section('modal')

<div class="modal fade" id="job-apply" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row pt-3 align-items-center">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Job</label>
                                <select class='form-control'  name="job">
                                    <option selected disabled>Select a Job</option>
                                    <option>Job7595759</option>
                                    <option>job75945320</option>
                                    <option>job4353705</option>
                                    <option>job8586493</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary btn-sm mt-3" data-dismiss="modal">Add</button>
                            <button class="btn btn-outline-primary btn-sm mt-3 px-3" data-dismiss="modal">Cancel</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="job-apply-extended" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row pt-3 align-items-center">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Job</label>
                                <select class='form-control'  name="job">
                                    <option selected disabled>Select a Job</option>
                                    <option>Job7595759</option>
                                    <option>job75945320</option>
                                    <option>job4353705</option>
                                    <option>job8586493</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right"><button class="btn btn-primary btn-sm mt-3">GET</button></div>
                    </div>
                    <div class="row job-details-area mt-5">
                        <div class="col-sm-12">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link btn-sm text-dark px-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Job Details</strong>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 text-content">

                                                    <table class="table table-borderless ">
                                                        <tr>
                                                            <th>Client</th>
                                                            <td>Mr. Anton Chekkof</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address</th>
                                                            <td>17/ A Waragoda Kelaniya</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact No</th>
                                                            <td>071 2345678</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>a.premathilak@gmail.com</td>
                                                        </tr>
                                                    </table>
                                                    <div class="contact-actions mt-5">
                                                        <a href="tel:0712345678" class="btn btn-sm btn-outline-primary"> <i class="fa fa-phone"></i></a>
                                                        <a href="mailto:john@example.com" class="btn btn-sm btn-outline-primary"> <i class="fa fa-envelope"></i></a>
                                                        <a href="map:john@example.com" class="btn btn-sm btn-outline-primary"> <i class="fa fa-external-link-square" aria-hidden="true"></i> Get Direction</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 map">
                                                    <div class="gl-map" id="gl-map">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-sm text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <strong>task List</strong>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row table-area mt-5">
                                                <div class="col-sm-12">
                                                    <h5 class="text-uppercase mb-3"><strong>Task List</strong></h5>
                                                    <table class="table table-striped gl-datatable" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" title="id">#</th>
                                                                <th scope="col" title="task">Task</th>
                                                                <th scope="col" title="Created at">Created at</th>
                                                                <th scope="col" title="Status">Status</th>
                                                                <th scope="col" title="Estimate Time">Estimated time</th>
                                                                <th scope="col" title="Price">Price</th>
                                                                <th scope="col" title="Employee Count">Employee Count</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>active</td>
                                                                <td>3h</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>active</td>
                                                                <td>1h</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>3</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>inactive</td>
                                                                <td>60min</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>active</td>
                                                                <td>3h</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>1</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>inactive</td>
                                                                <td>2h</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>t86867</td>
                                                                <td>2020-12-31</td>
                                                                <td>active</td>
                                                                <td>1h</td>
                                                                <td>LKR 1500.00</td>
                                                                <td>1</td>

                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-sm text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>Work List</strong>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row table-area mt-5">
                                                <div class="col-sm-12">
                                                    <h5 class="text-uppercase mb-3"><strong>Work Cycle List</strong></h5>
                                                    <table class="table table-striped gl-datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" title="name">#</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Scheduled</th>
                                                                <th scope="col">Inspection</th>
                                                                <th scope="col">Feedback</th>
                                                                <th scope="col">Additional tasks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Completed</td>
                                                                <td>2021-12-31</td>
                                                                <td>Good</td>
                                                                <td></td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Completed</td>
                                                                <td>2021-12-31</td>
                                                                <td>Good</td>
                                                                <td></td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>complted</td>
                                                                <td>2021-12-31</td>
                                                                <td>Redo</td>
                                                                <td> Task Not Complted Properly</td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Completed</td>
                                                                <td>2021-07-31</td>
                                                                <td>Pending</td>
                                                                <td></td>
                                                                <td>2</td>

                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6"><button class="btn btn-sm btn-outline-primary" data-dismiss='modal'>Cancel</button></div>
                        <div class="col-sm-6 text-right"><button class="btn btn-sm btn-primary" data-dismiss='modal'>Assign</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection