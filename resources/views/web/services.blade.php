@include('web.header')
		
<style>
  .card.mb-3.mb-sm-0.bg-rem {
    
    border-radius: 5px !important;
    border: 4px solid #c300d3 !important;
    border-right-color: #c901d0 !important;
    border-bottom-color: #7e01ff !important;
}
.card-body.py-3.px-4.card-servey {
    border-radius: 0px !important;
}
.atage{
    background: linear-gradient(to right top, #e600bd, #7e01ff);
    border: none;
    text-decoration: none !important;
}
</style>

<!--</section>-->
		<section class="services card-services services-cd ">
            <div class="row">
	
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card border-remove">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-7">
                        <h5>PAN Card Services</h5>
                      
                      </div>
                   
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="card mb-3 mb-sm-0 bg-rem">
                          <div class="card-body py-3 px-4 card-servey ">
						  	<i class="mdi mdi-account account menu-icon"></i>
                            <p class="m-0 survey-head title-head">
				
							Find Pan Number</p>
							<a href="{{url('/pan-no')}}" class="click-here atage" id="add-task">Click Here </a>
				
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                           
                         
                            </div>
                          </div>
                        </div>
                      </div>
					     <div class="col-sm-2">
                        <div class="card mb-3 mb-sm-0 bg-rem">
                          <div class="card-body py-3 px-4 card-servey">
						  	<i class="mdi mdi-account account menu-icon"></i>
                            <p class="m-0 survey-head title-head">
				
							Solved NSDL Discrepancy</p>
								<a href="{{url('/discrepency')}}" class="click-here atage" id="add-task ">Click Here </a>
				
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                           
                         
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="col-sm-2">
                        <div class="card mb-3 mb-sm-0 bg-rem">
                          <div class="card-body py-3 px-4 card-servey ">
						  	<i class="mdi mdi-account account menu-icon"></i>
                            <p class="m-0 survey-head title-head">
				
							 NSDL Pan Management</p>
							<a href="{{url('/newPanCard')}}" class="click-here atage" id="add-task">Click Here </a>
				
                            <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                           
                         
                            </div>
                          </div>
                        </div>
                      </div>
					  <!-- <div class="col-sm-2">-->
       <!--                 <div class="card mb-3 mb-sm-0 bg-rem">-->
       <!--                   <div class="card-body py-3 px-4 card-servey ">-->
						 <!-- 	<i class="mdi mdi-account account menu-icon"></i>-->
       <!--                     <p class="m-0 survey-head title-head">-->
				
							<!--Find Pan  No</p>-->
							<!--<button class="click-here" id="add-task">Click Here </button>-->
				
       <!--                     <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">-->
                           
                         
       <!--                     </div>-->
       <!--                   </div>-->
       <!--                 </div>-->
       <!--               </div>-->
					       <div class="col-sm-2">
       <!--                 <div class="card mb-3 mb-sm-0 bg-rem">-->
       <!--                   <div class="card-body py-3 px-4 card-servey ">-->
						 <!-- 	<i class="mdi mdi-account account menu-icon"></i>-->
       <!--                     <p class="m-0 survey-head title-head">-->
				
							<!--Find Pan  No</p>-->
							<!--<button class="click-here" id="add-task">Click Here </button>-->
				
       <!--                     <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">-->
                           
                         
       <!--                     </div>-->
       <!--                   </div>-->
       <!--                 </div>-->
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
    <script src="assets/js/dashboard.js"></script>
     <script>
            $(".rotate").click(function () {
    $(this).toggleClass("down");
})
        </script>
    <!-- End custom js for this page -->
