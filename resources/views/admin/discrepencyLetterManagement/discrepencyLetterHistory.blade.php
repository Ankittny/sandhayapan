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
   button.btn.btn-primary.okey-btn {
    font-size: 0.813rem;
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
   vertical-align: top;
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
    font-weight:bold;
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
/*div#example4_filter {*/
/*    position: relative;*/
/*    left: -237px;*/
/*    top: -5px;*/
/*}*/
/*select#cars {*/
/*position: absolute;*/
/*    right: 0px;*/
/*    top: 47px;*/
/*    z-index: 1;*/
/*    width: 200px;*/
/*    height: 35px;*/
/*    border: 1px solid #ddd;*/
/*    border-radius: 6px;*/
/*    padding-left: 8px;*/
/*    font-weight: 700;*/
/*}*/
.tag-selction {
    position: relative;
}
/*th.sorting_asc {*/
/*    min-width: 400px;*/
/*}*/
.box-secs span {
    display: none;
}
th.action-sec.sorting {
    min-width: 30px;
}
th.sorting {
    min-width: 467px;
}
button.btn.btn-primary {
    font-size: 16px;
    border-radius: 4px;
    padding: 3px 15px;
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
.input-group.mb-3.input-success-o {
    margin-top: -180px;
}
.mb-3 input {
    width: 100%;
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
button.search {
    background: #0200fe;
    color: white;
    padding: 8px 20px;
    border-radius: 6px;
}
/*.box-sec {*/
/*    padding-left: 15px;*/
/*    margin: 20px 0 11px;*/
/*}*/
.box-sec input {
    margin-right: 20px;
    border: 1px solid #ddd;
    padding: 7px 16px;
    border-radius: 6px;
}
button.btn.btn-primary.btn-1.btn-st1 {
    padding: 2px 25px;
}
.padd-sec {
    position: absolute;
    top: -170px;
}
button.btn.btn-primary.btn-1.btn-st2 {
    padding: 2px 19px;
}
/*.sec-top{*/
    
/*    position:relative;*/
    
/*}*/
button.btn.btn-primary.btn-1.full-btn.btn-st6 {
    width: 97%;
}
button.btn.btn-primary.btn-1.btn-st5.btn-st3 {
    padding: 3px 70px;
}
button.btn.btn-primary.btn-1.btn-stss {
    padding: 3px 40px;
}
button.btn.btn-primary.btn-1.btn-ststs {
    padding: 3px 45px;
}
.padd-sec button {
    margin-bottom: 7px;
}
th.table-heading.sorting_asc {
    width: 110px !important;
}
button.btn-cent.update-btn {
    /* margin-left: -13px; */
    margin-right: 125px;
    text-align: center;
    margin-left: -11px;
}
h5#exampleModalLabel {
    font-size: 19px;
}
.row.center-patssss {
    justify-content: center;
}
button.btn-cent.update-btn.delete-btn {
    background: #e74a3b !important;
}
.modal-body H1 {
    FONT-SIZE: 17PX;
    TEXT-ALIGN: CENTER;
    font-weight: normal;
}

th.table-heading.sorting {
    font-weight: normal;
}
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title"> Discrepancy Letter History</h4>
            
            </div>
            <div class="container">
                <div class="row">
      <div class="col-md-9">
            <div class="box-sec">
                       <input type="text" placeholder="2022-10-17">
                          <input type="text" placeholder="2022-10-17">
                          <button class="search"> Search</button>
          </div>
          </div>
           <div class="col-md-3">
             <div class="tag-selction">
               <select name="cars" id="cars">
    <option value="volvo">Pending Request</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
            </div>
          </div>
          </div>
                </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example4" class="display dataTable no-footer"  role="grid" aria-describedby="example4_info">
                     <thead>

                        <!-- start -->
                        <tr role="row">
                                                       <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Address Details	: activate to sort column ascending" style="width: 200.656px;">Uesr Details</th>
                           <th class="sorting_asc table-heading" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="User Details: activate to sort column descending" style="width: 243.203px;" aria-sort="ascending">Doc Details</th>

                           
                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Fees	</th>
                                                      <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">	Balance</th>
                       
                       
                         <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Status	</th>
                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">	</th>
                        </tr>
                     </thead>
                   
                     <tbody>
  
                  <tr role="row" class="odd">
                      
                           <td class="sorting_1 ">
                                       <div class="para-sec">
                              
                                 <p>Aadil Shaikh </p>
                                
                              </div>
                                <div class="para-sec">
                              
                                 <p>9876543210 </p>
                                
                              </div>
                           
                                              
                                       
                                              
                                              
                                             </td>
                           <td class="sorting_1">
                              <div class="para-sec">
                                  <button type="submit" class="btn btn-primary">Indian Citizen</button>
                                  <button type="submit" class="btn btn-primary">469189700054124 </button>
                                  <div class="row">
                                      <div class="col-md-3 padding-l">
                                       <div class="box-secs">
                                           <span>sdd</span>
                                       </div>
                                       
                                  
                                
                                          
                                      </div>
                                       <div class="col-md-9">
                                <p>Name:  <span class="text-muted">ABCD</span></p>
                                                <p> Father N:  <span class="text-muted">ABCD</span></p>
                               <p>  DOB :   <span class="text-muted">12/02/2000</span></p>
                                                <p>     Mobile No:   <span class="text-muted">9891927865</span></p>
                                                  <p>     Date & Time:   <span class="text-muted">10-12-2024 12:24 AM </span></p>
                                                          <p>      Order Id :   <span class="text-muted">42681952  </span></p>
                                                          
                                                          
                                                          
                                                    
                                                        
                                                            
                                                                
                                                                            
                                                                        
                                                                            
                                           
                                           
                                                
                            
                          
                                </div>
                           
                              </div>
                              <div class="">
                      <div class="col-md-12 sec-top">
                          <div class="padd-sec">
                              <div class="row">
                                     <div class="col-md-6 sec-top">
                                   <button type="submit" class="btn btn-primary btn-1 btn-stss">Customer Photo </button>
                                   </div>
                                      <div class="col-md-6 sec-top">
                                  <button type="submit" class="btn btn-primary btn-1 btn-st1 btn-st3">Customer Signature  </button>
                                  </div>
                                             <div class="col-md-6 sec-top">
                                    <button type="submit" class="btn btn-primary btn-1 btn-ststs">Pan Card Copy </button>
                                    </div>
                                               <div class="col-md-6 sec-top">
                                  <button type="submit" class="btn btn-primary btn-1 btn-st3">Supporting documents  </button>
                                  </div>
                                             <div class="col-md-6 sec-top">
                                    <button type="submit" class="btn btn-primary btn-1 btn-st4 btn-sts">Acknowledgement Slip </button>
                                    </div>
                                               <div class="col-md-6 sec-top">
                                  <button type="submit" class="btn btn-primary btn-1 btn-st5 btn-st3">A - Latter  </button>
                                  </div>
                                             <div class="col-md-12 sec-top">
                                     <button type="submit" class="btn btn-primary btn-1 full-btn btn-st6">Track PAN/TAN Application Status  </button>
                                     </div>
                                        </div>
                                  </div>
                                  </div>
                                 </div>
                              </div>
                           </td>
                      
                                             
                                                                  <td class="sorting_1">
                              <div class="para-sec">
                              
                                 <p>Rs. 80 </p>
                                
                              </div>
                           
                         
                           </td>
                                                          <td class="sorting_1">
                              <div class="para-sec">
                              
                                 <p>Rs. 100 </p>
                                
                              </div>
                                <div class="para-sec">
                              
                                 <p>Rs. 80 </p>
                                
                              </div>
                            
                           </td>
                                                <td class="sorting_1">
                              <div class="para-sec">
                              
                                 <p> SUCCESS</p>
                                
                              </div>
                                <div class="para-sec">
                              
                                 <p>Rs. 80 </p>
                                
                              </div>
                                <div class="para-sec">
                              
                                 <p>Rs. 80 </p>
                                
                              </div>
                            
                          
                           </td>
                                             <td class="sorting_1  button-group">
                              <div class="input-group mb-3 input-success-o">
                                 
						<div class="row center-patssss">
						    <div class="col-md-4">
                                          <button class="btn-cent update-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
                                          </div>
                                             <div class="col-md-4">
                                          <button class="btn-cent update-btn delete-btn" data-bs-toggle="modal" data-bs-target="#exampleModal6">Delete</button>
                                          </div>
                                    </div>
                                    </div>
                                    
                                      
                                 </td> 
                              </tr>
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
                                              </div>  </div>
                                              </div>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-primary">SUBMIT</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade " id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-modal="true" >
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
    
        <button type="button" class="btn btn-primary okey-btn">Okay</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--**********************************
Content body end
***********************************-->
@include('admin.footer')