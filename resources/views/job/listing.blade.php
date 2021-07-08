@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>All Jobs</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jobs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">view all</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-3">
            <div class="form-group">
                @role(['manager'])
                <label>Supervisor</label>
                @endrole
                @role(['supervisor'])
                <label>Janitor</label>
                @endrole
                <select class="form-control" name="supervisor" >
                    @role(['manager'])
                    <option class="" selected disabled>Select a Supervisor</option>
                    @endrole
                    @role(['supervisor'])
                    <option class="" selected disabled>Select a Janitor</option>
                    @endrole
                    <option> Jagath</option>
                    <option> S.Pala</option>
                    <option> Unassigned</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Date From</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Date To</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>All</option>
                    <option> Open</option>
                    <option> Active</option>
                    <option> Closed</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row table-area mt-3">
        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Terminated at</th>
                        <th scope="col">Work Progress</th>
                        <th scope="col">Charge</th>
                        <th scope="col">Supervisor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>job64747</td>
                        <td>2020-12-31</td>
                        <td>Open</td>
                        <td>2020-12-31</td>
                        <td>Pending</td>
                        <td>LKR 10, 000.00</td>
                        <td>Upul</td>
                        <td><a href="{{route('job.view', ["id" => 1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 2])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 3])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 4])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view',["id" => 5])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 6])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 7])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 8])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 9])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 16])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 10])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 12])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job6476587</td>
                        <td>2020-07-31</td>
                        <td>Closed</td>
                        <td>2020-11-31</td>
                        <td>Pending</td>
                        <td>LKR 12, 000.00</td>
                        <td>Karman</td>
                        <td><a href="{{route('job.view', ["id" => 13])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('job.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection