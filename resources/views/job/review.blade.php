
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Job Review</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jobs</a></li>
                    <li class="breadcrumb-item"><a href="#">View</a></li>
                    <li class="breadcrumb-item active" aria-current="page">job6585748</li>
                </ol>
            </nav>
        </div>
        
    </div>
    <div class="row details-area mt-5">
        <div class="col-sm-3 text-content">
            
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
        <div class="col-sm-9 map">
            <div class="gl-map" id="gl-map">
               
            </div>
        </div>
    </div>
 
    <div class="row table-area mt-5">
        <div class="col-sm-12">
            <h5 class="text-uppercase mb-3"><strong>Task List</strong></h5>
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
                        <td>
                            <a href="#" class=""  data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a> 
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
                        <td>
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a> 
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
                        <td>
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a> 
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
                        <td>
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
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
                        <td>
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a> 
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
                        <td>
                            <a href="#" class="" data-toggle="modal" data-target="#view-task"><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor'])
                            <a href="#" class="ml-2 " aria-hidden="true" data-toggle="modal" data-target="#update-task"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                        </td>
                    </tr>
                   
                    
                </tbody>
            </table>
        </div>
    </div>
      <div class="row table-area mt-5">
        <div class="col-sm-12">
            <h5 class="text-uppercase mb-3"><strong>Work Cycle List</strong></h5>
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                        <td>
                            <a href="{{route('cycle.view', ['id'=>1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor', 'janitor'])
                            <a href="{{route('cycle.update', ['id'=>1])}}" class="ml-2 " ><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                        </td>
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
                        <td>
                            <a href="{{route('cycle.view', ['id'=>1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor', 'janitor'])
                            <a href="{{route('cycle.update', ['id'=>1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                        </td>
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
                        <td>
                            <a href="{{route('cycle.view', ['id'=>1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor', 'janitor'])
                            <a href="{{route('cycle.update', ['id'=>1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
                            @endrole
                        </td>
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
                        <td>
                            <a href="{{route('cycle.view', ['id'=>1])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i> View</a> 
                            @role(['manager', 'supervisor', 'janitor'])
                            <a href="{{route('cycle.update', ['id'=>1])}}" class="ml-2 "><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
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
@include('modals/view-task')
@include('modals/update-task')
@endsection