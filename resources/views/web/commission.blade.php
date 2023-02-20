@include('web.header')
<section class="services table-profile table-commission">
   <div class="container wrapper">
      <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title ">Commission Charts</h4>
                  <div class="table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th >Profile</th>
                              <th class="right-tab">VatNo.</th>
                           </tr>
                        </thead>
                        <tbody>
                            @php
                                $comission = DB::table('commission')->get();
                            @endphp
                          @foreach ($comission as $item)
                          <tr>
                            <td>{{ $item->profile ?? ''  }} </td>
                            <td class="right-tab">{{ $item->vat_no ?? ''  }}</td>
                         </tr>
                          @endforeach

                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
@include('web.footer')
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog box-secss">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Fund</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>
            <form method="post" action="{{route('paytm.payment')}}">
                @csrf
                <div class="modal-body body-m">
                    <div class="col-md-12" hidden>
                        <div class="form-group">
                            <input type="text" name="status" value="credit" class="form-control" />
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label> Enter Amount </label>-->
                    <!--    <input type="text" name="amount" placeholder="RS 10" class="form-control" />-->
                    <!--</div>-->

                    <div class="col-lg-12 grid-margin stretch-card card-stretch ">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-box">
                                    <div class="row right-border">

                                        <div class="col-lg-6 pad button-secs ">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal2"> Wallet ONLINE </button>
                                        </div>

                                        <div class="col-lg-6 pad  button-secs ">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal3"> Wallet OFFLINE </button>
                                        </div>

                                        <div class="col-lg-6 pad ">
                                            <p>Your Payment will be automatically Added throught Wallet online button Read the below Charges Carefully </p>
                                        </div>
                                        <div class="col-lg-6 pad ">
                                            <p>Your Payment will be automatically Added throught Wallet online button Read the below Charges Carefully </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-table">
                                        <thead>
                                            <tr>
                                                <th>Payment Mode</th>
                                                <th>Charges</th>
                                                <th>Payment Mode</th>
                                                <th>Charges</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Herman Beck</td>
                                                <td>$ 77.99</td>
                                                <td>$ 77.99</td>

                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Herman Beck</td>
                                                <td>$ 77.99</td>
                                                <td>$ 77.99</td>

                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Herman Beck</td>
                                                <td class=""></td>
                                                <td class=""></td>

                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Herman Beck</td>
                                                <td class="border-s"></td>
                                                <td class="border-s"></td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal2" aria-hidden="true">
    <div class="modal-dialog box-secss">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wallet Online</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>
            <form method="post" action="{{route('paytm.payment')}}">
                @csrf
                <div class="modal-body body-m">
                    <div class="col-md-12" hidden>
                        <div class="form-group">
                            <input type="text" name="status" value="credit" class="form-control" />
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label> Enter Amount </label>-->
                    <!--    <input type="text" name="amount" placeholder="RS 10" class="form-control" />-->
                    <!--</div>-->
                    <div class="col-lg-12 grid-margin stretch-card card-stretch ">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-box">
                                    <div class="row right-border">
                                        <div class="col-lg-8 ">
                                            <div class="form-group">
                                                <label> Amount </label>
                                                <input type="text" name="amount" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 padd-btn ">
                                            <input class="btn btn-primary dddddd" type="Submit" name="submit">
                                            {{-- <button type="button" class="btn btn-primary"> Submit </button>  --}}
                                        </div>
                                        <div class="col-lg-12 pads ">
                                            <p>Your Payment will be automatically Added throught Wallet online button Read the below Charges Carefully Read the below Charges Carefully Read the below Charges Carefully </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-table table-table-s">
                                        <thead>
                                            <tr>
                                                <th>Payment Mode</th>
                                                <th>Charges</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>
                                            </tr>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="basicModal3" tabindex="-1" role="dialog" aria-labelledby="basicModal3" aria-hidden="true">
    <div class="modal-dialog box-secss">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wallet Offline</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>
            <form method="post" action="{{route('paytm.payment')}}">
                @csrf
                <div class="modal-body body-m">
                    <div class="col-md-12" hidden>
                        <div class="form-group">
                            <input type="text" name="status" value="credit" class="form-control" />
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label> Enter Amount </label>-->
                    <!--    <input type="text" name="amount" placeholder="RS 10" class="form-control" />-->
                    <!--</div>-->

                    <div class="col-lg-12 grid-margin stretch-card card-stretch ">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-box">
                                    <div class="row right-border">

                                        <div class="col-lg-8 ">
                                            <div class="form-group">
                                                <label> Amount </label>
                                                <input type="text" name="amount" placeholder="" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 padd-btn ">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal4"> Submit </button>
                                        </div>

                                        <div class="col-lg-12 pads ">
                                            <p>Your Payment will be Added 1 to 2 Hours throught Wallet Offline button , Please Read the below Charges Carefully.. Read the below Charges Carefully Read the below Charges Carefully </p>
                                        </div>


                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered border-table table-table-s">
                                        <thead>
                                            <tr>
                                                <th>Payment Mode</th>
                                                <th>Charges</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>QR-UPI</td>
                                                <td>0.00 %</td>


                                            </tr>
                                            <tr>
                                                <td>Bank Ac</td>
                                                <td>0.00 %</td>


                                            </tr>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>


                                            </tr>
                                            <tr>
                                                <td>Creadit Card -CC</td>
                                                <td>3.00 %</td>


                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="basicModal4" tabindex="-1" role="dialog" aria-labelledby="basicModal4" aria-hidden="true">
    <div class="modal-dialog box-secss" style="max-width:780px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wallet Offline</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>
            <form method="post" action="{{route('paytm.payment')}}">
                @csrf
                <div class="modal-body body-m">
                    <div class="col-md-12" hidden>
                        <div class="form-group">
                            <input type="text" name="status" value="credit" class="form-control" />
                        </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--    <label> Enter Amount </label>-->
                    <!--    <input type="text" name="amount" placeholder="RS 10" class="form-control" />-->
                    <!--</div>-->

                    <div class="col-lg-12 grid-margin stretch-card card-stretch ">
                        <div class="card">
                            <div class="card-body">
                                <div class="btn-box">

                                    <div class="row right-border border-bdm">

                                        <div class="col-lg-5 ">
                                            <div class="form-group">
                                                <label> Amount </label>
                                                <input type="text" name="amount" placeholder="" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-5 ">
                                            <div class="form-group">
                                                <label> UTR No/ Bank Refrence </label>
                                                <input type="text" name="amount" placeholder="" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-lg-2 padd-btn ">
                                            <button type="button" class="btn btn-primary"> Submit </button>
                                        </div>




                                    </div>


                                </div>


                                <div class="row left-space">
                                    <div class="col-lg-7">
                                        <div class="table-responsive padd-sec">
                                            <table class="table table-bordered border-table table-table-s">
                                                <thead>
                                                    <tr>
                                                        <th style="   border-right: none !important;">Account Details</th>
                                                        <th></th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ACCOUNT NAME</td>
                                                        <td>SANDHYA PAN INDIA</td>


                                                    </tr>
                                                    <tr>
                                                        <td>ACCOUNT NUMBER</td>
                                                        <td>619187675667</td>


                                                    </tr>
                                                    <tr>
                                                        <td>BANK IFSC</td>
                                                        <td>PYMTO12456</td>


                                                    </tr>
                                                    <tr>
                                                        <td>BANK NAME</td>
                                                        <td>PAYTM PAYMENTS BANK</td>


                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive padd-sec">
                                            <table class="table table-bordered border-table table-table-s">
                                                <thead>
                                                    <tr>
                                                        <th style="   border-right: none !important;">Account Details</th>
                                                        <th></th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ACCOUNT NAME</td>
                                                        <td>SANDHYA PAN INDIA</td>


                                                    </tr>
                                                    <tr>
                                                        <td>ACCOUNT NUMBER</td>
                                                        <td>619187675667</td>


                                                    </tr>
                                                    <tr>
                                                        <td>BANK IFSC</td>
                                                        <td>PYMTO12456</td>


                                                    </tr>
                                                    <tr>
                                                        <td>BANK NAME</td>
                                                        <td>PAYTM PAYMENTS BANK</td>


                                                    </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="col-lg-5">
                                        <div class="bar-code">
                                            <h1>SANDHYA PAN INDIA</h1>
                                            <img src="public/web/assets/images/barcode-removebg-preview.png">
                                            <p>Scan and Pay Using any UPI App</p>
                                            <img src="public/web/assets/images/upiapps.png" </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


            </form>

        </div>
    </div>
</div>
</div>
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/js-grid.js"></script>
<script src="assets/js/jquery.dataTables.js"></script>
<script src="assets/js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page -->
<script>
   $(".rotate").click(function () {
   $(this).toggleClass("down");
   })
</script>
