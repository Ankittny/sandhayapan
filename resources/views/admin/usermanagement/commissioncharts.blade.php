@include('admin.header')
@include('admin.sidebar')


<style>
    .card-header {
 
    display: block !important;
    padding: 15px !important;
}
strong {
    color: #454a50 !important;
    text-transform: capitalize;
}
h4.card-title {
    color: #454a50 !important;
    font-size: 33px;
    font-weight: 700;
    text-transform: capitalize !important;
}
button.badge.light.badge-success {
    padding: 7px 23px;
    border-radius: 8px !important;
}
span.input-group-text {
    font-weight: 700;
    color: #000 !important;
}
.input-group.mb-3.input-success-o {
    margin-bottom: 0px !important;
}
select.select.form-select.form-select-lg.mb-3.selcted-box {
    color: #000 !important;
    font-weight: 700;
        height: 37px;
    margin-bottom: 0px !important;
        border-radius: 4px !important;
}

.table th, .table td {
    padding: 0px !important;
    padding: 0 9px !important;
}

.table th, .table td {
  
    padding: 0 9px !important;
}
.copyright a {
    color: #000 !important;
}
button.badge.light.badge-success {
    background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    color: white;
    border: none !important;
}
strong {
    color: #000;
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
th {
    border-bottom: none !important;
}
td {
    border-bottom: none !important;
}
input.form-control.text-send {
    background: 0 !important;
    border: 1px solid #ddd !important;
}
.input-group.mb-3.input-warning-o.input-fielddd {
    margin-bottom: 0px !important;
}
span.input-group-text {
      border: 1px solid #ddd !important;
    padding: 6px;
    /* border-top-right-radius: 0; */
    /* border-bottom-right-radius: 0; */
    border-top-left-radius: 4px !important;
    border-bottom-left-radius: 4px !important;
}
span.input-group-text {
    height: 37px !important;
}
[data-theme-version="dark"] .form-control {

    color: #000 !important;
}
span.input-group-text {
    height: 37px;
}
input.form-control.text-send {
    height: 37px !important;
}
i.mdi {
    color: #d900c5 !important;
}
input.form-control {
    height: 3.1rem !important;
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
.card-body {
    padding: 0px !important;
}

.basic-form input {
    background: 0 !important;
    border: 1px solid #ddd !important;
    border-radius: 0px !IMPORTANT;
}
select.select.form-select.form-select-lg.mb-3 {
    background: 0 !important;
    border: 1px solid #ddd;
    border-radius: 0px !important;
        font-size: 14px;
            height: 2.5rem;
}
.card {
    border: 1px solid #ddd;
}
[data-theme-version="dark"] .card-header {
    border-color: #2a2833;
    border-bottom: none !important;
}
[data-theme-version="dark"] {
    /* background: #05031A; */
    color: #828690;
    background: 0 !important;
}
.card-body {
    padding: 12px;
}
[data-theme-version="dark"] .card-header {

    border-bottom: 1px solid #ddd !important;
}
.user-border {
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 4px !important;
}
.user-border h1 {
    color: #000 !important;
    font-size: 20px;
    text-transform: capitalize;
    margin-bottom: 24px;
}
tr {
    border-bottom: 1px solid #dddddd;
    display: inline-block;
    width: 100%;
    padding-bottom: 5px;
    margin-bottom: 5px;
}

</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
     <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Commission Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr style=" padding: 8px !important;">
                                                <th style="width: 59%;       "><strong>Service Type</strong></th>
                                                <th><strong>Commission or Charges</strong></th>
                                                <th><strong></strong></th>
                                                <th><strong></strong></strong></th>
                                         
                                                <th></th>
                                            </tr>
                     
                                        </thead>
                                        <tbody>
                                                
                                            <tr >
                                      
                                                <td style="width:42%">Company Name</td>
                                               
                                                <td><div class="input-group mb-3 input-success-o">
										    
							
													
                                      <select class="select form-select form-select-lg mb-3 selcted-box" aria-label="form-select-lg">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Charge</option>
        <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">ABCD</option>
            <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
                <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
  </select>
                    
                    <i class=" mdi mdi-chevron-down"></i>                    </div></td>
                    
                    <td><div class="input-group mb-3 input-warning-o input-fielddd">
											<span class="input-group-text">₹</span>
                                            <input type="text" class="form-control text-send" placeholder="">
                                        </div></td>
                                                <td><button class="badge light badge-success ">Update</button ></td>
                                       
                                             
                                            </tr>
                                     <tr >
                                      
                                                <td style="width:42%">Company Name</td>
                                               
                                                <td><div class="input-group mb-3 input-success-o">
										    
							
													
                                      <select class="select form-select form-select-lg mb-3 selcted-box" aria-label="form-select-lg">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Charge</option>
        <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">ABCD</option>
            <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
                <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
  </select>
                    
                    <i class=" mdi mdi-chevron-down"></i>                    </div></td>
                    
                    <td><div class="input-group mb-3 input-warning-o input-fielddd">
											<span class="input-group-text">₹</span>
                                            <input type="text" class="form-control text-send" placeholder="">
                                        </div></td>
                                                <td><button  class="badge light badge-success ">Update</button ></td>
                                       
                                             
                                            </tr>
                                                <tr >
                                      
                                                <td style="width:42%">Company Name</td>
                                               
                                                <td><div class="input-group mb-3 input-success-o">
										    
							
													
                                      <select class="select form-select form-select-lg mb-3 selcted-box" aria-label="form-select-lg">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Charge</option>
        <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">ABCD</option>
            <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
                <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
  </select>
                    
                    <i class=" mdi mdi-chevron-down"></i>                    </div></td>
                    
                    <td><div class="input-group mb-3 input-warning-o input-fielddd">
											<span class="input-group-text">₹</span>
                                            <input type="text" class="form-control text-send" placeholder="">
                                        </div></td>
                                                <td><button  class="badge light badge-success ">Update</button ></td>
                                       
                                             
                                            </tr>
                                                  <tr >
                                      
                                                <td style="width:42%">Company Name</td>
                                               
                                                <td><div class="input-group mb-3 input-success-o">
										    
							
													
                                      <select class="select form-select form-select-lg mb-3 selcted-box" aria-label="form-select-lg">   
    <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Charge</option>
        <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">ABCD</option>
            <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
                <option style="font-weight: bold;text-transform: uppercase;" value="tetle" ="">Retailer</option>
  </select>
                    
                    <i class=" mdi mdi-chevron-down"></i>                    </div></td>
                    
                    <td><div class="input-group mb-3 input-warning-o input-fielddd">
											<span class="input-group-text">₹</span>
                                            <input type="text" class="form-control text-send" placeholder="">
                                        </div></td>
                                                <td><button  class="badge light badge-success ">Update</button ></td>
                                       
                                             
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
<!--**********************************
    Content body end
***********************************-->

@include('admin.footer')
