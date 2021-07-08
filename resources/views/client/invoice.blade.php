@extends('layouts.app')
@section('content')
<section class="fluid-container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <h2>Invoice</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Client</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                </ol>
            </nav>
        </div>
        
    </div>
    <!-- Filed Area -->
    <div class="row field-area mt-5">
        <div class="col-sm-3">
            <div class="form-group">
                <label>By State</label>
                <select class="form-control" name="supervisor" >
                    <option class="" selected disabled>Select a State</option>
                    <option> Due</option>
                    <option> Paid</option>
                </select>
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
       
    </div>
    <div class="row table-area mt-3">
        <div class="col-sm-12">
            <table class="table table-striped gl-datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Job Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">State</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>job64746</td>
                        <td>2020-12-31</td>
                        <td>Nayomi Perera</td>
                        <td>Due</td>
                        <td>12600</td>
                        <td><a href="#" class="" data-target='#send-invoice' data-toggle='modal'><i class="fa fa-eye" aria-hidden="true" ></i> View</a>  </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job64746</td>
                        <td>2020-12-31</td>
                        <td>Duminda</td>
                        <td>Due</td>
                        <td>12600</td>
                        <td><a href="#" class="" data-target='#send-invoice' data-toggle='modal'><i class="fa fa-eye" aria-hidden="true"></i> View</a>  </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job64746</td>
                        <td>2020-12-31</td>
                        <td>Taruka Perera</td>
                        <td>Paid</td>
                        <td>21000</td>
                        <td><a href="#" class="" data-target='#send-invoice' data-toggle='modal'><i class="fa fa-eye" aria-hidden="true"></i> View</a>  </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>job64746</td>
                        <td>2020-12-31</td>
                        <td>H Perera</td>
                        <td>Due</td>
                        <td>15600</td>
                        <td><a href="#" class="" data-target='#send-invoice' data-toggle='modal'><i class="fa fa-eye" aria-hidden="true"></i> View</a>  </td>
                    </tr>
                    
                  
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
@section('modal')
<div class="modal fade" id="send-invoice" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Invoice to Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client Name</label>
                                <input type="text" name="text" class="form-control" placeholder="Full Name of Client" value=""/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Company Email Address</label>
                                <input type="text" name="text" class="form-control" placeholder="Clients Company" value=""/>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 mt-3">
                            <div class="quotation-preview d-flex align-items-center justify-content-center" style="height: 600px; background-color: #eee; border-radius: 10px;">
                                <p class="lead">Preview</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Download</button>
                <button type="button" class="btn btn-sm btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>
@endsection
