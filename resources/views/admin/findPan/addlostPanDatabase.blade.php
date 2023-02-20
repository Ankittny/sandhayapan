@include('admin.header')
@include('admin.sidebar')
<style>
   [data-theme-version="dark"] .card-header {
   border-bottom: 1px solid #ddd !important;
   }
   .p-4.rounded-circle.text-white.font-weight-bold.d-flex.align-items-center.justify-content-center {
   border: none !important;
   background: #EEEAFAFE !important;
   color: #df00c1 !important;
   margin-right: 14px !important;
   }
   button.btn.btn-primary.pay-now.pay-discrenpancy {
   background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
   border: none !important;
   width: 50%;
   border-radius: 5px;
   font-size: 17px;
   }
   .process-btn {
   padding-bottom: 15px;
   }
   .p-4.rounded-circle.text-white.font-weight-bold.d-flex.align-items-center.justify-content-center {
   border: none !important;
   background: #EEEAFAFE !important;
   color: #df00c1 !important;
   margin-right: 14px;
   }
   i.mdi.mdi-chevron-down {
   position: absolute;
   right: 22px;
   top: 7px;
   z-index: -1;
   color: #6e6e6e !important;
   }
   .center-btn {
   margin: 0 auto;
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
   label {
   color: #364a63 !important;
   }
   .card {
   background: 0 !important;
   }
   .card {
   border-radius: 5px !important;
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
   height: 49px;
   }
   span.star-se {
   color: red !important;
   }
   h4.card-title {
   color: #000 !important;
   /* margin-bottom: 18px; */
   /* display: inline-block; */
   }
   .basic-form input {
   background: 0 !important;
   border: 1px solid #ddd !important;
   border-radius: 4px !IMPORTANT;
   }
   select.select.form-select.form-select-lg.mb-3 {
   background: 0 !important;
   border: 1px solid #ddd;
   border-radius: 0px !important;
   font-size: 14px;
   height: 2.5rem;
   }
   [data-theme-version="dark"] .card-header {
   border-color: #2a2833;
   border-bottom: none !important;
   }
   .col-auto.my-1 input {
   height: 40px !important;
   border-radius: 4px !important;
   }
   [data-theme-version="dark"] {
   /* background: #05031A; */
   color: #828690;
   background: 0 !important;
   }
   select.form-select.me-sm-2.wide {
   background: tr !important;
   background-color: transparent;
   height: 40px !important;
   border-radius: 4px  !important;
   }
   .card-body {
   padding: 12px;
   }
   [data-theme-version="dark"] .card-header {
   border-bottom: 1px solid #ddd !important;
   }
   .user-border {
   border-radius: 4px !important;
   }
   .align-items-start {
   align-items: center !important;
   }
   h5.mb-2 {
   color: #364a63 !important;
   }
   .user-border h1 {
   color: #000 !important;
   font-size: 20px;
   text-transform: capitalize;
   margin-bottom: 24px;
   }
   .form-group input {
   border: 1px solid #e3e3e3;
   border-radius: 4px;
   height: 40px !important;
   }
   .card {
   margin-bottom: 0px !important;
   }
   .row.user-border {
   border: 1px solid #ddd;
   }
   .col-xl-12.col-lg-12 {
   padding-left: 0px !important;
   padding-right: 0px !important;
   }
   .border-df {
   border-top: 1px solid #ddd;
   margin-left: -2px !important;
   margin-right: 0px !important;
   padding-left: 0px !important;
   border-bottom: 1px solid #ddd;
   padding: 20px 0 30px;
   }
   section.update-pro h1 {
   margin-left: -15px;
   font-size: 22px;
   margin-bottom: 22px;
   }
</style>
<div class="content-body">
   <!-- row -->
   <section class="update-pro">
      <div class="container-fluid">
         <h1>View/Update Profile</h1>
         <div class="row user-border">
            <div class="col-xl-12 col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <div class="d-flex align-items-start pad">
                        <div class="mr-3">
                           <div class="p-4 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #9B5DE5">
                              01
                           </div>
                        </div>
                        <div class="">
                           <h5 class="mb-2" style="font-weight: 600;">Personal Details</h5>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="basic-form">
                        <form action="{{url('admin/createlostPanDatabase')}}" method="Post" id="SaveBannerss" enctype="multipart/form-data">
              
               @csrf
               <div class="row poup-form">
                   
          <div class="col-md-6">
               <div class="mb-3">
                   <label>Aadhar NUmber</label>
                  <input type="text" class="form-control input-default " name="adharno" id="adharno">
                  <span style="color:red;" id="adharno"></span>
               </div></div>  
               <div class="col-md-6">
               <div class="mb-3">
                      <label>Pan Number</label>
                  <input type="text" class="form-control input-default " name="name"  id="name">
                  <span style="color:red;" id="name"></span>
               </div></div>
                <div class="col-md-12">
               <div class="mb-3">
                      <label>Name</label>
                  <input type="text" class="form-control input-default " name="name"  id="name">
                  <span style="color:red;" id="name"></span>
               </div></div>
     </div>

               <div class="modal-footer">
                  <input type="submit" value="Submit" value="Submit" class="btn btn-primary">
               </div>
            </form>
                     </div>
                  </div>
               </div>
            </div>
         
            <div class="process-btn">
               <button type="submit " class="btn btn-primary  pay-now pay-discrenpancy  ">Process for verify</button>
            </div>
         </div>
      </div>
</div>
</div>
</div>
</section>
<!--**********************************
   Content body end
   ***********************************-->
@include('admin.footer')