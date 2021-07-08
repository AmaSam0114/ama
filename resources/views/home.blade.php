@extends('layouts.app')

@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="gradient-box rounded py-3 px-3">
                <h2 class="text-white"> Hello {{Auth::user()->name}} </h2>
                <h4 class="text-white"> Welcome Back!</h4>
            </div>
        </div>
    </div>
    <div class="row widget-area mt-5">
        <div class="col-sm-8 ">
            <div class="card">
                <div class="card-header">
                    <h5> Your Notifications</h5>
                </div>
                <div class="card-body">
                    <div class="notification-area pt-4">
                        <div class="card notification-card">

                            <div class="card-body">
                                <h4 class="mb-3">Senkadagala Finance <small class="text-muted">job224252</small></h4>
                                <p>
                                    User Somapala has been <span class="badge badge-pill badge-info">checked-in to</span> The Location 123/2 Staple Street Colombo
                                </p>
                                <a  class="d-block text-right" href="#"> mark as read</a>
                            </div>
                        </div>
                        <div class="card notification-card mt-3">
                            <div class="card-body">
                                <h4 class="mb-3">Senkadagala Finance <small class="text-muted">job224252</small></h4>
                                <p>
                                    Work cycle 2021-06-28 Status Updated to <span class="badge badge-pill badge-info">Pending</span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i><span class="badge badge-pill badge-warning">In Progress</span>
                                </p>
                                <a  class="d-block text-right" href="#"> mark as read</a>
                            </div>
                        </div>
                        <div class="card notification-card mt-3">
                            <div class="card-body">
                                <h4 class="mb-3">NSB Bank Kelaniya <small class="text-muted">job857563</small></h4>
                                <p>
                                    Client submit a review on work cycle 2021-06-02 
                                </p>
                                <div class="d-flex w-50">
                                    <div class="ratings w-50">
                                        <ul class="list-inline list-unstyled">
                                            <li class="list-inline-item"><i class="fa fa-star text-warning" aria-hidden="true"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="comments pl-3 ">
                                        <p><strong> comment paragraph of the user complaint the current work cycle done my Green Lanka Employee</strong></p>
                                    </div>
                                </div>
                                <a  class="d-block text-right" href="#"> mark as read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12 calender-area">
                    <div class="card">
                        <div class="card-header">
                            <h5> Your Calendar</h5>
                        </div>
                        <div class="card-body">
                            <div id='calendar'>
                                {!! $calendar->calendar() !!}
                                {!! $calendar->script() !!}
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 quicklinks-area mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5> Quick Links</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="{{route('job.create')}}">New Job</a></li>
                                <li class="list-group-item"><a href="{{route('job.listing')}}">My Jobs</a></li>
                                <li class="list-group-item"><a href="{{route('employee.attendance')}}">Janitor Attendance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
