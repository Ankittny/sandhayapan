@include('web.header') <script src="{{ asset('public/web') }}/assets/js/cities.js"></script>
<style>
  .pay-discrenpancy {
    padding: 10px 38px !important;
  }

  label.label {
    padding: 8px !important;
  }

  .file-input>[type='file'] {
    position: absolute;
    top: 37px;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 10;
    cursor: pointer;
  }

  span.label {
    position: relative;
    top: 7px;
    padding-left: 13px;
  }

  .file-input {
    border: 1px solid #ddd !important;
    height: 39px !important;
    border-radius: 4px !important;
  }

  .file-input>.button {
    display: inline-block;
    cursor: pointer;
    background: #dae2ea;
    padding: 9px 17px;
    border-radius: 2px;
    /* margin-right: 8px; */
    float: right;
    color: #5a6f81;
  }

  select.form-control.abcd {
    height: 40px;
    border-radius: 4px;
    color: #000;
  }

  .file-input>.label {
    color: #333;
    white-space: nowrap;
    opacity: .3;
  }

  .file-input.-chosen>.label {
    opacity: 1;
  }

  .bottom-s {
    border: none !important;
  }

  .row.bottom.border-xnc.bottom-s {
    border-bottom: 1px solid #ddd !important;
    border-top: 1px solid #ddd !important;
  }

  .card .card-body {
    padding: 20px 13px !important;
  }

  .card.border-body.border-seccc {
    border: none;
  }

  .box-label.flex-b0x.top-box {
    font-size: 14px;
  }

  .abcd {
    .file-input {
      display: inline-block;
      text-align: left;
      background: #fff;
      padding: 16px;
      width: 450px;
      position: relative;
    }
</style>
<style>
  select#exampleInputEmail1 {
    /* border: 1px solid #e3e3e3; */
    border-radius: 4px;
    height: 40px !important;
  }

  form.forms-sample.pan-services input {
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    height: 40px !important;
    width: 100%;
    /* height: auto; */
  }

  div.addrss {
    position: absolute;
    right: 0;
    top: 0;
    background: #dce4ec !important;
    padding: 0 10px;
    display: inline-block;
    height: 40px px;
    line-height: 40px;
  }

  input[type="file"] {
    padding-left: 12px !important;
    margin: auto;
    height: auto;
    background: 0 I !m;
    background: 0 !important;
    padding: 6px 0 31px;
  }

  .file-upload {
    position: relative;
  }

  input::file-selector-button {
    /* background: red !important; */
    background: none !important;
    border: none !important;
  }

  .abcd {
    background-color: transparent !important;
    width: 50px !important;
    height: 50px !important;
    display: inline-block !important;
    text-align: center !important;
    line-height: 65px !important;
    font-size: 2.0em !important;
    border: 0 !important;
    color: #5a6871;
    /* margin-bottom: 15px; */
    border-radius: 5px !important;
    color: #e735f3 !important;
  }

  .coolest {
    color: white !important;
    background-color: #8dc14b !important;
  }
</style>
@php
    $kk = DB::table('termsinfos')->where('for','kyc')->get();
    $profile = DB::table('kycs')->where('userid',Session::get('agetid'))->first();
   // dd($profile);
@endphp <section class="sec-cen">
  <div class="sec-cen">
    <div class="row">
      <div class="col-xl-6 mx-auto ">
        <h5>Business Survey</h5>
        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s,</p>
      </div>
    </div>
  </div>
