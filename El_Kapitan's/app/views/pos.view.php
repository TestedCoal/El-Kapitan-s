<?php require views_path('partials/header');?>

        <div class="d-flex">
            <div style="height: 840px;;" class="shadow col-9 p-4">

                <div class="input-group mb-3"> <h3> Items </h3>
                    <input type="text" class="ms-4 form-control" placeholder="Search an Item or Category." aria-label="Search" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass fa-bounce"></i></i></span>
                </div>

                <div class="js-products d-flex" style="flex-wrap: wrap; height: 90%; overflow-y: scroll;">

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/americano.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Americano</div>
                            <div class="" style="font-size:20px"><b>₱45.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/caramel.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Caramell</div>
                            <div class="" style="font-size:20px"><b>₱50.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/matcha.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Matcha</div>
                            <div class="" style="font-size:20px"><b>₱55.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/strawberry.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Strawberry</div>
                            <div class="" style="font-size:20px"><b>₱60.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/americano.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Americano</div>
                            <div class="" style="font-size:20px"><b>₱45.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->

                    <!--c@rd-->
                    <div class="card m-3 border-0" style="min-width: 200px; max-width: 200px">
                        <a href="#">
                            <img src="assets/images/caramel.png" class="w-100 rounded border">
                        </a>
                        <div class="p-2">
                            <div class="text-muted">Caramell</div>
                            <div class="" style="font-size:20px"><b>₱50.00</b></div>
                        </div>
                    </div>
                    <!--end c@rd-->
 
                </div>

            </div>
                    
            <div class="col-3 bg-light p-4 pt-2">
                <div><center><h3>Cart <div class="badge bg-primary rounded-circle">3</div></h3></center></div>

                    <div class="table-responsive" style="height:630p; overflow-y: scroll;">
                        <table class="table table-stripped table-hover">
                            <tr>
                                <th>Image</th><th>Description</th><th>Amount</th>
                            </tr>

                            <!--first item-->
                            <tr>
                                <td style="width:110px"><img src="assets/images/caramel.png" class="rounded border" style="width:100px;height:100px"></td>
                                <td class="text">
                                    Caramell

                                    <div class="input-group my-3" style="max-width:150px">
                                        <span class="input-group-text" style="cursor: pointer"><i class="fa fa-minus"></i></span>
                                        <input type="text" class="form-control" placeholder="1" value="1">
                                        <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
                                    </div>

                                </td>
                                <td style="font-size:20px"><b>₱50.00</b></td>
                            </tr>
                            <!--first item-->

                            <!--second item-->
                            <tr>
                                <td style="width:110px"><img src="assets/images/americano.png" class="rounded border" style="width:100px;height:100px"></td>
                                <td class="text">
                                    Americano

                                    <div class="input-group my-3" style="max-width:150px">
                                        <span class="input-group-text" style="cursor: pointer"><i class="fa fa-minus"></i></span>
                                        <input type="text" class="form-control" placeholder="1" value="1">
                                        <span class="input-group-text" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
                                    </div>

                                </td>
                                <td style="font-size:20px"><b>₱45.00</b></td>
                            </tr>
                            <!--second item-->
                    
                        </table>
                    </div>

                    <div class="alert alert-danger" style="font-size:20px">Total: ₱95.00</div>

                    <div class="">
                        <button class="col btn btn-success my-2 w-100 py-3">Checkout</button>
                        <button class="col btn btn-danger my-2 w-100">Clear Cart</button>
                    </div>
            </div>
        </div>
        
    
<?php require views_path('partials/footer');?>