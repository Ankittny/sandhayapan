@include('web.header')

<style>
   .col-xl-6.top-sed {
    position: absolute;
    top: 0;
    right: 0;
}
.bootom-secc {
    border-bottom: 1px solid #ddd;
}
.border-tops {

    border-top: none;
}
.bottom-secddd {
    border-bottom: 1px solid #ddd;
}
   .abcd {
      background: 0 !important;
      border: none !important;
      line-height: 67px !important;
      color: #c100d4 !important;
      font-size: 16px !important;
  }
  select#applicationType {
    border-radius: 4px !important;
}
.label-sec label {
    padding: 8px !important;
}
.card.top-secccc {
    margin: 20px 0;
}
.sucess{
   color: white !important;
    background-color: #8dc14b !important;
}
   </style>
@php
   $aadhaar = DB::table('termsinfos')->where('for','panNo-addhar')->get();
   $detail = DB::table('termsinfos')->where('for','panNo-detail')->get();
   $attributes = DB::table('attributes')->where('packageid',Session::get('packagid'))->get();
@endphp

            <section class="sec-cen">
               <div class="sec-cen">
                  <div class="row">
                     <div class="col-xl-6 mx-auto ">
                        <h5>Business Survey</h5>
                        this is my term and condition of details

                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,</p>
                     </div>
                  </div>
               </div>
            </section>
            @if(\Session::has('success'))
                        <div class="alert alert-info sucess">
                     {!! \Session::get('success') !!} </ul>
                            </div>
                            @endif
            <section class="services pan-no">
               <div class="row ">
                  <div class="col-xl-12  stretch-card grid-margin">
                     <div class="card border-remove card-border">
                        <div class="card-body">
                           <div class="row bottom">
                              <div class="col-sm-12 hidden">
                                 <div class="d-flex align-items-start">
                                    <div class="mr-3">
                                       <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">

                                       <div class="number" id="cooler" style="display:block;" >
                                       01
                                       </div>
                                          <div class="number" id="coolers" style="display:none;" >

                                          <i class='fa fa-check abcd'></i>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <h5 class="mb-2" style="font-weight: 600;">Customer Details</h5>
                                       <p class="text-secondary">Please Enter 12 Digit Aadhaar No  Here And Check Corret Aadhaar No</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 shows" style="display:none;">
                                 <div class="d-flex align-items-start icons-partsss">
                                    <div class="mr-3">
                                       <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                                      <i class="fa fa-check" aria-hidden="true"></i>
                                       </div>
                                    </div>
                                    <div class="">
                                       <h5 class="mb-2" style="font-weight: 600;">Customer Details</h5>
                                       <p class="text-secondary">Please Enter 12 Digit Aadhaar No  Here And Check Corret Aadhaar No</p>
                                    </div>
                                 </div>
                              </div>
                           </div>



                           <div class="card top-secccc">
                              <div class="card-body">

                                    <div class="row">

                                    <div class="col-xl-6">

                                          <div class="form-group">
                                             <label for="exampleInputUsername1">Application Type<span class="start">*</span></label>
                                             <select name="applicationType" id="applicationType" class="form-control" onchange="serviceCheck(this)" style="color:black; height: 40px;">
                                             <option value="" selected>Please select Application type</option>
                                                <option value="aadhaar">FIND PAN NUMBER - By Aadhaar No</option>
                                                <option value="detail">FIND PAN NUMBER - By Details</option>

                                             </select>
                                             <!-- <span id="errors" style="color:red"></span> -->
                                          </div>
                                       </div>
</div>
<div id="ifAadhaar"  style="display: none;">
            <form class="forms-sample pan-services" action="{{ url('panByAadhaar') }}" method="Post">
               @csrf
<div class="row bootom-secc">
                                       <div class="col-xl-6 ">

                                          <div class="form-group">
                                             <label for="exampleInputUsername1">Aadhaar No<span class="start">*</span></label>
                                             <input type="number" class="form-control" onKeyPress="if(this.value.length==12) return false;" onkeydown="return event.keyCode !== 69"
                                              name="adharnumber"  placeholder="" id="adharnumber" rquired>
                                              <span class="msgsss" style="color:red"></span> 
                                          </div>
                                       </div>
                                       <div class="col-xl-6  ">

                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Applicant Name<span class="start">*</span></label>
                                             <input type="text" class="form-control names restrict" id="applicantName" name="applicantName" placeholder="" style="text-transform:uppercase" required>
                                          </div>
                                       </div>

                                       <div class="col-xl-6 top-sed ">

                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Charges<span class="start">*</span></label>
                                             <input type="text" class="form-control" id="aadhaarCharges" placeholder="" value="Processing Fee Rs {{$attributes[0]->price ?? ''}}" readonly>
                                             <input type="hidden" class="form-control" id="aadhaarCharges" name="aadhaarCharges"  value="{{$attributes[0]->price ?? ''}}" readonly>
                                          </div>
                                       </div>

