
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Update Employee</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">emp3474647</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-4">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="date" class="form-control" value="Nuwan C"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a Type</option>
                    <option selected> Manager</option>
                    <option> Supervisor</option>
                    <option> Janitor</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="date" class="form-control" value="pass@123"/>
            </div>
        </div>
    </div>
    <div class="row field-area mt-5">

        <div class="col-sm-3">
            <div class="form-group">
                <label>Address 01</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Address o1" value="12/9D"/>
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
                <input type="text" name="date" class="form-control" placeholder="Enter Street" value="The Road"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>City</label>
                <input type="text" name="date" class="form-control" placeholder="Enter City" value="City 01"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Email Address" value="cobsccomp211p-09@student.nibm.lk"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="date" class="form-control" placeholder="Enter Contact Number" value="071 2345678"/>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>
                    <input type="checkbox" name="send" checked/> Send Account Details to user
                </label>
            </div>
        </div>
    </div>
    <div class="row page-action-area mt-5">
        <div class="col-sm-6">
            <button class="btn btn-primary" data-toggle="modal" data-target="#send-quotation">Create</button>
        </div>
        
    </div>
</section>
@endsection
