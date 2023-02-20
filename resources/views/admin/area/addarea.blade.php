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
   input.form-control {
    border-radius: 5px !important;
}
   [data-theme-version="dark"] .form-control {
   color: #000 !important;
   }
   i.mdi {
   color: #d900c5 !important;
   }
   input.btn.btn-block.btn-primary.btn-lg.font-weight-medium.auth-form-btn {
    color: #000;
    padding: 7px 10px !important;
    border-radius: 7px !important;
    font-size: 16px !important;
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
   .basic-form input {
   background: 0 !important;
   border: 1px solid #ddd !important;

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
</style>
<div class="content-body">
   <!-- row -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Create Area</h4>
               </div>
               <div class="card-body">
                  <div class="basic-form">
                    @if (\Session::has('success'))
                <div class="alert alert-info">
                   {!! \Session::get('success') !!}
                </div>
                @endif
                     <form action="{{ url('admin/createarea') }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            
                             <div class="col-xl-4 col-lg-4">
                              <label>Country</label>
                              <div class="input-group mb-3 input-warning-o">
                                <select name="country_id" class="form-control" id="mycatid">
                                    
                                    <option>Select Country</option>
                                      @if($country->count()> 0)
                                @foreach($country as $item )
                                    <option value="{{ $item->id ?? '' }}">{{$item->name ?? '' }}</option>
                                    @endforeach
                                    @endif
                                </select>    
                                 @if ($errors->has('country_id'))
                              <span class="error" style="color:red">{{ $errors->first('country_id') }}</span>
                         @endif
                              </div>
                           </div>
                           
                           
                           
                           <div class="col-xl-4 col-lg-4">
                              <label>State</label>
                              <div class="input-group mb-3 input-warning-o">
                                  <select name="state_id" class="form-control myoptiond" id="myresult">
                                    <option>Select State</option>
                                  
                                    
                                </select>    
                                    
                              
                                 @if ($errors->has('state_id'))
                              <span class="error" style="color:red">{{ $errors->first('state_id') }}</span>
                         @endif
                              </div>
                           </div>
                           
                           
                           
                           <div class="col-xl-4 col-lg-4">
                              <label>City</label>
                              <div class="input-group mb-3 input-warning-o">
                              <select name="city_id" class="form-control " id="myoptions">
                                  <option>Select City</option>
                        
                              </select>
                                 @if ($errors->has('city_id'))
                              <span class="error" style="color:red">{{ $errors->first('city_id') }}</span>
                         @endif
                              </div>
                           </div>
                            
                            
                            
                           <div class="col-xl-6 col-lg-6">
                              <label>Area Code</label>
                              <div class="input-group mb-3 input-warning-o">

                                 <input type="text" class="form-control" name="area_code" placeholder="Enter Your Area Code">
                                 @if ($errors->has('area_code'))
                              <span class="error" style="color:red">{{ $errors->first('area_code') }}</span>
                         @endif
                              </div>
                           </div>


                           <div class="col-xl-6 col-lg-6">
                              <label>Ao Type</label>
                              <div class="input-group mb-3 input-success-o">

                                 <input type="text" class="form-control" name="ao_type" placeholder="Enter Your  ao type">
                                 @if ($errors->has('ao_type'))
                         <span class="error" style="color:red">{{ $errors->first('ao_type') }}</span>
                         @endif
                              </div>
                           </div>
                           
                           
                            <div class="col-xl-6 col-lg-6">
                              <label>Range Code</label>
                              <div class="input-group mb-3 input-success-o">

                                 <input type="text" class="form-control" name="range_code" placeholder="Enter Your  ao type">
                                 @if ($errors->has('range_code	'))
                         <span class="error" style="color:red">{{ $errors->first('range_code') }}</span>
                         @endif
                              </div>
                           </div>
                           
                            <div class="col-xl-6 col-lg-6">
                              <label>Ao No</label>
                              <div class="input-group mb-3 input-success-o">

                                 <input type="text" class="form-control" name="ao_no" placeholder="Enter Your  ao No">
                                 @if ($errors->has('ao_no'))
                         <span class="error" style="color:red">{{ $errors->first('ao_no') }}</span>
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

<script>
  $(function(){
    //alert("dfghk");
        $("#mycatid").change(function(){
            var id = $(this).val();
            $.ajax({
                method: "get"
                , url: "{{ url('/getstatus') }}/" + id
                , success: function(data) {
                   $("#myresult").html(data);
                }
            });
        });
    });
    
    
    $(function(){
        $(".myoptiond").change(function(){
            var id = $(this).val();
            $.ajax({
                method: "get"
                , url: "{{ url('/getmycites') }}/"+id
                , success: function(data) {
                   $("#myoptions").html(data);
                }
            });
        });
    });
    
    
    $(function() {
        $(".chackmy").change(function() {
            var id = $(this).val();
            $.ajax({
                method: "get"
                , url: "{{ url('chakmycategory') }}/" + id
                , success: function(data) {
                    if (data.status == 200) {
                        if (data.success[0].parent_id == 0) {
                            $("#myhide").show();
                        } else {
                            $("#myhide").hide();
                        }
                    } else {
                        alert('Data Not Found!');
                    }
                }
            });
        });
    });


    $(function(){
        $(".mychanges").change(function(){
            var id  = $(this).val();
            if(id==1){
                $("#hides").hide();
                $(".myoptionshow").show();
            } else {
                $("#hides").show();
                $(".myoptionshow").hide();
            }
        });
    });
    $(function() {
        setTimeout(function() { $("#hideDiv").fadeOut(1500); }, 5000)

        })


</script>

