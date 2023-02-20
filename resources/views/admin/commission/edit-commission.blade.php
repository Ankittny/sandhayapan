@include('admin.header')
@include('admin.sidebar')
<style>
   .card-header {
   display: block !important;
   }
   i.mdi.mdi-chevron-down {
   position: absolute;
   right: 22px;
   top: 7px;
   z-index: -1;
   color: #6e6e6e !important;
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
   .card {
   background: 0 !important;
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
   height: 40px;
   }
   h4.card-title {
   color: #000 !important;
   /* margin-bottom: 18px; */
   /* display: inline-block; */
   }
   /*.basic-form input {*/
   /*background: 0 !important;*/
   /*border: 1px solid #ddd !important;*/
   /*border-radius: 0px !IMPORTANT;*/
   /*}*/
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
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Update commission</h4>
                  {{--  <span>Join us today! It takes Only few Steps</span>  --}}
               </div>
               <div class="card-body">
                  <div class="basic-form">
                    @if (\Session::has('success'))
                <div class="alert alert-info">
                   {!! \Session::get('success') !!}
                </div>
                @endif
                     <form action="{{ url('admin/editcommissionu') }}" method="Post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $commission->id }}">
                        @csrf
                        <div class="row">
                           <div class="col-xl-6 col-lg-6">
                              <label>Profile</label>
                              <div class="input-group mb-3 input-warning-o">

                                 <input type="text" class="form-control" name="profile" placeholder="Enter Your profile" value="{{ $commission->profile ?? ''  }}">
                                 @if ($errors->has('profile'))
                         <span class="error" style="color:red">{{ $errors->first('profile') }}</span>
                         @endif
                              </div>
                           </div>


                           <div class="col-xl-6 col-lg-6">
                              <label>Vat No </label>
                              <div class="input-group mb-3 input-success-o">

                                 <input type="text" class="form-control" name="vat_no" placeholder="Enter Your Youtube vat_no" value="{{ $commission->vat_no ?? ''  }}">
                                 @if ($errors->has('vat_no'))
                         <span class="error" style="color:red">{{ $errors->first('vat_no') }}</span>
                         @endif
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                           <div class="mt-3">
                              <input type="submit" value="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                           </div>
                        </div>
                     </form>
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
