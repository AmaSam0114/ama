
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>New Job</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jobs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Initiation Date</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Termination Date</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Repeat Cycle(days)</label>
                <input type="number" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Supervisor</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Supervisor</option>
                    <option> Upul</option>
                    <option> Nisantha</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Client</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Client</option>
                    <option> Anton Chekkof</option>
                    <option> Don John</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row field-area mt-5">
        <div class="col-sm-12">
            <h5 class="text-uppercase mb-3"><strong>Location</strong></h5>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Address 01</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Address o1"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Address 02</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Address 02"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Street</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Street"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>City</label>
                <input type="text" name="date" class="form-control" placeholder="Enter City"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Contact Person</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Contact Person"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Contact Number"/>
            </div>
        </div>
    </div>
    <div class="row field-area mt-5">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Latitude</label>
                <input type="text" name="date" class="form-control" placeholder="Enter City"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Longitude</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Contact Person"/>
            </div>
        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-start">
            <button class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#map-marker">Mark on Map</button>
        </div>
    </div>

    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Task List</strong> </h5>
        </div>
        <div class="col-sm-9 text-right"><button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> New Task</button></div>

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
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" ></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>1h</td>
                        <td>LKR 1500.00</td>
                        <td>3</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>inactive</td>
                        <td>60min</td>
                        <td>LKR 1500.00</td>
                        <td>2</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>3h</td>
                        <td>LKR 1500.00</td>
                        <td>1</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>inactive</td>
                        <td>2h</td>
                        <td>LKR 1500.00</td>
                        <td>2</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>t86867</td>
                        <td>2020-12-31</td>
                        <td>active</td>
                        <td>1h</td>
                        <td>LKR 1500.00</td>
                        <td>1</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Work Cycle List</strong></h5>
        </div>
        <div class="col-sm-9 text-right">
            <a href="" class="btn btn-sm btn-outline-primary"><i class="fa fa-cog" aria-hidden="true"></i> Generate</a>a
            <a href="{{route('cycle.create')}}" class="ml-3 btn btn-sm btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
        </div>
        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Work Cycle</th>
                        <th scope="col">In</th>
                        <th scope="col">out</th>
                        <th scope="col">Status</th>
                        <th scope="col">Scheduled</th>
                        <th scope="col">Inspection</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Additional tasks</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>w6446437</td>
                        <td>2020-12-31: 10:30</td>
                        <td>2020-12-31: 5:30</td>
                        <td>Completed</td>
                        <td>2021-12-31</td>
                        <td>Good</td>
                        <td></td>
                        <td>2</td>
                        <td><a href="{{route('cycle.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('cycle.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>w6446437</td>
                        <td>2020-12-31: 10:30</td>
                        <td>2020-12-31: 5:30</td>
                        <td>Completed</td>
                        <td>2021-12-31</td>
                        <td>Good</td>
                        <td></td>
                        <td>2</td>
                        <td><a href="{{route('cycle.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('cycle.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>w6446437</td>
                        <td>2021-01-31: 10:30</td>
                        <td>2021-01-31: 5:30</td>
                        <td>complted</td>
                        <td>2021-12-31</td>
                        <td>Redo</td>
                        <td> Task Not Complted Properly</td>
                        <td>2</td>
                        <td><a href="{{route('cycle.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('cycle.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>w6446437</td>
                        <td>2021-07-31: 10:30</td>
                        <td>2021-07-31: 5:30</td>
                        <td>Completed</td>
                        <td>2021-07-31</td>
                        <td>Pending</td>
                        <td></td>
                        <td>2</td>
                        <td><a href="{{route('cycle.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('cycle.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row page-action-area mt-5">
        <div class="col-sm-6">
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#send-quotation">Send Quotation</button>
        </div>
        <div class="col-sm-6 text-right">
            <button class="btn btn-success">Save</button>
        </div>
    </div>
</section>
@endsection
@section('modal')
@include('modals/new-task')
@include('modals/update-task')
@include('modals/map-marker')
@include('modals/view-task')
@include('modals/send-quotation')



@endsection