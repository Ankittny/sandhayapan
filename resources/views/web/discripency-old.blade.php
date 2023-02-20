@include('web.header')
<style>
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
    color: black!important;
    height: 40px!important;
}
    </style>
		<section class="sec-cen">
	
		    <div class="sec-cen">
		             
		                    	     <div class="row"> 
              <div class="col-xl-6 mx-auto ">
                        <h5>Discrepancy Letter</h5>
                        <p class="text-muted">If you change customer name in pan card, change father name, discrepancy letter objection, we solve it.</p>
		    </div> </div></div>
		</section>
		<section class="services pan-no">
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
                    
                    
                          <form class="forms-sample pan-services">
                            <br>
                         <div class="row">
			
                         <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Application Type<span class="start">*</span></label>
                        <select name="" id="" class="form-control abcd">
                            <option value="indian" class="form-control">Indian Citizen</option>
                            <option value="foreign" class="form-control">Foreign Citizen</option>
                        </select>
                      </div>  </div>
          
                    <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Acknowledgement Number<span class="start">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==15) return false;"  onkeydown="return event.keyCode !== 69" class="form-control" id="exampleInputUsername1" placeholder="">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Applicant Name<span class="start">*</span></label>
                        <input type="text" class="form-control" onkeydown="return /[a-z ]/i.test(event.key)" id="exampleInputUsername1" placeholder="">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Date of Birth / Incorporation<span class="start">*</span></label>
                        <input type="date" class="form-control" id="exampleInputUsername1" placeholder="">
                      </div>  </div>
                     
                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Father Name<span class="start">*</span></label>
                        <input type="text" class="form-control" onkeydown="return /[a-z ]/i.test(event.key)" id="exampleInputUsername1" placeholder="">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Customer Mobile Number<span class="start">*</span></label>
                        <input type="number" class="form-control" onKeyPress="if(this.value.length==10) return false;"  id="exampleInputUsername1" placeholder="">
                      </div>  </div>

                      <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Margin Amount <small>(Amount should be in between Rs 100 to Rs 500)</small><span class="start">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==3) return false;"  min="100" max="500" class="form-control" id="exampleInputUsername1" placeholder="">
                      </div>  </div>

                      <div class="col-xl-6 ">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Charges<span class="start">*</span></label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="Rs 10" placeholder="" readonly>
                      </div>  </div>

                       <!-- <div class="col-xl-3 btn-verify">
                      <button type="submit" class="btn btn-primary me-2 pay-now">Verify Ack Details</button>
                      <div> -->

                    </form>
                    </div>  </div>  </div>
                  <div class="card border-body border-seccc">
                  <div class="card-body padd-parts">
                  
                    <form class="forms-sample pan-services">
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
                        <input type="file"  accept="image/png, image/pdf, image/jpg" class="form-control" id="exampleInputUsername1" placeholder="">
                      </div>  </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Acknowledgement Slip<span class="start">*</span></label>
                        <input type="file"  accept="image/png, image/pdf, image/jpg" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Customer Pan Card Copy or Allotment Letter<span class="start">*</span></label>
                        <input type="file"  accept="image/png, image/pdf, image/jpg" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      </div>
                       <div class="col-xl-6  ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Clarification Letter With Customer Signature<span class="start">*</span></label>
                        <input type="file"  accept="image/png, image/pdf, image/jpg" class="form-control" id="exampleInputEmail1" placeholder="">
                      </div>
                      </div>
                                            </div>
                           <div class="row bottom border-xnc"> 
       <!--           <div class="d-flex align-items-start pad">
        <div class="mr-3">
          <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
            01
          </div>
        </div>
        <div class="">
          <h5 class="mb-2" style="font-weight: 600;">Service Name</h5>
          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      </div>
         <div class="row">
         <div class="col-xl-12  checked-input">
    <h1>Show Checkboxes</h1>
<input name="chkBox_1" type="checkbox" checked="" value="1" readonly="">
  <label for="vehicle1">Lorem Ipsum is simply dummy text of the printing and typesetting</label><br>
<input name="chkBox_1" type="checkbox" checked="" value="1" readonly="">
  <label for="vehicle2">Lorem Ipsum is simply dummy text of the printing and typesetting</label><br>
<input name="chkBox_1" type="checkbox" checked="" value="1" readonly="">
  <label for="vehicle3">Lorem Ipsum is simply dummy text of the printing and typesetting</label><br><br>
  </div> </div>
      <div class="row bootom-space">
     <div class="col-xl-12 ">
   <h1 class="file-check">Upload Here Scanned Copy</h1>
   </div> 
   <div class="col-xl-6  ">
         <label for="exampleInputUsername1" class="label-file">Custumer Passport Size Photo<span class="start">*</span></label>
                   <div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Browse</div>
    <div class="file-select-name" id="noFile">Choose</div> 
    <input type="file" name="Browse" id="choose">
  </div>
</div>
                      </div>
                       <div class="col-xl-6  ">
                             <label for="exampleInputUsername1" class="label-file">Acknowledgement SLIP<span class="start">*</span></label>
                  <div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Browse</div>
    <div class="file-select-name" id="noFile">Choose</div> 
    <input type="file" name="Browse" id="choose">
  </div>
</div>
                      </div>
                      </div>



                      <div class="row top-border"> -->
                      
                       <div class="col-xl-12 paddtxt-left ">
                           <div class="box-label flex-b0x top-box">
                         <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
  <label for="fruit1" class="label"></label>I Have Read The <a href=""><a href="#"><span class="check" data-toggle="modal" data-target="#basicModal">&nbsp;Term of Condition</span> <a>&nbsp; And <a href="#"><span class="check" data-toggle="modal" data-target="#basicModal1">&nbsp;Policy</span></a>
  </div>  </div>
  

  <!-- <div class="col-xl-12 paddtxt-left ">
                           <div class="box-label flex-b0x top-box">
                         <input type="checkbox" id="fruit2" name="fruit-2" value="">
  <label for="fruit1" class="label"></label>I Have Read The 
  </div>  </div> -->

</div>
  
  
  
  
  <div class="row">
                       <div class="col-xl-3 paddtxt-left  left-bnt">
                      <button type="submit" class="btn btn-primary  pay-now">Submit Discrepancy</button>
                      <div>

                    </form>
                  </div></div></div>
                  
                  
                </div>
                
                
                   
                  </div>
				  
				 
                </div>
				
				
              </div>
			  
            </div>
          
         
         </section>
          </div>
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
                
                <div class="form-group group-para">
                       <label for="exampleInputUsername1" class="label-file">Term of Condition</label>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
              
                </div>
            </div>
          
         
           
        </div>
     
    </form>
    </div>
  </div>
</div>


  <div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <!--<h4 class="modal-title" id="myModalLabel">Reservation</h4>-->
    </div>
      
    <form action="" method="POST">
        <div class="modal-body">
            
            
            <div class="col-md-12">
                
                <div class="form-group group-para">
                    <label for="exampleInputUsername1" class="label-file">Policy</label>
                    <p>asasaLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
               
                </div>
            </div>
          
         
           
        </div>
     
    </form>
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
  </body>
</html>

@include('web.footer')