</div>
                                       <div class="col-xl-12 border-tops label-sec ">
                                          <input type="checkbox" id="terms" name="terms" value="">
                                          <label for="terms" class="label">I have Read The <span class="check"> <a href="#" data-toggle="modal" data-target="#exampleModalCenter"  style="text-decoration:none; color:#df00c1;"> term of Condition </a> </span> And <span class="check"><a href="#" data-toggle="modal" data-target="#exampleModalCenter1"  style="text-decoration:none; color:#df00c1;"> Policy </a></span></label>

                                          <input type="checkbox" id="info" name="info" value="">
                                          <label for="info" class="label">All The Information I Have Entered Is Correct</label>

                                       </div>

                                       <div class="col-xl-3 bootom-padd left-btn ">
                                          <!-- Button trigger modal -->
                                          <button class="add btn btn-primary  font-weight-regular text-nowrap fund btn-funds down7913dd" id="submitPan" disabled="disabled" >
                                             Submit Pan</button>


</div>
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
      <div class="modal-body">
      @foreach($aadhaar as $items)
      {{$items->terms}}
      @endforeach
      </div>
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
      <div class="modal-body">
      @foreach($aadhaar as $items)
      {{$items->info}}
      @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</form>
</div>

<!-- find pan by details -->
<div id="ifDetail"  style="display: none;">
<form class="forms-sample pan-services" action="{{ url('panByDetails') }}" method="Post">
      @csrf
<div class="row bottom-secddd ">
<div class="col-xl-6 ">

                                          <div class="form-group">
                                             <label for="exampleInputUsername1">Applicant's Name<span class="start">*</span></label>
                                             <input type="text" class="form-control restrict"
                                              name="applicantsName" style="text-transform:uppercase"  placeholder="" id="applicantsName" rquired>
                                             <!-- <span id="errors" style="color:red"></span> -->
                                          </div>
                                       </div>
                                       <div class="col-xl-6  ">

                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Father's Name<span class="start">*</span></label>
                                             <input type="text" class="form-control res restrict" id="fatherName" name="fatherName" style="text-transform:uppercase" placeholder="" required>
                                          </div>
                                       </div>
									      <div class="col-xl-6  ">

                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Date of Birth/Incorporation<span class="start">*</span></label>
                                             <input type="date" class="form-control res" id="dob" name="dob" placeholder="" required>
                                          </div>
                                       </div>
									      <div class="col-xl-6  ">

                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Pin Code<span class="start">*</span></label>
                                             <input type="text" maxlength="7" class="form-control res" id="pincode" name="pincode" style="text-transform:uppercase" placeholder="" required>
                                          </div>
                                       </div>

                                       <div class="col-xl-6 top-sed ">

                                          <div class="form-group ">
                                             <label for="exampleInputEmail1">Charges<span class="start">*</span></label>
                                             <input type="text" class="form-control" id="charges" placeholder="" value="Processing Fee Rs {{ $attributes[1]->price ?? '' }}" readonly>
                                          </div>
                                          <input type="hidden" name="detailCharges" value="{{ $attributes[1]->price ?? '' }}">
                                       </div>
</div>
<div class="col-xl-12 border-tops label-sec ">
                                          <input type="checkbox" id="termss" name="termss" value="">
                                          <label for="termss" class="label">I have Read The <span class="check"><a href="#" data-toggle="modal" data-target="#exampleModalCenter2"  style="text-decoration:none; color:#df00c1;">term of Condition</a></span> And <span class="check"><a href="#" data-toggle="modal" data-target="#exampleModalCenter3"  style="text-decoration:none; color:#df00c1;">Policy</a></span></label>

                                          <input type="checkbox" id="infoo" name="infoo" value="">
                                          <label for="infoo" class="label">All The Information I Have Entered Is Correct</label>

                                       </div>

                                       <div class="col-xl-3 bootom-padd left-btn ">
                                          <!-- Button trigger modal -->
                                          <button class="add btn btn-primary  font-weight-regular text-nowrap fund btn-funds" id="submitDetail" >
                                             Submit Pan </button>
                                       <div>

