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
   
.para-sec {
    margin-top: -57px;
}
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
table.dataTable thead .sorting {
    background-image: url(../images/sort_both.png);
    background: none !important;
}
table.dataTable thead .sorting_asc {
    background-image: url(../images/sort_asc.png);
    background: none !important;
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
.mb-3 input {
    background: 0 !important;
    border: 1px solid #d4d3d8 !important;
    margin-bottom: 15px !important;
}
label {
    color: #777;
}
div#example4_info {
    color: #777;
}
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Pending Lost Pan By Details</h4>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example4" class="display dataTable no-footer"  role="grid" aria-describedby="example4_info">
                     <thead>
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="User Details: activate to sort column descending" style="width: 243.203px;" aria-sort="ascending">User Details</th>


                           <th class="sorting action-sec" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Action	: activate to sort column ascending" style="width: 108.312px;">Action	</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($detail as $items)
                             <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Applicant Name : {{$items->appName}} </p>
                                 <p>Father Name: {{$items->fatherName}}</p>
                                  <p>Date Of Birth: {{$items->dob}}</p>
                               
                                       <p>Area Pin Code: {{$items->pincode}}</p>
                                
                           </td>
                       
                       
                           <td class="sorting_1  button-group">
                              <div class="input-group mb-3 input-success-o">
										    
							<form action="{{url('admin/updatepanByDetails')}}" method=post>
							    @csrf
							    <input type="hidden" name="id" value="{{$items->id ?? ''}}">
													
<select class="select form-select form-select-lg mb-3" aria-label="form-select-lg" name="type" value="{{ $items->type ?? '' }}">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Select</option>
<option style="font-weight: bold;text-transform: uppercase;" value="Success" <?php if($items->type == 'Success') { ?> selected="selected"<?php } ?> >Success</option>
            <option style="font-weight: bold;text-transform: uppercase;" value="Reject"  <?php if($items->type == 'Reject') { ?> selected="selected"<?php } ?> >Reject</option>
                <!--<option style="font-weight: bold;text-transform: uppercase;" value="tetle" >Retailer</option>-->
  </select>
  <div class="mb-3">
<input type="text" class="form-control" placeholder="" name="numpin" value="{{ $item->numpin ?? '' }}" >

                                            <button class="btn-cent update-btn">Update</button>
                                        </div>
                 </form>   
                      </div>
                           
                           </td>
                        </tr>
                        @endforeach
<!--                 
                                <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Applicant Name :</p>
                                 <p>Father Name:</p>
                                  <p>Date Of Birth:</p>
                               
                                       <p>Area Pin Code:</p>
                                
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
                                          <input type="text" class="form-control" placeholder="">
                                            <button class="btn-cent update-btn">Update</button>
                                        </div>
                 </form>   
                      </div>
                           
                           </td>
                        </tr>
                
                                <tr role="row" class="odd">
                           <td class="sorting_1">
                              <div class="para-sec">
                                 <p>Applicant Name :</p>
                                 <p>Father Name:</p>
                                  <p>Date Of Birth:</p>
                               
                                       <p>Area Pin Code:</p>
                                
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
                                          <input type="text" class="form-control" placeholder="">
                                            <button class="btn-cent update-btn">Update</button>
                                        </div>
                 </form>   
                      </div>
                           
                           </td>
                        </tr>
                 -->
                         
              
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
<!--**********************************
   Content body end
   ***********************************-->
@include('admin.footer')