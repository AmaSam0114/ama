
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Work Cycle Update</h2>
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
                <input type="date" value="2021-06-25" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3 text-content">
            <div class="form-group">
                <label>Janitor</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Janitor</option>
                    <option selected> S Saman</option>
                    <option> D.Athukorala</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Special Note</label>
                <textarea type="text" name="Text" class="form-control" rows="5" placeholder="Description"/> No Special note here</textarea>
            </div>
        </div>
    </div>
    <div class="row table-area mt-5">
        <div class="col-sm-3">
            <h5 class="text-uppercase mb-3"><strong>Task List</strong> </h5>
        </div>
        <div class="col-sm-9 text-right"><button class="btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> Add Additional Task</button></div>

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

</section>
@endsection

@section('modal')
@include('modals/new-task')
@include('modals/update-task')
@inclde('modals/view-task')
@endsection