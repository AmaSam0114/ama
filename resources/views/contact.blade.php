
@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Filed Area -->
    <div class="row client-details-area mt-3">
        <div class="col-sm-12">
            <div class="row details-area mt-4">

                <div class="col-sm-6">
                    <h5>Drop us a Message</h5>
                    <div class="card mt-4">
                        <div class="card-body pb-5">
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" placeholder="Enter the subject" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" placeholder="Enter enquiry type" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea type="text" rows="5" placeholder="Enter Message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-sm btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h5>Direct Contact</h5>
                    <div class="row mt-4">
                        <div class="col-sm-6 text-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dsiplay-picture w-50 mx-auto d-block">
                                        <img class="rounded-circle w-100" src="{{asset('images/user-01.jpg')}}" alt="User Name"/>
                                    </div>
                                    <div class="mt-3 py-3 text-center">
                                        <h3 class="display-5 mb-0">Kasun Perera</h3>
                                        <p class="lead"><small>CEO</small></p>
                                        <a class="mt-3 d-block" href=""><i class="fa fa-phone"></i> 072345678</a>
                                        <a class="mt-1 d-block" href=""><i class="fa fa-envelope"></i> kasun@greenlanka.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dsiplay-picture w-50 mx-auto d-block">
                                        <img class="rounded-circle w-100" src="{{asset('images/user-02.jpg')}}" alt="User Name"/>
                                    </div>
                                    <div class="mt-3 py-3 text-center">
                                        <h3 class="display-5 mb-0">Upul Karunarathne</h3>
                                        <p class="lead"><small>Manager</small></p>
                                        <a class="mt-3 d-block" href=""><i class="fa fa-phone"></i> 072345678</a>
                                        <a class="mt-1 d-block" href=""><i class="fa fa-envelope"></i> upul@greenlanka.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <h5>Visit Us</h5>
                    <div id="gl-map" class="rounded border-success mt-4 " style="height: 300px">

                    </div>
                </div>
            </div>

            </section>
            @endsection
