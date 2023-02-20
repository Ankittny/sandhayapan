@include('admin.header')
@include('admin.sidebar')
<style>
.modal-body img {
    width: 100%;
}
   .dataTables_wrapper .dataTables_paginate span .paginate_button.current {
   color: #fff !important;
   background: #363062;
   border: 0 !important;
   border: 1px solid #ddd !important;
   background: 0 !important;
   color: #000 !important;
   border-radius: 0px !important;
   border-radius: 0px !important;
   background: #4d73df !important;
   color: white !important;
   }
   .box-secs img {
    height: 100%;
    width: 100%;
    border-radius: 0px !important;
}
   .card-header {
   background: #f8f9fd !important;
   border-radius: 0px !important;
   }
   .modal-footer button {
   background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
   border: none !important;
   border-radius: 6px !important;
   padding: 12px 30px !important;
   }
   [data-theme-version="dark"] h1, [data-theme-version="dark"] .h1, [data-theme-version="dark"] h2, [data-theme-version="dark"] .h2, [data-theme-version="dark"] h3, [data-theme-version="dark"] .h3, [data-theme-version="dark"] h4, [data-theme-version="dark"] .h4, [data-theme-version="dark"] h5, [data-theme-version="dark"] .h5, [data-theme-version="dark"] h6, [data-theme-version="dark"] .h6 {
   color: #000 !important;
   }
   button.btn-1.order-sec {
   margin-right: 12px;
   }
   tr.odd p span {
   font-weight: 700;
   color: #000;
   }
   .content-body .container-fluid, .content-body .container-sm, .content-body .container-md, .content-body .container-lg, .content-body .container-xl, .content-body .container-xxl {
   padding-top: 40px;
   padding-right: 40px;
   padding-left: 40px;
   padding-right: 16px !important;
   }
   a#example4_next {
   /* background: #4d73df !important; */
   border-top-right-radius: 6px !important;
   border-bottom-right-radius: 6px !important;
   }
   a#example4_previous {
   border: 1px solid #ddd !important;
   border-radius: 0px;
   border-top-left-radius: 6px;
   border-bottom-left-radius: 6px;
   }
   .card-header {
   background: #f8f9fd;
   }
   button.btn-cent {
   padding: 8px;
   width: 100% !important;
   text-align: center;
   }
   .copyright a {
   color: #000 !important;
   }
   button.add.btn-sec.kyc-btn {
   padding: 3px 24px;
   }
   button.delete-s.add.btn-sec {
   padding: 5px 15px;
   }
   h4.card-title {
   color: #000 !important;
   font-weight: 700;
   }
   td.sorting_1.button-group button {
   margin-bottom: 8px;
   }
   .content-body {
   margin-left: 13.563rem !important;
   }
   .card-body {
   padding: 1.875rem;
   padding: 0px !important;
   }
   [data-theme-version="dark"] .input-group .form-select {
   background: #05031A;
   border-color: #2a2833;
   background: 0 !important;
   border: none !important;
   }
   button.btn-cent.update-btn {
   width: auto !important;
   }
   textarea.form-control {
   min-height: auto;
   height: 180px !important;
   border-radius: 6px !important;
   margin-bottom: 13px !important;
   }
   textarea#comment {
   background: 0 !important;
   border: 1px solid #ddd !important;
   color: #000 !important;
   }
   button {
   text-align: left;
   }
   button.danger-1 {
   background: #ff7f26 !important;
   }
   button.danger {
   background: #ed1b24 !important;
   }
   /*.para-sec {*/
   /*    margin-top: -36px;*/
   /*}*/
   button.btn-cent {
   color: white !important;
   }
   button.btn-cent {
   margin-bottom: 24px;
   border-radius: 5px;
   background: #0000f0;
   /* padding-right: 12px; */
   /* margin-right: 4px !important; */
   /* margin-left: 12px; */
   /* margin: 20px; */
   }
   p {
   margin-bottom: 0px !important;
   }
   div#example4_info {
   padding-left: 18px;
   padding-top: 18px;
   }
   button {
   padding: 4px 2px; 
   }
   td.sorting_1 button:not(.btn-1) {
   background: #0200fe;
   color: white;
   }
   button.delete-s {
   background: #e74a3b !important;
   }
   button.btn-1 {
   background: #23b14d;
   color: white;
   padding: 4px 8px;
   }
   button.btn.dropdown-toggle.btn-light {
   border: 1px solid #ddd !important;
   border-radius: 4px !important;
   }
   table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
   border-color: #EEEEEE !important;
   /* border: 1px solid; */
   outline: 1px solid #ddd !important;
   }
   .card-header {
   background: #f8f9fd !important;
   border-radius: 0px !important;
   }
   div#example4_filter {
   padding-right: 18px;
   padding-top: 18px;
   }
   table.dataTable thead th, table.dataTable thead td {
   padding: 10px 18px;
   border-bottom: 1px solid #ddd;
   border-top: 1px solid #ddd;
   }
   table.dataTable thead th, table.dataTable thead td {
   padding: 10px 18px;
   border-bottom: 1px solid #ddd;
   border-top: 1px solid #ddd;
   border: 1px solid #ddd !important;
   }
   div#example4_length {
   padding-left: 18px;
   padding-top: 18px;
   }
   .table-responsive {
   }
   a#example4_next {
   border: 1px solid #ddd !important;
   border-radius: 0px !important;
   margin-left: 0px !important;
   }
   [data-theme-version="dark"] .dataTables_wrapper input[type="search"], [data-theme-version="dark"] .dataTables_wrapper input[type="text"], [data-theme-version="dark"] .dataTables_wrapper select {
   background: #05031A;
   border-color: #2a2833;
   color: #000 !important;
   }
   p.text {
   color: #000 !important;
   font-weight: 700;
   }
   .card {
   background: #fff !important;
   }
   [data-theme-version="dark"] table.dataTable thead th {
   color: #000;
   }
   input[type="search"] {
   background: 0 !important;
   border: 1px solid #ddd !important;
   }
   .para-sec p {
   font-weight: 700;
   color: #000;
   }
   .card-header {
   border-bottom: none !important;
   }
   .card {
   border: 2px solid #ddd;
   }
   button.update-profile {
   text-align: center;
   width: 100%;
   border-radius: 5px;
   }
   [data-theme-version="dark"] {
   background: #fff !important;
   color: #828690;
   }
   a.paginate_button.current {
   margin-left: 0px !important;
   }
   select#cars {
   color: #000 !important;
   }
   input.form-control {
   color: #000 !important;
   }
   option.form-control {
   color: #000 !important;
   }
   td.sorting_1.button-group button {
   /* padding: 10px 2px; */
   border-radius: 5px !important;
   background: #0200fe;
   }
   button.danger {
   margin-right: 12px;
   }
   .parsss h1 {
   color: #000 !important;
   font-size: 21px;
   border: 1px solid #ddd;
   /* display: table; */
   text-align: center;
   /* padding: 20px; */
   /* min-height: 30px !important; */
   height: 97px;
   width: 20%;
   padding-top: 20px;
   }
   .para-sec-1 {
   margin: 38px 0;
   }
   a#example4_previous {
   border: 1px solid #ddd !important;
   border-radius: 0px;
   }
   button {
   border: none !important;
   }
   .deznav {
   width: 15.563rem !important;
   }
   div#example4_paginate {
   margin-right: 20px;
   }
   a#example4_next {
   border-top-right-radius: 6px !important;
   border-bottom-right-radius: 6px !important;
   }
   a#example4_previous {
   border-top-left-radius: 6px;
   border-bottom-left-radius: 6px;
   }
   [data-theme-version="dark"] .card {
   border-radius: 6px !important;
   }
   .input-group {
   display: block !important;
   }
   .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
   width: 100%;
   /* width: auto !important; */
   margin-bottom: 4px !important;
   }
   .form-select-lg {
   padding: 0px !important;
   }
   th.action-sec.sorting {
   color: #0200fe !important;
   }
   th.sorting {
   width: 204.031px !important;
   }
   table.dataTable thead .sorting {
   background: none;
   }
   table.dataTable thead .sorting_asc {
   background: 0 !important;
   }
   div#example4_filter {
   position: relative;
   left: -237px;
   top: -5px;
   }
   select#cars {
   position: absolute;
   right: 0px;
   top: 47px;
   z-index: 1;
   width: 200px;
   height: 35px;
   border: 1px solid #ddd;
   border-radius: 6px;
   padding-left: 8px;
   font-weight: 700;
   }
   .tag-selction {
   position: relative;
   }
   th.sorting_asc {
   min-width: 400px;
   }
   .box-secs span {
   display: none;
   }
   button.btn.btn-primary {
   font-size: 16px;
   border-radius: 4px;
   padding: 3px 28px;
   margin-right: 12px;
   }
   .box-secs {
   border: 5px solid #000;
   height: 100%;
   margin: 8px 0;
   }
   th.action-sec.sorting {
   color: #000 !important;
   font-weight: normal;
   }
   th.sorting_asc {
   font-weight: normal !important;
   }
   .padding-l {
   padding-right: 0px !important;
   }
   button.btn.btn-primary.btn-sec {
   width: 358px;
   margin: 20px 0;
   }
   .para-sec button {
   background: #3f48cc !important;
   }
   button.btn.btn-primary.btn-sec {
   background: #0400ff !important;
   }
   /*.input-group.mb-3.input-success-o {*/
   /*margin-top: -141px;*/
   /*}*/
   .mb-3 input {
   width: 100%;
   }
   table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
    border-color: #EEEEEE !important;
    /* border: 1px solid; */
    outline: 1px solid #ddd !important;
    vertical-align: top;
}
   input[type="text"] {
   background: 0 !important;
   border: 1px solid #ddd !important;
   /*margin-bottom: 15px;*/
   /* width: 100%; */
   }
   .modal-header i {
   color: #c700d0;
   opacity: ine !important;
   font-size: 22px;
   }
   .btn-close {
   background: 0 !important;
   }
   [data-theme-version="dark"] .modal-content {
   background: white !important;
   }
   select {
   width: 100%;
   border: 1px solid #ebebec;
   height: 2.7rem;
   padding-left: 9px;
   /* padding-right: 16px; */
   /* margin-left: 12px; */
   border-radius: 6px;
   color: #777;
   font-size: 14px;
   }
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Pending Discrepancy Letter</h4>
               <div class="tag-selction">
                  <select name="cars" id="cars">
                     <option value="volvo">Pending Request</option>
                     <option value="Process">Process</option>
                     <option value="Hold">Hold </option>
                     <option value="NSDLProcess">NSDL Process</option>
                     <option value="NSDLDocumentVerification">NSDL Document Verification</option>
                     <option value="IncomeTaxDocumentVerification">Income Tax Document Verification</option>
                  </select>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example4" class="display dataTable no-footer"  role="grid" aria-describedby="example4_info">
                     <thead>
                        <!-- start -->
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="User Details: activate to sort column descending" style="width: 243.203px;" aria-sort="ascending">Doc Details</th>
                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Address Details	: activate to sort column ascending" style="width: 200.656px;"></th>
                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Fees	</th>
                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">	</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if($discrepencys->count()>0)
                        @foreach($discrepencys as $item)
                         
                        <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <button type="submit" class="btn btn-primary">{{$item->ApplicationType ?? '' }}</button>
                                 <button type="submit" class="btn btn-primary">{{$item->Acknowledgement ?? '' }} </button>
                                 <div class="row">
                                    <div class="col-md-3 padding-l">
                                       
                                       <div class="box-secs">
                                          <img src="{{ asset('public/admin/images').'/'.$item->customerpassport ?? '' }}" class="rounded-circle" width="40" alt="Product img">
                                       </div>
                                     
                                    </div>
                                    <div class="col-md-9">
                                       <p>Name:  <span class="text-muted">{{$item->ApplicantName ?? '' }}</span></p>
                                       <p> Father N:  <span class="text-muted">{{$item->fathername ?? '' }}</span></p>
                                       <p>  DOB :   <span class="text-muted">{{$item->dateofbirth ?? ''}}</span></p>
                                       <p>     Mobile No:   <span class="text-muted">{{$item->customermobile ?? ''}}</span></p>
                                       <p>     Date & Time:   <span class="text-muted">{{$item->currenrdate ?? '' }} </span></p>
                                       <p>      Order Id :   <span class="text-muted">42681952  </span></p>
                                       
                                       
                                       
                                       
                                               
                                       
                                       
                                    </div>
                                 </div>
                                   <div class="col-md-12">
                                          <button type="submit" class="btn btn-primary btn-sec">Track PAN/TAN Application Status </button>
                                       </div>
                              </div>
                           </td>
                           <td class="sorting_1 ">
                              <button class="btn-cent" data-bs-toggle="modal" data-bs-target="#exampleModalbn">Customer Photo </button>
                              <button class="btn-cent" data-bs-toggle="modal" data-bs-target="#exampleModalbns">Pan Card Copy </button>
                              <button class="btn-cent" data-bs-toggle="modal" data-bs-target="#exampleModalss">Acknowledgement Slip </button>
                              <button class="btn-cent" data-bs-toggle="modal" data-bs-target="#exampleModalpo">Customer Signature </button>
                              <button class="btn-cent">Supporting documents </button>
                              <button class="btn-cent">A - Latter  </button>
                           </td>
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Rs. {{$item->charges ?? '' }} </p>
                              </div>
                            
                           </td>
                           <td class="sorting_1  button-group">
                              <div class="input-group mb-3 input-success-o">
                                 <form action="{{url('admin/pendingDiscrepencyLetterupdate')}}" method=post>
							    @csrf
							    <input type="hidden" name="id" value="{{$item->id ?? ''}}">
                                    <select class="select form-select form-select-lg mb-3" aria-label="form-select-lg" name="types" value="{{ $items->types ?? '' }}">
                                       <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Select</option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="Process" <?php if($item->types == 'Process') { ?> selected="selected"<?php } ?> >Process</option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="Rejected " <?php if($item->types == 'Rejected') { ?> selected="selected"<?php } ?> >Rejected </option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="Hold" <?php if($item->types == 'Hold') { ?> selected="selected"<?php } ?> >Hold</option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="Success" <?php if($item->types == 'Success') { ?> selected="selected"<?php } ?> >Success </option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="NSDLProcess" <?php if($item->types == 'NSDLProcess') { ?> selected="selected"<?php } ?> >NSDL Process</option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="NSDLDocumentVerification" <?php if($item->types == 'NSDLDocumentVerification') { ?> selected="selected"<?php } ?> >NSDL Document Verification</option>
                                       <option style="font-weight: bold;text-transform: uppercase;" value="IncomeTaxDocumentVerification" <?php if($item->types == 'IncomeTaxDocumentVerification') { ?> selected="selected"<?php } ?> >Income Tax Document Verification</option>
                                      
                                    </select>
                                    <div class="mb-3">
                                       <input type="text" name="pendingnum" value="{{$item->pendingnum ?? '' }}">
                                    </div>
                                    <button class="btn-cent update-btn">Update</button>
                                 </form>
                                 
                              </div>
                              
                              
                           </td>
                        </tr>
                        
                        
                        
                        
                        <div class="modal" id="exampleModalbn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Customer Photo </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 col-lg-6">
             <img src="{{ asset('public/admin/images').'/'.$item->customerpassport	 ?? '' }}">
               </div>
                 <a class="btn btn-primary" href="{{ asset('public/admin/images').'/'.$item->customerpassport	 ?? '' }}" download>Download</a>
             
            </div>
         </div>
      
      </div>
   </div>
