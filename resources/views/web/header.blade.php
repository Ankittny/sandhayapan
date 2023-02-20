<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!-- <link href="http://fonts.cdnfonts.com/css/trebuchet-ms-2" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}
marquee {
    margin: 26px 0 0;
}
[data-theme-version="dark"] .deznav {
    background-color: #fff !important;
}
</style>

     </div>
                    @php
                        $cr = DB::table('wallets')->where(['agetid'=>Session::get('agetid'),'status'=>'credit'])->sum('amount');
                        $dr = DB::table('wallets')->where(['agetid'=>Session::get('agetid'),'status'=>'debit'])->sum('amount');
                    @endphp

<body class="">
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
                                                    <input type="text" name="utrbank" placeholder="" class="form-control" id="fname" onkeyup="myFunction(this)" required/>
                                                    <span id="utrid" style="color:red;"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-2 padd-btn ">
                                                <input type="submit" name="submit" value="Submit" class="btn btn-primary buttonsss down7913">
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



    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas sticky  " id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                <a class="sidebar-brand brand-logo" href="{{ url('deshbord') }}">
                    <img src="{{ asset('public/web') }}/images/LOGO-removebg-preview.png">
                </a>
                <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ url('deshbord') }}"><img src="{{ asset('public/web') }}/images/LOGO-removebg-preview.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <!--<li class="nav-item nav-profile">-->
                <!--  <a href="#" class="nav-link">-->
                <!--    <div class="nav-profile-image">-->


                <!--change to offline or busy as needed-->
                <!--    </div>-->
                <!--<div class="nav-profile-text d-flex flex-column pr-3">-->
                <!--  <span class="font-weight-medium mb-2">SANDHYA PAN INDIA</span>-->

                <!--</div>-->

                <!--  </a>-->
                <!--</li>-->
                <li class="nav-item nav-profile blance">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">

                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                   

                        <div class="nav-profile-text d-flex flex-column pe-3">
                            <span class="font-weight-medium mb-2 C-AVIL"> AVAILABLE BALANCE</span>
                             <span class="font-weight-normal">{{$cr-$dr}} INR</span>
                            <button class="add btn btn-primary font-weight-regular text-nowrap fund btn-funds" id="add-task" data-toggle="modal" data-target="#basicModal"> ADD FUND </button>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Heading</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Modal body..
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-profile blance">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-text d-flex flex-column pe-3">
                            <span class="font-weight-normal menu-s">MENU</span>
                            <!-- The Modal -->
                        </div>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <img src="{{ asset('public/web') }}/images/baseline_grid_view_black_24dp-removebg-preview.png">
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
       <img src="{{ asset('public/web') }}/images/outline_manage_accounts_black_24dp.png">
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link" href="">Pending KYC</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link" href=".">Transfer Users  </a>-->
                <!--</li>-->
                <li class="nav-item">

                  <a class="nav-link" href=""> <img src="{{ asset('public/web') }}/images/outline_group_add_black_24dp.png">Create Users  </a>
                </li>
                   <li class="nav-item">
                  <a class="nav-link" href=""><img src="{{ asset('public/web') }}/images/outline_contacts_black_24dp.png">List of Users   </a>
                </li>
              </ul>
            </div>
          </li>
                <!--<li class="nav-item">-->
                <!--  <a class="nav-link" href="{{url('kyc')}}">-->
                <!--<i class="mdi mdi-chart-bar menu-icon"></i>-->

                <!--    <span class="menu-title">KYC</span>-->
                <!--  </a>-->
                <!--</li>-->
                <!--  <li class="nav-item">-->
                <!--    <a class="nav-link" href="services.html">-->
                <!--        <img src="{{ asset('public/kyc') }}/images/apps.png">-->
                        <!--<i class="mdi mdi-contacts menu-icon"></i>-->
                <!--        <span class="menu-title">KYC</span>-->
                <!--    </a>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link" href="services">
                        <img src="{{ asset('public/web') }}/images/apps.png">
                        <!--<i class="mdi mdi-contacts menu-icon"></i>-->
                        <span class="menu-title">Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orderHistory">
                        <img src="{{ asset('public/web') }}/images/images.png">

                        <!--<i class="mdi mdi-contacts menu-icon"></i>-->
                        <span class="menu-title">Order History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="txnHistory">
                        <!--<i class="mdi mdi-format-list-bulleted menu-icon"></i>-->
                        <img src="{{ asset('public/web') }}/images/account.png">
                        <span class="menu-title">TXN History</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="video-tutorial">
                        <!--<i class="mdi mdi-format-list-bulleted menu-icon"></i>-->
                        <img src="{{ asset('public/web') }}/images/outline_video_library_black_24dp.png">
                        <span class="menu-title">Video</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="helpSupport">
                        <!--<img scr="images/baseline_bar_chart_black_24dp.png">-->
                        <img src="{{ asset('public/web') }}/images/outline_support_black_24dp-removebg-preview.png">
                        <span class="menu-title">Help Supports</span>

                    </a>

                </li>

                <button class="navbar-toggler navbar-toggler align-self-center me-2 btn-minimize rotate" type="button" data-toggle="minimize">
                    <i class="mdi mdi-chevron-left "></i>
                </button>
            </ul>

        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>

            <div class="main-panel">

                <div class="content-wrapper pb-0">
                    <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">

                        <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="{{ asset('public/web') }}/images/LOGO-removebg-preview.png" style="width:100%;"></a>

                            <ul class="navbar-nav">

                                <li class="nav-item ">
                                    <a class="nav-link center-icon" href="#">
                                        <i class="mdi mdi-subtitles-outline"></i>
                                        <!--<span class="menu-title">welcome</span>-->
                                    </a>
                                </li>

                                <li class="nav-item dropdown d-none d-sm-flex">

                                    <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                                        <h6 class="p-3 mb-0">Messages</h6>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                                <span class="badge badge-pill badge-success">Request</span>
                                                <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                        </a>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                                <span class="badge badge-pill badge-warning">Invoices</span>
                                                <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                        </a>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-item-content flex-grow">
                                                <span class="badge badge-pill badge-danger">Projects</span>
                                                <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                                            </div>
                                            <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                                        </a>
                                        <h6 class="p-3 mb-0">See all activity</h6>
                                    </div>
                                </li>

                            </ul>

                            @php
                                $welcomemsg = DB::table('welcomemsg')->first();
                            @endphp
                            <marquee attribute_name = "attribute_value"....more attributes>
                               <?= $welcomemsg->msg ?? '' ?>
                             </marquee>
                            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                                <li class="nav-item dropdown d-none d-xl-flex border-0">
                                    <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">

                                        <!--<div class="user-status user-status-verified">Verified</div>-->
                                        <i class="mdi mdi-account account"></i> {{ ucfirst(Session::get('name')) }} </a>
                                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">

                                        <div class="d-flex align-items-start">
                                            <div class="mr-3">
                                                <div class="p-4 rounded-circle pro-icon text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                                                    <img src="{{ asset('public/web') }}/assets/images/faces/face4.jpg" alt="" class="profile-pic images-pic">
                                                <!--<i class="fa-solid fa-question"></i>    -->
                                        @if(Session::get('status')=="0")        
                                                    <span class="pro-count blue"><i class="fa fa-question-circle"></i></span>
                                        @else
                                        
                                          <span class="pro-count blue"><i class="fa fa-check check"></i></span>
                                        @endif
                                                    
                                                </div>
                                            </div>
                                            <div class="">
                                                <h5 class="mb-2" style="font-weight: 600;">{{ ucfirst(Session::get('name')) }}</h5>
                                                <p class="text-secondary">{{ Session::get('email') }}</p>
                                            </div>
                                        </div>
                                        <div class="nav-profile-text d-flex flex-column pe-3 top-border">
                                            <span class="font-weight-medium mb-2 C-AVIL"> AVAILABLE BALANCE</span>
                                            <span class="font-weight-normal INR-sec">{{$cr-$dr}} INR</span>

                                        </div>


                                        <div class="drop-item">
                                            <a class="dropdown-item" href="profile">
                                                <img src="{{ asset('public/web') }}/images/person_FILL0_wght400_GRAD0_opsz48.png">View Profile </a> <a class="dropdown-item" href="#">
                                                <img src="{{ asset('public/web') }}/images/settings_FILL0_wght400_GRAD0_opsz48.png">Account Setting </a>

                                            <a class="dropdown-item" href="commission">
                                                <img src="{{ asset('public/web') }}/images/show_chart_FILL0_wght400_GRAD0_opsz48.png"> Commission Structure </a>
                                            <a class="dropdown-item signout" href="{{ url('logout') }}">
                                                <img src="{{ asset('public/web') }}/images/logout_FILL0_wght400_GRAD0_opsz48.png"> Signout </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline icons"></i>
                                        <span class="count count-varient1">7</span>
                                    </a>
                                    <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list left-notification" aria-labelledby="notificationDropdown">
                                        <h6 class="p-3 mb-0">Notifications</h6>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="{{ asset('public/web') }}/assets/images/faces/face4.jpg" alt="" class="profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                                                </p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="{{ asset('public/web') }}/assets/images/faces/face3.jpg" alt="" class="profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                                                </p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <img src="{{ asset('public/web') }}/assets/images/faces/face2.jpg" alt="" class="profile-pic">
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                                                </p>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <p class="p-3 mb-0">View all activities</p>
                                    </div>
                                </li>
                            </ul>
                            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                                <span class="mdi mdi-menu"></span>
                            </button>
                        </div>
                    </nav>
                    
<script>
    function myFunction(e){
      $.ajax({
        method:"get",
        url:"{{ url('getdata') }}/"+e.value,
        success:function(data){
           if(data.status=="200"){
            $('.down7913').prop('disabled', true);
              $("#utrid").html(data.msg);
           } else {
            $('.down7913').prop('disabled', false);
            $("#utrid").html("");
           }
        }
      });
    }
</script>
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
</body>
