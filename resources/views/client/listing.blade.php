@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>All Clients</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Clients</a></li>
                    <li class="breadcrumb-item active" aria-current="page">view all</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Job Count</label>
                <input type="number" name="date" class="form-control" placeholder="Number of jobs"/>
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
                <label>City</label>
                <input type="text" class="form-control" placeholder="Enter a City" />
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
                        <th scope="col">Job Count</th>
                        <th scope="col">Email</th>
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
                        <td>2</td>
                        <td>
                            user@example.com
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="{{route('client.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Anton H</td>
                        <td>2020-12-31</td>
                        <td>1</td>
                        <td>
                            user@example.com
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="{{route('client.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>R Ramanayaka</td>
                        <td>2020-12-31</td>
                        <td>2</td>
                        <td>
                            r.ramanayaka@example.com
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="{{route('client.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>D Udawaththe</td>
                        <td>2020-12-31</td>
                        <td>5</td>
                        <td>
                            dpala.com
                        </td>
                        <td>0712345678</td>
                        <td>123/2 The road, City</td>
                        <td><a href="{{route('client.view', ["id"=>1])}}" class="" ><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a></td>
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