</div>
         <!-- end -->



                                          <!-- Modal -->
                                          <!-- <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                                                      <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
                                                   </div>
                                <!-- <form class="form-sample" action="{{ url('panDeduction') }}" method="get">
                                    <div class="modal-body">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Pay Rs 80 </label>
                                    <br><br>
                                       Rs 80 will be deducted from your wallet

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer"> -->

                                      <!-- <button type="submit" class="btn btn-primary mt2"  onclick="window.open('public/invoice.pdf')"> Submit </button> -->

                                      <!-- <button class="btn btn-primary mt2" onclick="document.getElementById('link').click()">Submit</button>
                                        <a id="link" href="public/invoice.pdf" download hidden></a>
                                    </div>
                            </form>

                              </div>
                           </div>
                        </div> -->

<!-- Modal Terms -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms of Condition</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      @foreach($detail as $itemss)
      {{$itemss->terms}}
      @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal Policy -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

      @foreach($detail as $itemss)
      {{$itemss->info}}
      @endforeach
      </div>
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

@include('web.footer')

<!-- Custom js for this page -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

// <script>
//   $(function() {//<-- wrapped here
//   $('.restrict').on('input', function() {
//     this.value = this.value.replace(/[^a-zA-Z]/g, ''); //<-- replace all other than given set of values
//   });
// });


    $(function(){
        $(".restrict").keyup(function(){
           let myname = $(this).val();
           console.log(myname);
        });
    });



// </script>



<script src="{{ asset('public/web') }}/assets/js/dashboard.js"></script>

<script>
  $(document).ready(() => {
  $("input[type=text]").keyup(onFormUpdate);
  $("input[type=number]").keyup(onFormUpdate);
  $("input[type=checkbox]").change(onFormUpdate);

})

function onFormUpdate() {
   // const applicationType = $("#applicationType").val();
   const adharnumber = $("#adharnumber").val();
   const applicantName = $("#applicantName").val();
   const terms = $("#terms").prop('checked');
   const info = $("#info").prop('checked');

   if (adharnumber && applicantName) {
    $("#coolers").removeAttr("style");
    $("#cooler").attr("style", "display:none");

    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#cooler").attr("style", "display:block");
    $("#coolers").attr("style", "display:none");
    //  $("#register1").attr("disabled", "disabled");
  }

  if ( adharnumber && applicantName && terms && info) {
    $("#submitPan").removeAttr("disabled");

    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#submitPan").attr("disabled", "disabled");
    //  $("#register1").attr("disabled", "disabled");
  }

}

</script>


      <!-- End custom js for this page -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<script>
    $(function(){
      $("#adharnumber").keyup(function(){
        var adharnumber = $(this).val();
        $.ajax({
          method:"get",
          url:"{{ url('searchaddhar') }}/"+adharnumber,
          success:function(data){
            if(data.status=="200"){
               $("#submitPan").removeAttr("disabled");
                $(".names").val(data.result.appName);
                $('.shows').show();
                $('.hidden').hide();
                $("#errors").html("");
                return false;
            } if(data.status=="202"){
                 $(".msgsss").html(data.msg);
                 return false;
            } else {
                $(".names").val("");
               $(".msgsss").html("");
               $("#cooler").attr("style", "display:none");
                $('.shows').hide();
                $('.hidden').show();
                $(".res").val("");
                $("#errors").html("Data Not Found!");
            }
          }
        });
      });
    });
</script>

<script>

    function serviceCheck(that) {

if (that.value == "detail") {

    document.getElementById("ifDetail").style.display = "block";
    document.getElementById("ifAadhaar").style.display = "none";
   }
   else if (that.value == "aadhaar") {
      document.getElementById("ifAadhaar").style.display = "block";
      document.getElementById("ifDetail").style.display = "none";

   }

   else {

      document.getElementById("ifAadhaar").style.display = "none";
      document.getElementById("ifDetail").style.display = "none";

   }
}
</script>


<!-- find pan by details -->
<!--
<script>
  $(document).ready(() => {
  $("input[type=text]").keyup(onFormUpdate);
  $("input[type=date]").change(onFormUpdate);
  $("input[type=checkbox]").change(onFormUpdate);

})

function onFormUpdate() {
   const applicantsName = $("#applicantsName").val();
   const fatherName = $("#fatherName").val();
   const dob = $("#dob").val();
   const pincode = $("#pincode").val();
   const termss = $("#termss").prop('checked');
   const infoo = $("#infoo").prop('checked');

   if (applicantsName && fatherName && dob && pincode  ) {
    $("#coolers").removeAttr("style");
    $("#cooler").attr("style", "display:none");

    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#cooler").attr("style", "display:block");
    $("#coolers").attr("style", "display:none");
    //  $("#register1").attr("disabled", "disabled");
  }

  if (applicantsName && fatherName && dob && pincode && termss && infoo) {
    $("#submitDetail").removeAttr("disabled");

    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#submitDetail").attr("disabled", "disabled");
    //  $("#register1").attr("disabled", "disabled");
  }

}

</script>

 -->