</section> @if(\Session::has('success')) <div class="alert alert-info coolest"> {!! \Session::get('success') !!} </ul></div> @endif <section class="services pan-no form-ky">
  <div class="row ">
    <div class="col-xl-12  stretch-card grid-margin">
      <div class="card border-remove card-border kyc-form">
        <div class="card-body">
          <div class="row bottom spacing-remove">
            <div class="col-sm-12">
              <div class="d-flex align-items-start pad-txt">
                <div class="mr-3">
                  <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                    <div class="number" id="cooler" style="display:block;"> 01 </div>
                    <div class="number" id="coolers" style="display:none;">
                      <i class='fa fa-check abcd'></i>
                    </div>
                  </div>
                </div>
                <div class="">
                  <h5 class="mb-2" style="font-weight: 600;">Personal Details</h5>
                  <p class="text-secondary">Your simple personal information required for identification.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form onchange="onFormUpdate()" action="{{ url('kycStore') }}" method="Post" class="forms-sample pan-services" enctype="multipart/form-data"> @csrf <div class="row ">
                <div class="col-sm-12">
                  <div class="d-flex align-items-start circle-s kyc-txt pad-txt">
                    <div class="mr-3">
                      <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center circle-teg" style="">
                        <p class="para">i</p>
                      </div>
                    </div>
                    <div class="">
                      <p class="text-secondary">Please type carefully and fill out the form with your personal details. Your can’t edit these details .</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycName">Full Name <span class="start"> *</span>
                    </label>
                    <input type="text" onkeydown="return /[a-z, ]/i.test(event.key)" class="form-control" id="kycName" value="{{ $profile->name ?? Session::get('name') }}" placeholder="" name="name" required>
                  </div>
                </div>
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycEmail">Email Address <span class="start"> *</span>
                    </label>
                    <input name="email" type="email" class="form-control" value="{{ $profile->email ?? Session::get('email') }}" id="kycEmail" placeholder="" readonly>
                  </div>
                </div>
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycMobile">Phone Number <span class="start"> *</span>
                    </label>
                    <input name="phoneNo" type="number" onKeyPress="if(this.value.length==10) return false;" class="form-control" id="kycMobile" value="{{ $profile->mobile ?? Session::get('mobile') }}" placeholder="" readonly>
                  </div>
                </div>
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycDob">Date of Birth <span class="start"> *</span>
                    </label>
                    <input name="dob" type="date" class="form-control" id="kycDob" placeholder="" value="{{ $profile->dob ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycAadhaar">Aadhaar Number <span class="start">*</span>
                    </label>
                    <input name="aadhaar" type="number" onKeyPress="if(this.value.length==12) return false;" class="form-control" id="kycAadhaar" placeholder="" value="{{ $profile->aadhaar ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-6  ">
                  <div class="form-group">
                    <label for="kycPan">PAN Number <span class="start"> *</span>
                    </label>
                    <input name="pan" type="text" maxlength="10" style="text-transform:uppercase;" class="form-control" id="kycPan" placeholder="" value="{{ $profile->pan ?? '' }}">
                  </div>
                </div>
              </div>
              <div class="row border-2 ">
                <div class="d-flex align-items-start pad-txt">
                  <div class="mr-3">
                    <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                      <div class="number" id="fooler" style="display:block;"> 02 </div>
                      <div class="number" id="foolers" style="display:none;">
                        <i class='fa fa-check abcd'></i>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <h5 class="mb-2" style="font-weight: 600;"> Your Address</h5>
                    <p class="text-secondary">Your simple personal information required for identification</p>
                  </div>
                </div>
              </div>
              <div class="row border-3">
                <div class="col-xl-4">
                  <div class="form-group">
                    <label for="kycCountryName">Country Name <span class="start"> *</span>
                    </label>
                    <select name="country" id="kycCountryName" class="form-control" value="{{ $profile->country ?? '' }}" readonly>
                      <option value="India" selected>India</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycState">State/Union Territory <span class="start"> *</span>
                    </label>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name="state" class="form-control" required>
                         <option value="{{ $profile->state ?? '' }}"></option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="form-group">
                    <label for="kycTown">Town/City/District <span class="start"> *</span>
                    </label>
                    <select id="state" class="form-control" name="town" required></select>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycPin">Pin Code <span class="start"> *</span>
                    </label>
                    <input type="number" onKeyPress="if(this.value.length==7) return false;" class="form-control" name="pin" id="kycPin" placeholder="" value="{{ $profile->pin ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycCountryCode">Country code (ISD code) <span class="start"> *</span>
                    </label>
                    <select name="countryCode" id="kycCountryCode" class="form-control" readonly value="{{ $profile->countryCode ?? '' }}">
                      <option value="+91">+91</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycFlat">Flat/Room/Door/Block No. <span class="start"> *</span>
                    </label>
                    <input name="flat" type="text" maxlength="25" class="form-control addrss" id="kycFlat" placeholder="" value="{{ $profile->flat ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycBuilding">Name of Premises/Building/Village <span class="start"> *</span>
                    </label>
                    <input name="building" type="text" maxlength="25" class="form-control" id="kycBuilding" placeholder="" value="{{ $profile->building ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycRoad">Road/Street/lane/Post Office <span class="start"> *</span>
                    </label>
                    <input name="street" type="text" maxlength="25" class="form-control" id="kycRoad" placeholder="" value="{{ $profile->street ?? '' }}">
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group">
                    <label for="kycArea"> Area/Locality/Taluka/Sub-Division <span class="start"> *</span>
                    </label>
                    <input name="area" type="text" maxlength="25" class="form-control" id="kycArea" placeholder="" value="{{ $profile->area ?? '' }}">
                  </div>
                </div>
              </div>
              <div class="row botom-bortxt">
                <div class="col-sm-12">
                  <div class="d-flex align-items-start pad-txt txt-upload">
                    <div class="mr-3">
                      <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                        <div class="number" id="dooler" style="display:block;"> 03 </div>
                        <div class="number" id="doolers" style="display:none;">
                          <i class='fa fa-check abcd'></i>
                        </div>
                      </div>
                    </div>
                    <div class="">
                      <h5 class="mb-2" style="font-weight: 600;">Document Upload</h5>
                      <p class="text-secondary">To verify your identity, please upload any of your document.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row ">
                <div class="col-xl-12  checked-input label-box">
                  <h1 class="checked-head">To avoid delays when verifying account, Please make sure bellow:</h1>
                  <input name="chkBox_1" type="checkbox" checked value="1" readonly />
                  <label for="vehicle1" class="label-1">Chosen credential must not be expired.</label>
                  <br>
                  <input name="chkBox_1" type="checkbox" checked value="1" readonly />
                  <label for="vehicle2" class="label-1">Document should be good condition and clearly visible.</label>
                  <br>
                  <input name="chkBox_1" type="checkbox" checked value="1" readonly />
                  <label for="vehicle3" class="label-1">Make sure that there is no light glare on the card.</label>
                  <br>
                  <br>
                </div>
              </div>
              <div class="row ">
                <div class="col-xl-12 ">
                  <h1 class="file-check">Upload Here Your Copy </h1>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group mt-5">
                    <label for="">Aadhaar Card Front Image</label>
                    <div class="file-input">
                      <input type="file" accept="image/png, image/pdf, image/jpg" name="aadhaarFront">
                      <span class="button">Browse</span>
                      <span class="label" data-js-label="">Choose </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group mt-5">
                    <label for="kycAadhaarBack">Aadhaar Card Back Image</label>
                    <div class="file-input">
                      <input type="file" accept="image/png, image/pdf, image/jpg" name="aadhaarBack">
                      <span class="button">Browse</span>
                      <span class="label" data-js-label="">Choose </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group mt-5">
                    <label for="kycPanFront">Pan Card Front Image</label>
                    <div class="file-input">
                      <input type="file" accept="image/png, image/pdf, image/jpg" name="panCardImage">
                      <span class="button">Browse</span>
                      <span class="label" data-js-label="">Choose </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group mt-5">
                    <label for="kycShopFront">Shop Front Image</label>
                    <div class="file-input">
                      <input type="file" accept="image/png, image/pdf, image/jpg" name="shopFront">
                      <span class="button">Browse</span>
                      <span class="label" data-js-label="">Choose </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4  ">
                  <div class="form-group mt-5">
                    <label for="kycAgent">Agent Live Image</label>
                    <div class="file-input">
                      <input type="file" accept="image/png, image/pdf, image/jpg" name="agentFront">
                      <span class="button">Browse</span>
                      <span class="label" data-js-label="">Choose </span>
                    </div>
                  </div>
                </div>
                <!--           <div class="col-xl-3  border-img  ">-->
                <!--<div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>-->
                <!--          </div>-->
              </div>
          </div>
          <div class="row ">
            <div class="col-xl-12 label-chetxt ">
              <div class="box-label">
                <input type="checkbox" id="kycTerm" name="fruit-1" value="Apple">
                <label for="kycTerm" class="label"> I Have Read The <span class="check">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="text-decoration:none; color:#df00c1;">Term of Condition</a>
                  </span> And <span class="check">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter1" style="text-decoration:none; color:#df00c1;">Policy</a>
                  </span>
                </label>
                <div class="form-group">
                  <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" id="kycInfo" class="custom-control-input" value="on">
                    <label for="kycInfo" class="custom-control-label">All The Personal Information I Have Entered Is Correct.
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5">
                <input type="submit" name="submit" class="btn btn-primary me-2 pay-now" value="Process for verify">
              {{--  <button type="submit" id="verify" disabled="disabled" class="btn btn-primary me-2 pay-now">Process for verify</button>  --}}
            <div>
                <!-- Modal Terms -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Terms of Condition</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body"> @foreach($kk as $item) {{$item->terms}} @endforeach </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Policy -->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Policy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body"> @foreach($kk as $items) {{$items->info}} @endforeach </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
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
</section>
</div>
<!-- <footer class="footer"><div class="d-sm-flex justify-content-center justify-content-sm-between"><span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span></div></footer> -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
      </div>
      <form action="" method="POST">
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Amount Type</label>
              <input type="email" name="email" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
  var imgUpload = document.getElementById('upload-img'),
    imgPreview = document.getElementById('img-preview'),
    imgUploadForm = document.getElementById('form-upload'),
    totalFiles, previewTitle, previewTitleText, img;
  imgUpload.addEventListener('change', previewImgs, true);

  function previewImgs(event) {
    totalFiles = imgUpload.files.length;
    if (!!totalFiles) {
      imgPreview.classList.remove('img-thumbs-hidden');
    }
    for (var i = 0; i < totalFiles; i++) {
      wrapper = document.createElement('div');
      wrapper.classList.add('wrapper-thumb');
      removeBtn = document.createElement("span");
      nodeRemove = document.createTextNode('x');
      removeBtn.classList.add('remove-btn');
      removeBtn.appendChild(nodeRemove);
      img = document.createElement('img');
      img.src = URL.createObjectURL(event.target.files[i]);
      img.classList.add('img-preview-thumb');
      wrapper.appendChild(img);
      wrapper.appendChild(removeBtn);
      imgPreview.appendChild(wrapper);
      $('.remove-btn').click(function() {
        $(this).parent('.wrapper-thumb').remove();
      });
    }
  }
