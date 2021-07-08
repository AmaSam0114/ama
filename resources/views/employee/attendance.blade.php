@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Attendance</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                </ol>
            </nav>
        </div>
        
    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Type</option>
                    <option> Supervisor</option>
                    <option> Janitor</option>
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
       
    </div>
    <div class="row table-area mt-3">
        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job</th>
                        <th scope="col">Location</th>
                        <th scope="col">Check in</th>
                        <th scope="col">Check out</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Client</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Job54746</td>
                        <td>Kelaniya</td>
                        <td>2021-07-10 8:00</td>
                        <td>2021-07-10 4:00</td>
                        <td>Jagath</td>
                        <td>N Nelemdeniya</td>
                        <td>Completed</td>
                        <td><a href="#" class=""><i class="fa fa-phone" aria-hidden="true"></i> Call Employee</a> <a href="#" class="ml-2 "><i class="fa fa-phone" aria-hidden="true"></i> Call Client</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Job54746</td>
                        <td>Kelaniya</td>
                        <td>2021-07-10 8:00</td>
                        <td>2021-07-10 4:00</td>
                        <td>Jagath</td>
                        <td>N Sugath</td>
                        <td>Pending</td>
                        <td><a href="#" class=""><i class="fa fa-phone" aria-hidden="true"></i> Call Employee</a> <a href="#" class="ml-2 "><i class="fa fa-phone" aria-hidden="true"></i> Call Client</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Job54746</td>
                        <td>Waragoda</td>
                        <td>2021-07-10 8:00</td>
                        <td>2021-07-10 4:00</td>
                        <td>Jewantha</td>
                        <td>N Prerera</td>
                        <td>Completed</td>
                        <td><a href="#" class=""><i class="fa fa-phone" aria-hidden="true"></i> Call Employee</a> <a href="#" class="ml-2 "><i class="fa fa-phone" aria-hidden="true"></i> Call Client</a></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Job54746</td>
                        <td>Kelaniya</td>
                        <td>2021-07-10 8:00</td>
                        <td>2021-07-10 4:00</td>
                        <td>Jagath</td>
                        <td>N Nelemdeniya</td>
                        <td>Completed</td>
                        <td><a href="#" class=""><i class="fa fa-phone" aria-hidden="true"></i> Call Employee</a> <a href="#" class="ml-2 "><i class="fa fa-phone" aria-hidden="true"></i> Call Client</a></td>
                    </tr>
                   
                  
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection