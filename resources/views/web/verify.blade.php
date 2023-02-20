@include('auth.header')
<style>
.carousel-slidetxt .carousel-inner {
    height: 100% !important;
}
.alert.alert-info {
 color: white !Important;
    background-color: #8dc14b !Important;
    border: none;
    font-size: 15px;
    font-weight: 700;
    padding: 17px;
    border-radius: 0px !important;
    font-weight: normal;
}
.showme.btn.btn-success.btn-small {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    color: white !important;
    border: none;
}
.showme.btn.btn-success.btn-small a {
    color: white !important;
}
.btn-success {
    /*background-color: #e6fcf6;*/
    color: #7be7d1 !important;
    width: 100%;
    padding: 10px;
}

.form-padd .input-group {
    margin-bottom: 15px;
}
.hides {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    padding: 13px;
    color: #FFFFFF;
        border-radius: 6px;

}
.carousel-slidetxt .carousel-inner{
     height:inherit!important;
}
.box-inner{
    height: 555px !important;
}
.footer-secs{
  bottom:0;
}
.d-sm-flex.justify-content-center.justify-content-sm-between {
    padding: 20px;
}
</style>

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

        <div class="carousel-inner inner box-inner" role="listbox">

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
            {!! \Session::get('success') !!}  </ul>
        </div>
        @endif
         
        @if(\Session::get('second'))
         <div class="alert alert-info">
             {{'OTP has been sent to your Email :' .'xxxxxx'.substr(Session::get('second'),6,30)}}
         </div>
        @endif
         
         
        @if(!empty(Session::get('emai')))
            <div class="alert alert-info">
               {!! \Session::get('emai') !!}  </ul>
            </div>
        @endif
            
    
        @if(!empty(Session::get('mob')))
            <div class="alert alert-info">
               {!! \Session::get('mob') !!}  </ul>
            </div>
        @endif
        
              <div class="auth-form-transparent text-left p-3">
                <h4>Verify Otp </h4>
                <form class="pt-3" action="{{ url('verified-otp') }}" method="Post">
                        @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-8">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-email-outline text-primary"></i>
                            </span>

                        </div>
                        <input type="number" onKeyPress="if(this.value.length==4) return false;" placeholder="Enter Email Otp" id="phone_no" class="form-control" name="mobNo" required />
                        @if($errors->has('emailotp'))
                        <span class="error">Please Enter Otp</span>
                        @endif
                        </div></div>
                         <div class="col-lg-4">
                        <div class="hides">RESEND OTP =<span id="timer"></span></div>
                        <div class="showme btn btn-success btn-small" style="display:none;"><a href="{{ url('resendemail') }}"> Resend</a></div></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-8">
                        <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-phone-outline text-primary"></i>
                            </span>
                        </div>
                        <input  type="number" onKeyPress="if(this.value.length==4) return false;" name="mobileotp" class="form-control form-control-lg border-left-0" placeholder="Enter Mobile Otp" required>
                        @if($errors->has('mobileotp'))
                        <span class="error">Please Enter Otp</span>
                        @endif
                        </div> </div>
                        <div class="col-lg-4">
                        <div class="hides">RESEND OTP =<span id="timers"></span></div>
                        <div class="showme btn btn-success btn-small" style="display:none;"><a href="{{ url('resend') }}">Resend</a></div></div>

                    </div>
                    <div class="mb-2">
                        <button class="btn btn-block btn-facebook auth-form-btn">
                            Verified Securely<i class="mdi mdi-chevron-right"></i></button>
                    </div>

                </form>
                </div>

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
    let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;

  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  document.getElementById('timers').innerHTML = m + ':' + s;
  remaining -= 1;

  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  $(".hides").hide();
  $(".showme").show();
  // Do timeout stuff here
  //alert('Timeout for otp');
}

timer(60);
</script>
