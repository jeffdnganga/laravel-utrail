@extends('layouts.frontend')

@include('layouts.inc.transporter-navbar')

@section('title')
   New Deliveries
@endsection

@section('content')

<!-- code for new deliveries section begins here -->
<div class="section-heading text-center">
    <h2 class="hover-underline-animation fw-bold text-center mb-3" style="color: #3D5A80;"><span class="unique-heading-section">New</span> Deliveries</h2>
</div>

<section class="new-deliveries" style="background: rgba(238, 108, 77, 0.3);">
    <div class="container py-4">
        <div class="filter-route mb-2" style="width: 340px; margin: 0 auto;">
            <select class="form-select" aria-label="Default select example">
            <option selected>Filter by route</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-4 p-3 ">
                <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                    <img src=" {{ asset ('images/load-image1.jpg') }} " style="height: 12rem; " class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5>Packaged item</h5>
                            </div>
                            <div class="col-3">
                                <p class="text-secondary text-end" style="font-size: small;">10 bids</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 posted-by">
                                <div class="client-image">
                                    <img src=" {{ asset ('images/user-image.jpg') }} " alt="Client">
                                </div>
                                <div class="client-name">
                                    <p>Mark</p>
                                </div>
                            </div>
                            <div class="col-7 route-time text-end">
                                <p><i class="fas fa-map-marked-alt pe-2"></i>Nairobi to Nakuru</p>
                                <p><i class="fas fa-hourglass-half pe-2"></i>Within a week</p>
                            </div>
                        </div>
                        <h6 class="dimensions-weight-date">
                            Dimensions: 50x50x50 cm <br> Weight: 2Kg <br> Pickup date: 5/09/2021
                        </h6>
                        <p class="more-info-peek">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad... </p>
                        <a href="#makeBidModal" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-3">
                <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                    <img src=" {{ asset ('images/load-image1.jpg') }} " style="height: 12rem; " class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5>Packaged item</h5>
                            </div>
                            <div class="col-3">
                                <p class="text-secondary text-end" style="font-size: small;">10 bids</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 posted-by">
                                <div class="client-image">
                                    <img src=" {{ asset ('images/user-image.jpg') }} " alt="Client">
                                </div>
                                <div class="client-name">
                                    <p>Mark</p>
                                </div>
                            </div>
                            <div class="col-7 route-time text-end">
                                <p><i class="fas fa-map-marked-alt pe-2"></i>Nairobi to Nakuru</p>
                                <p><i class="fas fa-hourglass-half pe-2"></i>Within a week</p>
                            </div>
                        </div>
                        <h6 class="dimensions-weight-date">
                            Dimensions: 50x50x50 cm <br> Weight: 2Kg <br> Pickup date: 5/09/2021
                        </h6>
                        <p class="more-info-peek">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad... </p>
                        <a href="#makeBidModal" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-3">
                <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                    <img src=" {{ asset ('images/load-image1.jpg') }} " style="height: 12rem; " class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5>Packaged item</h5>
                            </div>
                            <div class="col-3">
                                <p class="text-secondary text-end" style="font-size: small;">10 bids</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 posted-by">
                                <div class="client-image">
                                    <img src=" {{ asset ('images/user-image.jpg') }} " alt="Client">
                                </div>
                                <div class="client-name">
                                    <p>Mark</p>
                                </div>
                            </div>
                            <div class="col-7 route-time text-end">
                                <p><i class="fas fa-map-marked-alt pe-2"></i>Nairobi to Nakuru</p>
                                <p><i class="fas fa-hourglass-half pe-2"></i>Within a week</p>
                            </div>
                        </div>
                        <h6 class="dimensions-weight-date">
                            Dimensions: 50x50x50 cm <br> Weight: 2Kg <br> Pickup date: 5/09/2021
                        </h6>
                        <p class="more-info-peek">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad... </p>
                        <a href="#makeBidModal" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-3">
                <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                    <img src=" {{ asset ('images/load-image1.jpg') }} " style="height: 12rem; " class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5>Packaged item</h5>
                            </div>
                            <div class="col-3">
                                <p class="text-secondary text-end" style="font-size: small;">10 bids</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 posted-by">
                                <div class="client-image">
                                    <img src=" {{ asset ('images/user-image.jpg') }} " alt="Client">
                                </div>
                                <div class="client-name">
                                    <p>Mark</p>
                                </div>
                            </div>
                            <div class="col-7 route-time text-end">
                                <p><i class="fas fa-map-marked-alt pe-2"></i>Nairobi to Nakuru</p>
                                <p><i class="fas fa-hourglass-half pe-2"></i>Within a week</p>
                            </div>
                        </div>
                        <h6 class="dimensions-weight-date">
                            Dimensions: 50x50x50 cm <br> Weight: 2Kg <br> Pickup date: 5/09/2021
                        </h6>
                        <p class="more-info-peek">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad... </p>
                        <a href="#makeBidModal" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 p-3">
                <div class="card" style="box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);">
                    <img src=" {{ asset ('images/load-image1.jpg') }} " style="height: 12rem; " class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5>Packaged item</h5>
                            </div>
                            <div class="col-3">
                                <p class="text-secondary text-end" style="font-size: small;">10 bids</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 posted-by">
                                <div class="client-image">
                                    <img src=" {{ asset ('images/user-image.jpg') }} " alt="Client">
                                </div>
                                <div class="client-name">
                                    <p>Mark</p>
                                </div>
                            </div>
                            <div class="col-7 route-time text-end">
                                <p><i class="fas fa-map-marked-alt pe-2"></i>Nairobi to Nakuru</p>
                                <p><i class="fas fa-hourglass-half pe-2"></i>Within a week</p>
                            </div>
                        </div>
                        <h6 class="dimensions-weight-date">
                            Dimensions: 50x50x50 cm <br> Weight: 2Kg <br> Pickup date: 5/09/2021
                        </h6>
                        <p class="more-info-peek">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad... </p>
                        <a href="#makeBidModal" data-bs-toggle="modal" class="btn btn-success bid-btn d-block fw-bold">Make a bid</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- code for new deliveries section ends here -->

