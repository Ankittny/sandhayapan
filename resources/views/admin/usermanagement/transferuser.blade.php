@include('admin.header')
@include('admin.sidebar')


<style>
    .card-header {
 
    display: block !important;
    padding: 15px !important;
}
.content-body {
    margin-left: 14.563rem !important;
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
h4.card-title {
    color: #000 !important;
    /* margin-bottom: 18px; */
    /* display: inline-block; */
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
</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row user-border">
            <h1>transfer  User</h1>
           <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form User</h4>
                              
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="row">
                                                  <div class="col-xl-12 col-lg-12">
                                                          	<label>Mobile No</label>
										<div class="input-group mb-3 input-success-o">
											<span class="input-group-text">     <i class="mdi mdi-phone text-primary"></i></span>
                 <input type="text" class="form-control" placeholder="Enter Your Mobile No">                       </div>
                 
                 
                          					<label>Full Name</label>
                                        <div class="input-group mb-3 input-warning-o">
											<span class="input-group-text">
											    
											 <i class="mdi mdi-account-outline text-primary"></i>
											</span>
						
                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                            
                                        </div> 
                                        </div>  
                                                
                                                  
                                        
                                          
                                        </div>
                                  

                                   

                                   
</form>
                                   
                             
                                </div>
                            </div>
                        </div>
					</div>


    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">To User</h4>
                              
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="row">
                                                  <div class="col-xl-12 col-lg-12">
                                                          	<label>Mobile No</label>
										<div class="input-group mb-3 input-success-o">
											<span class="input-group-text">     <i class="mdi mdi-phone text-primary"></i></span>
                 <input type="text" class="form-control" placeholder="Enter Your Mobile No">                       </div>
                 
                 
                          					<label>Full Name</label>
                                        <div class="input-group mb-3 input-warning-o">
											<span class="input-group-text">
											    
											 <i class="mdi mdi-account-outline text-primary"></i>
											</span>
						
                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                            
                                        </div> 
                                        </div>  
                                                
                                                  
                                        
                                          
                                        </div>
                                  

                                   

                                   

                                   
                             </form>
                                </div>
                            </div>
                        </div>
					</div>
   
<div class="col-xl-7 col-lg-7 center-btn">
                             <div class="mt-3">
                                        <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Submit Transfer Users</a>
                                    </div>  </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

@include('admin.footer')
