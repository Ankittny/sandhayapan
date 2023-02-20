@include('admin.header')
@include('admin.sidebar')

<style>
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
   input[type="search"] {
    color: #000 !important;
}
   .card-header {
   background: #f8f9fd !important;
   border-radius: 0px !important;
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
    margin-bottom: 35px;
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
   td.sorting_1.button-group button {
   /* padding: 10px 2px; */
   border-radius: 5px;
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
   th.heading-th.sorting {
    font-weight: normal !important;
}
   a#example4_previous {
   border-top-left-radius: 6px;
   border-bottom-left-radius: 6px;
   }
   th.action-sec.sorting {
    color: #000 !important;
    font-weight: normal;
}
   [data-theme-version="dark"] .card {
   border-radius: 6px !important;
   }
   .input-group {
   
    display: block !important;
}
th.action-sec.sorting {
    color: #000 !important;
    font-weight: normal !important;
}
table.dataTable thead .sorting_asc {

    background: 0;
}
table.dataTable thead .sorting {
   
    background: 0;
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%;
    /* width: auto !important; */
        margin-bottom: 4px !important;
}
.form-select-lg {

    padding: 0px !important;

}
.btn-close {
 
    background: 0 !important;
}
[data-theme-version="dark"] .modal-content {

    background: white !important;
}
/*th.action-sec.sorting {*/
/*    color: #0200fe !important;*/
/*}*/
   th.sorting {
    width: 204.031px !important;
}
th.heading-th.sorting {
     width: 375.125px !important;
}
button.btn-cent.update-btn {
    margin-bottom: 0px !important;
}
td.sorting_1 p {
    color: #000;
    font-weight: 700;
}
button.btn-cent.update-btn.delete-btn {
    background: #e74a3b;
}
button.btn.btn-primary {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none !important;
    border-radius: 6px;
    padding: 12px 30px !important;
}
button.btn-close {
    opacity: inherit !important;
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
.modal-header i {
    color: #c700d0;
    opacity: ine !important;
    font-size: 22px;
}
.modal-body h1 {
    font-size: 17px;
    text-align: center;
    
}
button.btn.btn-secondary {
    border-radius: 4px;
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none !important;
    border-radius: 6px;
    padding: 12px 30px !important;
}
.form-group option {
color: #777 !important;
}
button.search {
    background: #0200fe;
    color: white;
    padding: 8px 20px;
    border-radius: 6px;
}
[data-theme-version="dark"] .text-muted {
    color: #000!important;
}
.box-sec {
    padding-left: 15px;
    margin: 20px 0 11px;
}
.box-sec input {
    margin-right: 20px;
}
.box-sec input {
    margin-right: 20px;
    border: 1px solid #ddd;
    padding: 7px 16px;
    border-radius: 6px;
}
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Lost Pan History</h4>
            </div>
          <div class="box-sec">
                       <input type="text" placeholder="2022-10-17">
                          <input type="text"  placeholder="2022-10-17">
                          <button class="search"> Search</button>
          </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example4" class="display dataTable no-footer"  role="grid" aria-describedby="example4_info">
                     <thead>

                        <!-- start -->
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="User Details: activate to sort column descending" style="width: 243.203px;" aria-sort="ascending">User Details</th>
                           <th class="sorting heading-th" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Address Details	: activate to sort column ascending" style="width: 200.656px;">Doc Details	</th>
                           
                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Action	</th>
                         <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Action	</th>
                         <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Action	</th>
                        
                         <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">	</th>
                        
                        
                        
                        
                        </tr>
                     </thead>
                     <tbody>
                     @foreach($kyc as $items)
                        <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Full Name :  <span class="text-muted">{{$items->name}} </span></p>
                               
                              
                                 
                              </div>
                           </td>
                           <td class="sorting_1 ">
                                  <p>Full Name :  <span class="text-muted">{{$items->name}} </span></p>
                                  
                              
                             
                           </td>
                                <td class="sorting_1 ">
                                  <p>Full Name :  <span class="text-muted">{{$items->name}} </span></p>
                             
                             
                           </td>
                                <td class="sorting_1 ">
                                  <p>Full Name :  <span class="text-muted">{{$items->name}} </span></p>
               
                             
                           </td>
                               
                             <td class="sorting_1 ">
                                  <p>Full Name :  <span class="text-muted">{{$items->name}} </span></p>
               
                             
                           </td>
                             <td class="sorting_1 ">
                               <button class="btn-cent update-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                                           <button class="btn-cent update-btn delete-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">Delete</button>
               
                             
                           </td>
                               
                               
                       
                       
  <!--                         <td class="sorting_1  button-group">-->
  <!--                            <div class="input-group mb-3 input-success-o">-->
										    
				
	
  <!--<div class="mb-3">-->
                                        
  <!--                                          <button class="btn-cent update-btn">Update</button>-->
  <!--                                      </div>-->
               
  <!--                    </div>-->
  <!--                            <br>-->
  <!--                            <br>  <br>-->
  <!--                         </td>-->
                        </tr>
                             @endforeach
                        <!-- end -->
                 <!-- <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Full Name :</p>
                                 <p>Email Address :</p>
                                 <p>Phone Number :</p>
                                 <p>EmallAddress :</p>
                                 <p> Aadhaar Number :  </p>
                                 <p> PAN Number :</p>
                                 <p>        State/Union Territory :</p>
                                 <p>       Town/City/District :</p>
                                 <p>       Pin Code :</p>
                                 <p>     Flat/Room/Door/Block No :</p>
                                 <p>   Name of Premises/Building/Village :</p>
                                 <p>  Road/Street/lane/Post Office :</p>
                                 <p>   ArealLocality/Talukal Sub-Division :</p>
                              </div>
                           </td>
                           <td class="sorting_1 ">
                              <button class="btn-cent">Aadhar Card Front Image</button>
                                              <button class="btn-cent">Aadhar Card Back Image<</button>
                                              <button class="btn-cent">Pan Card Front Image</button>
                                              <button class="btn-cent">Shop Front Image</button>
                                              <button class="btn-cent">Agent Live Image</button>
                                              
                                             </td>
                                             
                                             <td class="sorting_1  button-group">
                              <div class="input-group mb-3 input-success-o">
                                 
							<form>
                        
                        <select class="select form-select form-select-lg mb-3" aria-label="form-select-lg">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Select</option>
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >ABCD</option>
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Retailer</option>
                <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Retailer</option>
               </select>
               <div class="mb-3">
                  <textarea class="form-control" rows="4" id="comment" placeholder="Remark"></textarea>
                                            <button class="btn-cent update-btn">Update</button>
                                        </div>
                                       </form>   
                                    </div>
                                    <br>
                                    <br>  <br>
                                 </td> 
                              </tr>-->
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Lost Pan Details</h5>
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
                                              </div>  </div>
                                              </div>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-primary">Pay</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade " id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-modal="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            
            <i class="fa fa-times" aria-hidden="true"></i>
            
        </button>
      </div>
      <div class="modal-body">
 <h1> Are you sure Delete Account Permanently ?</h1>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-primary">Okay</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--**********************************
Content body end
***********************************-->
@include('admin.footer')