</script>
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script>
  $(".rotate").click(function() {
    $(this).toggleClass("down");
  })
</script>
</body>
</html> @include('web.footer')
<script language="javascript">
   print_state("sts");
</script>
<script>
  $(document).ready(() => {
    $("input[type=text]").keyup(onFormUpdate);
    $("input[type=email]").keyup(onFormUpdate);
    $("input[type=number]").keyup(onFormUpdate);
    $("input[type=date]").change(onFormUpdate);
    $("input[type=select]").change(onFormUpdate);
    $("input[type=file]").change(onFormUpdate);
    $("input[type=checkbox]").change(onFormUpdate);
  })

  function onFormUpdate() {
    const kycName = $("#kycName").val();
    const kycEmail = $("#kycEmail").val();
    const kycMobile = $("#kycMobile").val();
    const kycDob = $("#kycDob").val();
    const kycAadhaar = $("#kycAadhaar").val();
    const kycPan = $("#kycPan").val();
    const kycFlat = $("#kycFlat").val();
    const kycBuilding = $("#kycBuilding").val();
    const kycRoad = $("#kycRoad").val();
    const kycArea = $("#kycArea").val();
    const kycTown = $("#kycTown").val();
    const kycState = $("#kycState").val();
    const kycPin = $("#kycPin").val();
    const kycCountryName = $("#kycCountryName").val();
    const kycCountryCode = $("#kycCountryCode").val();
    const kycAadhaarFront = $("#kycAadhaarFront").val();
    const kycAadhaarBack = $("#kycAadhaarBack").val();
    const kycPanFront = $("#kycPanFront").val();
    const kycShopFront = $("#kycShopFront").val();
    const kycAgent = $("#kycAgent").val();
    const kycTerm = $("#kycTerm").prop('checked');
    const kycInfo = $("#kycInfo").prop('checked');
    if (kycName && kycEmail && kycMobile && kycDob && kycAadhaar && kycPan) {
      $("#coolers").removeAttr("style");
      $("#cooler").attr("style", "display:none");
      // $("#register1").removeAttr("disabled");
    } else {
      $("#cooler").attr("style", "display:block");
      $("#coolers").attr("style", "display:none");
      //  $("#register1").attr("disabled", "disabled");
    }
    if (kycFlat && kycBuilding && kycRoad && kycArea && kycTown && kycState && kycPin && kycCountryName && kycCountryCode) {
      $("#foolers").removeAttr("style");
      $("#fooler").attr("style", "display:none");
      // $("#register1").removeAttr("disabled");
    } else {
      $("#fooler").attr("style", "display:block");
      $("#foolers").attr("style", "display:none");
      //  $("#register1").attr("disabled", "disabled");
    }
    if (kycAadhaarFront && kycAadhaarBack && kycPanFront && kycShopFront && kycAgent) {
      $("#doolers").removeAttr("style");
      $("#dooler").attr("style", "display:none");
      // $("#register1").removeAttr("disabled");
    } else {
      $("#dooler").attr("style", "display:block");
      $("#doolers").attr("style", "display:none");
      //  $("#register1").attr("disabled", "disabled");
    }
    if (kycName && kycEmail && kycMobile && kycDob && kycAadhaar && kycPan && kycFlat && kycBuilding && kycRoad && kycArea && kycTown && kycState && kycPin && kycCountryName && kycCountryCode && kycAadhaarFront && kycAadhaarBack && kycPanFront && kycShopFront && kycAgent && kycTerm && kycInfo) {
      $("#verify").removeAttr("disabled");
      // $("#register1").removeAttr("disabled");
    } else {
      $("#verify").attr("disabled", "disabled");
      //  $("#register1").attr("disabled", "disabled");
    }
  }
</script>
<script>
  // Also see: https://www.quirksmode.org/dom/inputfile.html
  var inputs = document.querySelectorAll('.file-input')
  for (var i = 0, len = inputs.length; i < len; i++) {
    customInput(inputs[i])
  }

  function customInput(el) {
    const fileInput = el.querySelector('[type="file"]')
    const label = el.querySelector('[data-js-label]')
    fileInput.onchange = fileInput.onmouseout = function() {
      if (!fileInput.value) return
      var value = fileInput.value.replace(/^.*[\\\/]/, '')
      el.className += ' -chosen'
      label.innerText = value
    }
  }
</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
  $('#chooseFile').bind('change', function() {
    var filename = $("#chooseFile").val();
    if (/^\s*$/.test(filename)) {
      $(".file-upload").removeClass('active');
      $("#noFile").text("No file chosen...");
    } else {
      $(".file-upload").addClass('active');
      $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
    }
  });
</script>
