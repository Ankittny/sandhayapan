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
      <div id="carousel" class="carousel slide slider-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

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

      <div class="col-lg-6 form-padd">
         
        @if(\Session::has('success'))
            <div class="alert alert-info">
                {!! \Session::get('success') !!} </ul>
            </div>
        @endif
        
        
            <div class="alert alert-info " id="showsss" style="display:none;">
               <span id="emailError"></span>
            </div>
            
            <div class="alert alert-info " id="showsssmob" style="display:none;">
               <span id="mobileError"></span>
            </div>
        
        <!--  <div class="text-center sidebar-brand-wrapper d-flex align-items-center justify-content-center">-->

        <!--  <a class="sidebar-brand brand-logo-mini pl-4 pt-3 logo-register" href="index.html"><img src="images/LOGO-removebg-preview.png" alt="logo"></a>-->
        <!--</div>-->
              <div class="auth-form-transparent text-left p-3 ">

                <h4>Register</h4>
                <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
                <form class="pt-3" onchange="onFormUpdate()" action="{{ url('regester') }}" method="Post">
                    @csrf
                  <div class="form-group">
                    <label>Full Name</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                      </div>
                       <input type="text" id="registerUsername" class="form-control form-control-lg border-left-0" name="name" placeholder="Enter Your Name" value="{{ old('name')}}" onkeydown="return /[a-z ]/i.test(event.key)">

                    </div>
                    @if($errors->has('name'))
                         <span class="error">{{ $errors->first('name') }}</span>
                       @endif
                  </div>
                 <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-email-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="email" id="registerEmail" class="form-control form-control-lg border-left-0 keyupemail" name="email" placeholder="Enter Your Email Address" value="{{ old('email')}}">

                    </div>
                    @if($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                      @endif
                  </div>
                    <div class="form-group">
                    <label>Mobile No</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-phone-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="number" id="registerMobile" class="form-control form-control-lg border-left-0 keyupmobile" name="mobile" placeholder="Enter Your  Mobile No" value="{{ old('mobile')}}" onKeyPress="if(this.value.length==10) return false;"  onkeydown="return event.keyCode !== 69" >

                    </div>
                    @if($errors->has('mobile'))
                    <span class="error">{{ $errors->first('mobile') }}</span>
                   @endif
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-lock-outline text-primary"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control form-control-lg border-left-0" name="password" id="registerPassword" placeholder="Password">

                    </div>
                    @if($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox"  name="termandcondition" id="checkbox1" class="form-check-input " value="on"> I agree to all Terms &amp; Conditions <i class="input-helper" ></i></label>

                    </div>
                    @if($errors->has('termandcondition'))
                     <span class="error">Please Select Terms &amp; Conditions</span>
                   @endif
                  </div>
                  <div class="mt-3" style="display:none;" id="autoUpdate">
                    <button id="register" disabled="disabled" style="margin-bottom: 15px;" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn ">Register</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ url('/') }}" class="text-primary">Sign In Instead</a>
                  </div>
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

    <!-- Custom js for this page -->
    <script src="{{ asset('public/web') }}/assets/js/dashboard.js"></script>
	  <script src="{{ asset('public/web') }}/assets/js/js-grid.js"></script>
	      <script src="{{ asset('public/web') }}/assets/js/jquery.dataTables.js"></script>
    <script src="{{ asset('public/web') }}/assets/js/dataTables.bootstrap4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- End custom js for this page -->

  </body>
</html>
@include('auth.footer')
<script>
    $(function(){
     $('.keyupemail').keyup(function(){
        var email = $(this).val();
           $.ajax({
               method:"get",
               url:"searchemail/"+email,
               success:function(data){
                  if(data.status==200){
                      $("#showsss").fadeIn('slow');
                      $("#emailError").html("This mail address already used in another account");
                  } else{
                      $("#showsss").fadeOut('slow');
                      $("#emailError").html("");
                  }
               }
           });
      });
    });
    
    $(function(){
     $('.keyupmobile').keyup(function(){
        var mobile = $(this).val();
           $.ajax({
               method:"get",
               url:"searchemobile/"+mobile,
               success:function(data){
                  if(data.status==200){
                      $("#showsssmob").fadeIn('slow');
                      
                      $("#mobileError").html("This Mobile No already used in another account");
                  } else{
                      $("#showsssmob").fadeOut('slow');
                      $("#mobileError").html("");
                  }
               }
           });
      });
    });
    
$(document).ready(function () {
    $('#checkbox1').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate').fadeIn('slow');
        else 
            $('#autoUpdate').fadeOut('slow');
    });
});
</script>

<script>
  $(document).ready(() => {
  $("input[type=text]").keyup(onFormUpdate);
  $("input[type=password]").keyup(onFormUpdate);
  $("input[type=number]").keyup(onFormUpdate);
  $("input[type=checkbox]").change(onFormUpdate);
})

function onFormUpdate() {
  const registerUsername = $("#registerUsername").val();
  const registerPassword = $("#registerPassword").val();
   const registerEmail = $("#registerEmail").val();
   const registerMobile = $("#registerMobile").val();
  const acceptedTnC = $("#checkbox1").prop('checked');

  if (registerUsername && registerPassword && registerMobile && registerEmail && acceptedTnC) {
    $("#register").removeAttr("disabled");
    // $("#register1").removeAttr("disabled");
  } else {
    $("#register").attr("disabled", "disabled");
    //  $("#register1").attr("disabled", "disabled");
  }
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</script>
