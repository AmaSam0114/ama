@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                @role(['manager'])
                <h2>All Employee</h2>
                @endrole
                @role(['supervisor'])
                <h2>All Janitors</h2>
                @endrole
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
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
                <label>Type</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Type</option>
                    <option> Supervisor</option>
                    <option> Janitor</option>
                </select>
                @endrole
                @role(['supervisor'])
                <label>Type</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Type</option>
                    <option> Temporary</option>
                    <option> Permanent</option>
                </select>
                
                @endrole
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Available From</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Available To</label>
                <input type="date" name="date" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Rating</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>All</option>
                    <option> 5</option>
                    <option> 3</option>
                    <option> 2</option>
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
                        <th scope="col">Full Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Number of Jobs</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>2020-12-31</td>
                        <td>123</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>2020-12-31</td>
                        <td>30</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Justin B</td>
                        <td>2020-12-31</td>
                        <td>123</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>John Cena</td>
                        <td>2020-12-31</td>
                        <td>123</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Arnold S</td>
                        <td>2020-12-31</td>
                        <td>390</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning ml-1"></i>
                            <i class="fa fa-star text-warning ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Will S</td>
                        <td>2020-12-31</td>
                        <td>10</td>
                        <td>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                            <i class="fa fa-star-o ml-1"></i>
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="#" class="" data-toggle="modal" data-target="#employe-view"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="{{route('employee.update', ["id" => 1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                  
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
@section('modal')
<div class="modal fade" id="employe-view" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row align-items-center pt-3">
                        <div class="col-sm-4 profile">
                            <div class="dsiplay-picture">
                                <img class="rounded-circle w-100" src="{{asset('images/user-01.jpg')}}" alt="User Name"/>
                            </div>
                        </div>
                        <div class="col-sm-8 text-left">
                            <div class="form-group">
                                <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                <p class="text-muted lead">{{Auth::user()->role}}</p>
                                <ul class="list-unstyled list-inline">
                                    <li class='list-inline-item'><i class="fa  fa-star text-warning"></i></li>
                                    <li class='list-inline-item'><i class="fa  fa-star text-warning"></i></li>
                                    <li class='list-inline-item'><i class="fa  fa-star text-warning"></i></li>
                                    <li class='list-inline-item'><i class="fa  fa-star-o"></i></li>
                                    <li class='list-inline-item'><i class="fa  fa-star-o"></i></li>
                                </ul>
                            </div>
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
                <div class="row additional-details-area mt-3">
                    <div class="col-sm-12">
                        <table class="table table-borderless table-striped">
                            <tr>
                                <th>Address 1</th>
                                <td> 12/A</td>
                            </tr>
                            <tr>
                                <th>Address 2</th>
                                <td> </td>
                            </tr>
                            <tr>
                                <th>Street</th>
                                <td> The Road </td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td> City 99</td>
                            </tr>
                            <tr>
                                <th>email</th>
                                <td>email@example.com</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>071 4062980 </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection