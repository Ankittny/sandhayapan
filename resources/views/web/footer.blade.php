

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

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal2"> Wallet ONLINE</button>
                                            <p>Your Payment will be automatically Added throught Wallet online button Read the below Charges Carefully </p>

                                            @php
                                            $online = DB::table('paymentmeth')->where('payment_type','Online')->get();
                                            $offline = DB::table('paymentmeth')->where('payment_type','Offline')->get();
                                            @endphp
                                            <div class="table-responsive">
                                                <table class="table table-bordered border-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Payment Mode</th>
                                                            <th>Charges</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <tr>
                                                            <td>Credit Card - CC </td>
                                                            <td>3.00%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Debit Card - DC </td>
                                                            <td>3.00%</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Net Banking Card - NB </td>
                                                            <td>3.00%</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Payment Wallet - PPI</td>
                                                            <td>3.00%</td>
                                                        </tr>

                                                        <tr>
                                                            <td>UPI - Paytm Getway</td>
                                                            <td>3.00%</td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>

                                        <div class="col-lg-6 pad  button-secs ">
                                            <button type="button" class="btn btn-primary showmodel"> Wallet OFFLINE </button>

                                            <p>Your Payment will be automatically Added throught Wallet online button Read the below Charges Carefully </p>

                                            <div class="table-responsive">
                                                <table class="table table-bordered border-table">
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
                                                    </tbody>
                                                </table>
                                            </div>
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
                            <input type="text" name="status" value="credit" class="form-control" required />
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
                                                <input type="text" name="amount" placeholder="" class="form-control" required/>
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
                                                <td>Credit Card - CC </td>
                                                <td>3.00%</td>
                                            </tr>
                                            <tr>
                                                <td>Debit Card - DC </td>
                                                <td>3.00%</td>
                                            </tr>

                                            <tr>
                                                <td>Net Banking Card - NB </td>
                                                <td>3.00%</td>
                                            </tr>

                                            <tr>
                                                <td>Payment Wallet - PPI</td>
                                                <td>3.00%</td>
                                            </tr>

                                            <tr>
                                                <td>UPI - Paytm Getway</td>
                                                <td>3.00%</td>
                                            </tr>



                                            <!--<tr>-->
                                            <!--    <td>1</td>-->
                                            <!--    <td>Herman Beck</td>-->
                                            <!--    <td class="border-s"></td>-->
                                            <!--    <td class="border-s"></td>-->

                                            <!--</tr>-->
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
                                                <input type="text" name="amount" placeholder="" class="form-control newprice" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 padd-btn ">
                                            <button type="button" class="btn btn-primary amountsdd">Submit</button>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>




        </div>
    </div>
</div>



<div class="modal fade" id="basicModal4" tabindex="-1" role="dialog" aria-labelledby="basicModal4" aria-hidden="true">
    <div class="modal-dialog box-secss" style="max-width:780px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wallet Offlined</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
            </div>

                <div class="modal-body body-m">
                    <div class="col-md-12" hidden>
                        <div class="form-group">
                            <input type="text" name="status" value="credit" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card card-stretch ">
                        <div class="card">
                            <div class="card-body">
                                <form id="onclikmydata" action="{{ url('paymetrequest') }}" method="post">
                                    @csrf
                                    <div class="btn-box">
                                        <div class="row right-border border-bdm">

                                            <div class="col-lg-5 ">
                                                <div class="form-group">
                                                    <label> Amount </label>
                                                    <input type="text" name="amount" placeholder="" class="form-control newprice" readonly/>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 ">
                                                <div class="form-group">
                                                    <label> UTR No/ Bank Refrence</label>
                                                    <input type="text" name="utrbank" placeholder="" class="form-control keybind" required/>
                                                </div>
                                            </div>

                                            <div class="col-lg-2 padd-btn ">
                                                <input type="submit" name="submit" value="Submit" class="btn btn-primary buttonsss">
                                                {{--  <button type="button" class="btn btn-primary"> Submit </button>  --}}
                                            </div>

                                        </div>
                                    </div>
                            </form>
                                <div class="row left-space">
                                    <div class="col-lg-7">

                                        <div class="table-responsive padd-sec">
                                            <table class="table table-bordered border-table table-table-s">
                                @php
                                    $bank = DB::table('paymentmeth')->where('payment_type','bank')->get();
                                @endphp
                                    @if($bank->count()> 0)
                                        @foreach($bank as $items)
                                                <thead>
                                                    <tr>
                                                        <th style="   border-right: none !important;">Account Details</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ACCOUNT NAME</td>
                                                        <td>{{ $items->account_name ?? '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ACCOUNT NUMBER</td>
                                                        <td>{{ $items->account_number ?? '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BANK IFSC</td>
                                                        <td>{{ $items->bank_ifsc ?? '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BANK NAME</td>
                                                        <td>{{ $items->bank_name ?? '' }}</td>
                                                    </tr>
                                                </tbody>
                                        @endforeach
                                    @endif

                                            </table>
                                        </div>


                                    </div>


                                    <div class="col-lg-5">
                                        <div class="bar-code">
                                            <h1>SANDHYA PAN INDIA</h1>
                                             <div id="results"></div>
                                            {{--  <img src="public/web/assets/images/barcode-removebg-preview.png">  --}}
                                            <p>Scan and Pay Using any UPI App</p>
                                            <img src="public/web/assets/images/upiapps.png" </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




        </div>
    </div>
</div>
</div>




<footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span>
            </div>
            </footer>
            </div>
            <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->



<script>
    // INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );
</script>
      <script src="{{ asset('public/web') }}/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ asset('public/web') }}/assets/vendors/chart.js/Chart.min.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.resize.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.categories.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.stack.js"></script>
      <script src="{{ asset('public/web') }}/assets/vendors/flot/jquery.flot.pie.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{ asset('public/web') }}/assets/js/off-canvas.js"></script>
      <script src="{{ asset('public/web') }}/assets/js/hoverable-collapse.js"></script>
      <script src="{{ asset('public/web') }}/assets/js/misc.js"></script>

      <!-- endinject -->

   </body>
</html>

<script>
    $(function(){
      $('.amountsdd').click(function(){


         var newprice = $('.newprice').val();
         if(newprice==""){
            alert("Please Enter Amount!");
         } else {
            $.ajax({
                url: "{{url('genrateqrcode')}}"+'/'+newprice,
                method:"get",
                success:function(data){
                   $("#results").html(data);
                }
            });

            $('#basicModal3').modal('hide');
            $('#basicModal4').modal('show');
            $(".newprice").val(newprice);
         }


      });
    });
</script>

<script>
    $(function(){
        $('#onclikmydata').submit(function(e){
            e.preventDefault();
            $('.down7913').prop('disabled', false);
            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    setTimeout(function(){
                        alert('Successfull Add!');
                        {{--  window.location.reload(1);  --}}
                     }, 1000); // show response from the php script.
                }
            });

        });
    });
</script>

<script>
    $(function(){
        $('.showmodel').click(function(){
            $('#basicModal').modal('hide');
            $('#basicModal3').modal('show');
        });
    });
</script>

<script>
    $(".rotate").click(function() {
        $(this).toggleClass("down");
    })
</script>

