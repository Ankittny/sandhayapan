@include('admin.header')
@include('admin.sidebar')
<style>
    .card-header {
        display: block !important;
    }

    i.mdi.mdi-chevron-down {
        position: absolute;
        right: 22px;
        top: 7px;
        z-index: -1;
        color: #6e6e6e !important;
    }

    a.btn.btn-block.btn-primary.btn-lg.font-weight-medium.auth-form-btn {
        padding: 6px !important;
        border-radius: 4px !important;
        background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
        border: none !important;
    }

    [data-theme-version="dark"] .form-control {
        color: #000 !important;
    }

    i.mdi {
        color: #d900c5 !important;
    }

    .card {
        background: 0 !important;
    }

    label {
        color: #000;
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 7px !important;
        display: inline-block;
    }

    span.input-group-text {
        border: 1px solid #ddd !important;
        padding: 6px;
    }

    span.input-group-text {
        height: 40px;
    }

    h4.card-title {
        color: #000 !important;
        /* margin-bottom: 18px; */
        /* display: inline-block; */
    }

    .basic-form input {
        background: 0 !important;
        border: 1px solid #ddd !important;
        border-radius: 0px !IMPORTANT;
    }

    select.select.form-select.form-select-lg.mb-3 {
        background: 0 !important;
        border: 1px solid #ddd;
        border-radius: 0px !important;
        font-size: 14px;
        height: 2.5rem;
    }

    .card {
        border: 1px solid #ddd;
    }

    [data-theme-version="dark"] .card-header {
        border-color: #2a2833;
        border-bottom: none !important;
    }

    [data-theme-version="dark"] {
        /* background: #05031A; */
        color: #828690;
        background: 0 !important;
    }

</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Payment method</h4>
                        {{-- <span>Join us today! It takes Only few Steps</span>  --}}
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            @if (\Session::has('success'))
                            <div class="alert alert-info">
                                {!! \Session::get('success') !!}
                            </div>
                            @endif
                            <form action="{{ url('admin/addpaymentmeths') }}" method="Post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-xl-6 col-lg-6">
                                        <label>Payment Type</label>
                                        <div class="input-group mb-3 input-warning-o">
                                            <select class="form-control payment_type" name="payment_type">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <option value="upi">Upi</option>
                                                <option value="bank">Bank</option>

                                            </select>
                                            @if($errors->has('payment_type'))
                                            <span class="error">{{ $errors->first('payment_type') }}</span>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 upidide">
                                        <label>UPI Id</label>
                                        <div class="input-group mb-3 input-success-o">
                                            <input type="text" class="form-control" name="upiid" placeholder="Enter Your Upi id">
                                            @if ($errors->has('upiid'))
                                            <span class="error" style="color:red">{{ $errors->first('upiid') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 upidide">
                                        <label>Name</label>
                                        <div class="input-group mb-3 input-success-o" >
                                            <input type="text" class="form-control" name="name" placeholder="Enter Your commision">
                                            @if ($errors->has('name'))
                                            <span class="error" style="color:red">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    {{--  <div class="col-xl-6 col-lg-6 hidefields">
                                        <label>Commission</label>
                                        <div class="input-group mb-3 input-success-o">
                                            <input type="text" class="form-control" name="commision" placeholder="Enter Your commision">
                                            @if ($errors->has('commision'))
                                            <span class="error" style="color:red">{{ $errors->first('commision') }}</span>
                                            @endif
                                        </div>
                                    </div>  --}}

                                    <div class="col-xl-6 col-lg-6 hidefields">
                                        <label>Account Name</label>
                                        <div class="input-group mb-3 input-success-o">
                                            <input type="text" class="form-control" name="account_name" placeholder="Enter Your account name">
                                            @if ($errors->has('account_name'))
                                            <span class="error" style="color:red">{{ $errors->first('account_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 hidefields">
                                        <label>Account Number</label>
                                        <div class="input-group mb-3 input-success-o">

                                            <input type="text" class="form-control" name="account_number" placeholder="Enter Your account_number">
                                            @if ($errors->has('account_number'))
                                            <span class="error" style="color:red">{{ $errors->first('account_number') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 hidefields">
                                        <label>Bank Ifsc</label>
                                        <div class="input-group mb-3 input-success-o">

                                            <input type="text" class="form-control" name="bank_ifsc" placeholder="Enter Your bank_ifsc">
                                            @if ($errors->has('bank_ifsc'))
                                            <span class="error" style="color:red">{{ $errors->first('bank_ifsc') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 hidefields">
                                        <label>Bank Name</label>
                                        <div class="input-group mb-3 input-success-o">

                                            <input type="text" class="form-control" name="bank_name" placeholder="Enter Your bank_name">
                                            @if ($errors->has('bank_name'))
                                            <span class="error" style="color:red">{{ $errors->first('bank_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div class="mt-3" style="background: #663399  border-radius: 12px !important;">
                                        <input type="submit" value="Submit" class="btn btn-danger mb-2" style="background: #663399  border-radius: 12px !important;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
   Content body end
   ***********************************-->
@include('admin.footer')

<script>
    $(function() {
        $(".payment_type").change(function(){
            var value = $(this).val();
            if (value == "upi") {
                $(".upidide").fadeIn();
                $(".hidefields").fadeOut();
            } else {
                $(".upidide").fadeOut();
                $(".hidefields").fadeIn();
            }
        });
    });

</script>
