@include('web.header')

<style>
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

   </style>
            <section class="sec-cen">
               <div class="sec-cen">
                  <div class="row">
                     <div class="col-xl-6 mx-auto ">
                        <h5>Business Survey</h5>
                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,</p>
                     </div>
                  </div>
               </div>
            </section>
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
                           
                           <div class="card">
                              <div class="card-body">
                                 <form class="forms-sample pan-services" action="{{ url('pansave') }}" method="Post">
                                     @csrf
                                    <div class="row">

                                    <div class="col-xl-6 ">
                                          <br>
                                          <div class="form-group">
                                             <label for="exampleInputUsername1">Application Type<span class="start">*</span></label>
                                             <select name="applicationType" id="applicationType" class="form-control" style="color:black; height: 40px;">
                                                <option value="">FIND PAN NUMBER - By Aadhaar No</option>
                                             </select>
                                             <!-- <span id="errors" style="color:red"></span> -->
                                          </div>
                                       </div>

                                       <div class="col-xl-6 ">
                                          <br>
                                          <div class="form-group">
                                             <label for="exampleInputUsername1">Aadhaar No<span class="start">*</span></label>
                                             <input type="number" class="form-control" onKeyPress="if(this.value.length==12) return false;" onkeydown="return event.keyCode !== 69"
                                              name="adharnumber"  placeholder="" id="adharnumber" rquired>
                                             <!-- <span id="errors" style="color:red"></span> -->
                                          </div>
                                       </div>
                                       <div class="col-xl-6  ">
                                          <br>
                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Applicant Name<span class="start">*</span></label>
                                             <input type="text" class="form-control res" id="applicantName" name="applicantName" placeholder="" required>
                                          </div>
                                       </div>

                                       <div class="col-xl-6  ">
                                          <br>
                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Charges<span class="start">*</span></label>
                                             <input type="text" class="form-control" id="charges" name="charges" placeholder="" value="Processing Fee Rs 20" readonly>
                                          </div>
                                       </div>

                                       <div class="col-xl-12 border-tops label-sec ">
                                          <input type="checkbox" id="terms" name="terms" value="">
                                          <label for="terms" class="label">I have Read The <span class="check">term of Condition</span> And <span class="check">Policy</span></label>

                                          <input type="checkbox" id="info" name="info" value="">
                                          <label for="info" class="label">All The Information I Have Entered Is Correct</label>

                                       </div>
                                       
                                       <div class="col-xl-3 bootom-padd left-btn ">
                                          <!-- Button trigger modal -->
                                          <button class="add btn btn-primary  font-weight-regular text-nowrap fund btn-funds" id="submitPan" disabled="disabled" > 
                                             Submit Pan </button>
                                       <div>
                                </form>

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
<script src="{{ asset('public/web') }}/assets/js/dashboard.js"></script>
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
            if(data.status==200){
                $(".res").val(data.result.name);
                $('.shows').show();
                $('.hidden').hide();
                $("#errors").html("");
            } else {
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
  $(document).ready(() => {
  $("input[type=text]").keyup(onFormUpdate);
  $("input[type=number]").keyup(onFormUpdate);
  $("input[type=select]").change(onFormUpdate);
  $("input[type=checkbox]").change(onFormUpdate);

})

function onFormUpdate() {
   // const applicationType = $("#applicationType").val();
   const adharnumber = $("#adharnumber").val();
   const applicantName = $("#applicantName").val();
   const terms = $("#terms").prop('checked');
   const info = $("#info").prop('checked');

   if ( adharnumber && applicantName) {
    $("#coolers").removeAttr("style");
    $("#cooler").attr("style", "display:none");
    
    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#cooler").attr("style", "display:block");
    $("#coolers").attr("style", "display:none");
    //  $("#register1").attr("disabled", "disabled");
  }

  if (applicationType && adharnumber && applicantName && terms && info) {
    $("#submitPan").removeAttr("disabled");
    
    // $("#register1").removeAttr("disabled");
  }
   else {
    $("#submitPan").attr("disabled", "disabled");
    //  $("#register1").attr("disabled", "disabled");
  }

}

</script>