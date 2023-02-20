@include('auth.header')
<body>
    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper padd-0">
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

            <div class="main-panel login">
                <div class="content-wrapper pb-0 service-card card-services">



                    <div class="row">
                        <div class="col-lg-6 ">
                            <div id="carousel" class="carousel slide slider-carousel carousel-slidetxt" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner inner" role="listbox">

                                    <div class="carousel-item active" style="background-image: url('https://www.bootstrapdash.com/demo/breeze/jquery/template/assets/images/carousel/banner_1.jpg'); background-size: cover;">

                                    </div>

                                    <div class="carousel-item" style="background-image: url('https://www.bootstrapdash.com/demo/breeze/jquery/template/assets/images/carousel/banner_1.jpg'); background-size: cover;">
                                        <!--<div class="caption">-->
                                        <!--  <h1>Something and share your whatever</h1>-->
                                        <!--  <h2>Else it easy for you to do whatever this thing does.</h2>-->

                                        <!--  <a class="big-button" href="" title="">Create Project</a>-->
                                        <!--  <div class="clear"></div>-->
                                        <!--  <a class="view-demo" href="" title="">View Demo</a>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="carousel-item" style="background-image: url('https://www.bootstrapdash.com/demo/breeze/jquery/template/assets/images/carousel/banner_1.jpg'); background-size: cover;">
                                        <!--<div class="caption">-->
                                        <!--  <h1>Create and share your whatever</h1>-->
                                        <!--  <h2>Make it easy for you to do whatever this thing does.</h2>-->
                                        <!--</div>-->
                                    </div>

                                </div>

                                <!--<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">-->
                                <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                                <!--  <span class="sr-only">Previous</span>-->
                                <!--</a>-->
                                <!--<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">-->
                                <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                                <!--  <span class="sr-only">Next</span>-->
                                <!--</a>-->

                            </div>
                        </div>

                        <div class="col-lg-6 form-padd ">

                            @if(\Session::has('success'))
                            <div class="alert alert-info">
                                {!! \Session::get('success') !!} </ul>
                            </div>
                            @endif
                            <div class="auth-form-transparent text-left p-3">

                                <h4>Login to Access Your Account</h4>

                                <form class="pt-3" onchange="onFormUpdate()" method="POST" action="{{ url('forgetpassword') }}" >
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-phone-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="number" name="mobile" class="form-control form-control-lg border-left-0" placeholder="Mobile No " onKeyPress="if(this.value.length==10) return false;" id="forgotMobile" >
                                            @if($errors->has('mobile'))
                                            <span class="error">{{ $errors->first('mobile') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    {{--  <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
                                            @if($errors->has('password'))
                                            <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>  --}}

                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="mb-2">
                                        <button class="btn btn-block btn-facebook auth-form-btn" id="forgotPassword" disabled="disabled">
                                                Send Password<i class="mdi mdi-chevron-right"></i> </button>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4 font-weight-light">Don't want to forgot password? <a href="{{ url('/') }}" class="text-primary">Sign In Instead</a>
                  </div>

                                    {{--  <div class="mt-3">
                                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{ url('regester') }}">Create An Account</a>
                                    </div>  --}}

                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <div class="doubledborder"></div>
 
    <!-- Custom js for this page -->
    <script src="{{ asset('public/web') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('public/web') }}/assets/js/js-grid.js"></script>
    <script src="{{ asset('public/web') }}/assets/js/jquery.dataTables.js"></script>
    <script src="{{ asset('public/web') }}/assets/js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page -->

</body>
</html>

@include('auth.footer')

<script>
  $(document).ready(() => {
  $("input[type=number]").keyup(onFormUpdate);
})

function onFormUpdate() {
   const forgotMobile = $("#forgotMobile").val();

  if (  forgotMobile ) {
    $("#forgotPassword").removeAttr("disabled");
    // $("#register1").removeAttr("disabled");
  } else {
    $("#forgotPassword").attr("disabled", "disabled");
    //  $("#register1").attr("disabled", "disabled");
  }
}
</script>
