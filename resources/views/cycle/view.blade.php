
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
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Janitor</option>
                    <option> S Saman</option>
                    <option> D.Athukorala</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
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
<div class="modal fade" id="view-task" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 pl-0">
                            <p class="lead text-truncate"><strong>Task Short Description</strong></p>
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
@endsection