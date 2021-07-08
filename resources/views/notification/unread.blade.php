@extends('layouts.app')

@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Notifications</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Notifications</a></li>
                    <li class="breadcrumb-item active" aria-current="page">unread</li>
                </ol>
            </nav>
        </div>
        <div class="col-sm-12">
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
</section>

@endsection