</div>


<div class="modal" id="exampleModalbns" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pan Card Copy</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 col-lg-6">
             <img src="{{ asset('public/admin/images').'/'.$item->customerpancard	 ?? '' }}">
               </div>
                <a class="btn btn-primary" href="{{ asset('public/admin/images').'/'.$item->customerpancard	 ?? '' }}" download>Download</a>
             
            </div>
         </div>
      
      </div>
   </div>
</div>





<div class="modal" id="exampleModalss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Acknowledgement Slip </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 col-lg-6">
             <img src="{{ asset('public/admin/images').'/'.$item->acknowledgementslip	 ?? '' }}">
               </div>
               
                <a class="btn btn-primary" href="{{ asset('public/admin/images').'/'.$item->acknowledgementslip	 ?? '' }}" download>Download</a>
             
            </div>
         </div>
      
      </div>
   </div>
</div>



<div class="modal" id="exampleModalpo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Customer Signature  </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 col-lg-6">
             <img src="{{ asset('public/admin/images').'/'.$item->clarificationletter	 ?? '' }}">
               </div>
             <a class="btn btn-primary" href="{{ asset('public/admin/images').'/'.$item->clarificationletter	 ?? '' }}" download>Download</a>
            </div>
         </div>
      
      </div>
   </div>
</div>
                        
                        
                        
                        
                        @endforeach
                        @endif
                        
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Discrepency Letter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-xl-12 col-lg-6">
                  <div class="form-group">
                     <select name="" id="" class="abcd">
                        <option value="indian" class="form-control">Select</option>
                        <option value="foreign" class="form-control">Foreign Citizen</option>
                     </select>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-6">
                  <div class="col-auto my-1">
                     <div class="mb-3">
                        <input type="text" class="form-control" placeholder="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary">SUBMIT</button>
         </div>
      </div>
   </div>
</div>













<!--**********************************
   Content body end
   ***********************************-->
@include('admin.footer')