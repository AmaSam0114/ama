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