<!-- code for make a bid pop-up modal begins here -->
<div class="modal fade" id="makeBidModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="section-heading text-center mt-4">
                <h5 class="hover-underline-animation fw-bold" style="color: #3D5A80;">Make a <span class="unique-heading-section">Bid</span></h5>
            </div>
            <div class="modal-body">
                <p style="color: #293241;"> <i class="fas fa-map-marker-alt text-success"></i> Pick up location: Nairobi</p>
                <p style="color: #293241;"> <i class="fas fa-map-marker-alt text-danger"></i> Drop off location: Nakuru</p>
                <p class="fw-bold h6" style="color: #3D5A80;">More Description</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="form-div">
                    <h5 class="fw-bold mb-3" style="color: #3D5A80;">Make a quick bid</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="input-group mb-3" style="display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-dollar-sign pe-2" style="color: #EE6C4D;" id="basic-addon1"></i>
                                    <input type="text" class="form-control" placeholder="Bid amount" aria-label="Bid amount" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="input-group mb-3" style="display: flex; justify-content: center; align-items: center;">
                                    <i class="far fa-clock pe-2" style="color: #EE6C4D;" id="basic-addon2"></i>
                                    <select class="form-select" aria-label="Pickup time" aria-describedby="basic-addon2">
                                        <option selected>Pick up time</option>
                                        <option value="1">8:00 am</option>
                                        <option value="2">9:00 am</option>
                                        <option value="3">10:00 am</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <i class="fas fa-comment pe-2" style="color: #EE6C4D;" id="basic-addon3"></i>
                            <textarea class="form-control" id="bidMessage" placeholder="Enter a message" rows="6"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Submit bid</button>
            </div>
        </div>
    </div>
</div>
<!-- code for make a bid pop up ends here -->

@endsection
