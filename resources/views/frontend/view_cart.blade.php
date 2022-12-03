@extends('frontend.master');

@section('content')
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4"></div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4" style="padding: 2px 0px 2px 0px">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img
                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                        class="img-thumbnail rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fa fa-angle-up"></i>
                                    </button>
                                    <input id="form1" min="0" name="quantity" value="2" type="number"
                                           class="form-control" style="max-width:70px;"/>
                                    <button class="btn btn-link px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fa fa-angle-down"></i>
                                    </button>

                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">&#2547; 499.00</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row" style="margin: 3px 0 3px 0;">
                            <div class="form-outline flex-fill">
                                <input type="text" id="form1" class="form-control form-control-lg"/>
                                <label class="form-label" for="form1">Discound code</label>
                            </div>
                            <button type="button" class="btn btn-default">Apply</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn-block btn-lg"
                                    style="background: #D10024; color: #FFF7EB; border: none; font-weight: bold; margin: 3px 0 3px 0;">
                                Proceed to Pay
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
