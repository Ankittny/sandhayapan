@include('web.header')

<style>

.pay-discrenpancy{
  padding: 10px 38px !important;


}
label.label {
    padding: 8px !important;
}

.file-input > [type='file'] {
  position: absolute;
  top: 0;
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

.file-input > .button {
  display: inline-block;
    cursor: pointer;
    background:#dae2ea;
    padding: 9px 17px;
    border-radius: 2px;
    /* margin-right: 8px; */
    float: right;
    color: #5a6f81;
}

select.form-control.abcd {
    height:40px;
    border-radius:4px;
    color: #000;
}

.file-input > .label {
  color: #333;
  white-space: nowrap;
  opacity: .3;
}

.file-input.-chosen > .label {
  opacity: 1;
}
    .bottom-s {
  border:none !important;
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
.abcd{

  .file-input {
  display: inline-block;
  text-align: left;
  background: #fff;
  padding: 16px;
  width: 450px;
  position: relative;


}


  

    </style>

@php
  $disc = DB::table('termsinfos')->where('for','discrepency')->get();
  $attributes = DB::table('attributes')->where('packageid',Session::get('packagid'))->get();
 
@endphp

		<section class="sec-cen">
	
		    <div class="sec-cen">
		             
		                    	     <div class="row"> 
              <div class="col-xl-6 mx-auto ">
                        <h5>Discrepancy Letter</h5>
                        <p class="text-muted">If you change customer name in pan card, change father name, discrepancy letter objection, we solve it.</p>
		    </div> </div></div>
		</section>
		<section class="services pan-no" style="
    width: 100%;
">
            <div class="row ">
			
	    
              <div class="col-xl-12  stretch-card grid-margin">
                <div class="card border-remove card-border">
                  <div class="card-body">
				  
                    <div class="row bottom">
                      <div class="col-sm-12">
                 <div class="d-flex align-items-start pad">
        <div class="mr-3">
          <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
            01
          </div>
        </div>
        <div class="">
          <h5 class="mb-2" style="font-weight: 600;">Customer Details</h5>
          <p class="text-secondary">Your simple Customer information required for identification.</p>
        </div>
      </div>
                      
                      </div>
                   
                    </div>   </div>
                    
                    
                          <form class="forms-sample pan-services" action="{{ url('discrepency') }}" method="post" enctype="multipart/form-data">
                              @csrf
                            <br>
                         <div class="row">
			
                         <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Application Type<span class="start">*</span></label>
                        <select id="" class="form-control abcd" name="ApplicationType">
                            <option value="indian" class="form-control">Indian Citizen</option>
                            <option value="foreign" class="form-control">Foreign Citizen</option>
                        </select>
                      </div>  </div>
          
                    <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Acknowledgement Number<span class="start">*</span></label>
                        <input type="number" onkeypress="if(this.value.length==15) return false;" onkeydown="return event.keyCode !== 69" class="form-control" id="exampleInputUsername1" placeholder="" name="Acknowledgement">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Applicant Name<span class="start">*</span></label>
                        <input type="text" class="form-control" onkeydown="return /[a-z ]/i.test(event.key)" id="exampleInputUsername1" placeholder="" name="ApplicantName">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Date of Birth / Incorporation<span class="start">*</span></label>
                        <input type="date" class="form-control" id="exampleInputUsername1" placeholder="" name="dateofbirth">
                      </div>  </div>
                     
                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Father Name<span class="start">*</span></label>
                        <input type="text" class="form-control" onkeydown="return /[a-z ]/i.test(event.key)" id="exampleInputUsername1" placeholder="" name="fathername">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Customer Mobile Number<span class="start">*</span></label>
                        <input type="number" class="form-control" onkeypress="if(this.value.length==10) return false;" id="exampleInputUsername1" placeholder="" name="customermobile">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Margin Amount <small>(Amount should be in between Rs 100 to Rs 500)</small><span class="start">*</span></label>
                        <input type="number" onkeypress="if(this.value.length==3) return false;" min="100" max="500" class="form-control" id="exampleInputUsername1" placeholder="" name="marginamount">
                      </div>  </div>

                      <div class="col-xl-6 ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Charges<span class="start">*</span></label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="Rs {{ $attributes[2]->price ?? '' }}" placeholder="" readonly="">
                        
                        <input type="text"  value="{{ $attributes[2]->price ?? '' }}" name="charges">
                      </div>  </div>

                       <!-- <div class="col-xl-3 btn-verify">
                      <button type="submit" class="btn btn-primary me-2 pay-now">Verify Ack Details</button>
                      <div> -->

                    
                    </div> </div>  </div>
                  <div class="card border-body border-seccc">
                  <div class="card-body padd-parts">
                  
                
                        <div class="row bottom border-xnc bottom-s">
                 <div class="d-flex align-items-start pad ">
        <div class="mr-3">
          <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
            02
          </div>
        </div>
        <div class="">
          <h5 class="mb-2" style="font-weight: 600;">Documents Submitted</h5>
          <p class="text-secondary">Proof of identity, Proof of Address, Proof of Date of Birth.</p>
        </div>
      </div>
      </div>
                      
                     
                         <div class="row">
          
              <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Customer Passport Size Photo<span class="start">*</span></label>
                        <div class="file-input">
  <input type="file" name="customerpassport">
  <span class="button">Browse</span>
  <span class="label" data-js-label="">Choose
</span></div>
                      </div>  </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Acknowledgement Slip<span class="start">*</span></label>
                        <div class="file-input">
  <input type="file" name="acknowledgementslip">
  <span class="button">Browse</span>
  <span class="label" data-js-label="">Choose
</span></div>
                      </div>
                      </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Customer Pan Card Copy or Allotment Letter<span class="start">*</span></label>
                        <div class="file-input">
  <input type="file" name="customerpancard">
  <span class="button">Browse</span>
  <span class="label" data-js-label="">Choose
</span></div>
            
                      </div>
                      </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Clarification Letter With Customer Signature<span class="start">*</span></label>
                        <div class="file-input">
  <input type="file" name="clarificationletter">
  <span class="button">Browse</span>
  <span class="label" data-js-label="">Choose
</span></div>
            
                      </div>
                      </div>
                                            </div>
                           <div class="row bottom border-xnc"> 
    
                      
                      <div class="col-xl-12 border-tops label-sec ">
                                          <input type="checkbox" id="terms" name="terms" value="1">
                                          <label for="terms" class="label">I have Read The <span class="check"><a href="#" data-toggle="modal" data-target="#exampleModalCenter4"  style="text-decoration:none; color:#df00c1;">term of Condition</a></span> And <span class="check"><a href="#" data-toggle="modal" data-target="#exampleModalCenter5"  style="text-decoration:none; color:#df00c1;">Policy</a></span></label>

                                          <input type="checkbox" id="info" name="info" value="1">
                                          <label for="info" class="label">All The Information I Have Entered Is Correct</label>

                                       </div>
  

</div>
  
  
  
  
  <div class="row">
                       <div class="col-xl-3 paddtxt-left  left-bnt">
                      <button type="submit" class="btn btn-primary  pay-now pay-discrenpancy">Submit Discrepancy</button>
                      <div>

                    
                  </div></div></div></form>
                  
                  
                </div>
                
                
                   
                  </div>
				  
				 
                </div>
				    </div>
                
                
                   
                  </div>
				  
				 
                </div>
				
              </section>
			  </div>
			  
     
<!-- Modal Terms -->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms of Condition</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach($disc as $items)
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
<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      <div class="modal-body">
      @foreach($disc as $item)
      {{$item->info}}
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

@include('web.footer')
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->


    <script>
    // Also see: https://www.quirksmode.org/dom/inputfile.html

var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('[type="file"]')
  const label = el.querySelector('[data-js-label]')
  
  fileInput.onchange =
  fileInput.onmouseout = function () {
    if (!fileInput.value) return
    
    var value = fileInput.value.replace(/^.*[\\\/]/, '')
    el.className += ' -chosen'
    label.innerText = value
  }
}
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        $('#chooseFile').bind('change', function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});

    </script>

    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
   
    <!-- End custom js for this page -->
  


