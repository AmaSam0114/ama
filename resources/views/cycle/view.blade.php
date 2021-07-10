
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Work Cycle View</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jobs</a></li>
                    <li class="breadcrumb-item"><a href="#">Work cycle</a></li>
                    <li class="breadcrumb-item active" aria-current="page">w6484674</li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="row details-area mt-5">
        <div class="col-sm-3 text-content">
            <div class="form-group">
                <label>Schedule Date</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3 text-content">
            <div class="form-group">
                <label>Janitor</label>
                <select class="form-control" @role(['client']) disabled @endrole name="supervisor" >
                    <option class="" selected disabled>Select a Janitor</option>
                    <option> S Saman</option>
                    <option> D.Athukorala</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 text-right">
            @role(['janitor'])
            <button class="btn btn-outline-primary btn-sm  mt-4" type="button" data-toggle="modal" data-target="#view-job">
                View Details
            </button>
            <div class="btn-group ml-3 mt-4">
                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Checked In
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Check In</a>
                    <a class="dropdown-item" href="#">Check out</a>

                </div>
            </div>
            @endrole
            @role(['client'])
            <button class="btn btn-outline-primary btn-sm  mt-4" type="button" data-toggle="modal" data-target="#feedback">
                Feedback
            </button>
            @endrole
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label>Special Note</label>
                <textarea type="text" name="Text" class="form-control" rows="5" placeholder="Description"/></textarea>
            </div>
        </div>
    </div>
    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Task List</strong> </h5>
        </div>
        <div class="col-sm-9 text-right">
            @role(['manager', 'supervisor'])<button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> Add Additional Task</button> 
            @endrole
            @role(['client'])<button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#request-task"><i class="fa fa-plus"></i> Request Additional Task</button> 
            @endrole
        </div>

        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Estimated time</th>
                        <th scope="col">Price</th>
                        <th scope="col">Employee Count</th>
                        <th scope="col">Action</th>
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
                        <td class="">
                            @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" ></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    In Progress
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>1h</td>
                        <td>LKR 1500.00</td>
                        <td>3</td>
                        <td class="">
                             @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>inactive</td>
                        <td>60min</td>
                        <td>LKR 1500.00</td>
                        <td>2</td>
                        <td class="">
                             @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>3h</td>
                        <td>LKR 1500.00</td>
                        <td>1</td>
                        <td class="">
                             @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>inactive</td>
                        <td>2h</td>
                        <td>LKR 1500.00</td>
                        <td>2</td>
                        <td class="">
                             @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>1h</td>
                        <td>LKR 1500.00</td>
                        <td>1</td>
                        <td class="">
                             @role(['client'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @endrole
                            @role(['manager', 'supervisor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                            @role(['janitor'])
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> 
                            <div class="btn-group ml-2">
                                <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">In Progress</a>
                                    <a class="dropdown-item" href="#">Completed</a>

                                </div>
                            </div>
                            @endrole
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection

@section('modal')
@include('modals/view-job')
@include('modals/new-task')
@include('modals/update-task')
@include('modals/view-task')
@include('modals/feedback')
@include('modals/request-task')

@endsection