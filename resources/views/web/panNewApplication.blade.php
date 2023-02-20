@include('web.header')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.form-group.input-fieldss.pan-group {
    position: relative;
}

   .form-group {
    margin-bottom: 15px;
}
.form-group.group-secs select {
    color: #e028c2 !important;
}
   a {
   text-decoration: none;
   }
   .top-check {
   margin-top: 25px !important;
   }
   .my-2.d-flex.justify-content-between.align-items-center {
   margin-bottom: 0px !important;
   }
   span.term-con {
  color: #ed60ca;
    font-size: 14px;
    font-weight: 700;
   }
   label.form-check-label.text-muted {
   font-size: 14px;
   }
   .body-sec h4 {
   font-size: 20px;
   }
   a.btn.btn-block.btn-primary.btn-lg.font-weight-medium.auth-form-btn {
   background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
   border: none !important;
   padding: 10px;
   font-size: 17px;
   border-radius: 6px !important;
   }
   label.label-hidden {
   visibility: hidden;
   }
   .row.br-sec {
   border-bottom: 1px solid #e3e6ef;
   border-top: 1px solid #e3e6ef;
   padding: 23px 0 30px;
   }
   .bottom-sd {
   margin-bottom: 20px;
   }
   .bottom-pansec {
   padding-left: 0px;
   padding-right: 0px;
   padding: 23px 0 30px;
   border-bottom: 1px solid #e3e6ef;
   }
   .form-group.input-fieldss input {
   width: 100%;
   border: 1px solid #e5e5e5;
   border-radius: 6px;
   /* height: 35px; */
   padding: 8px;
   }
   .card_wrapper {
   display: grid;
   grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
   margin: 0 auto;
   max-width: 1240px;
   padding: 30px 28px;
   grid-gap: 30px;
   align-items: stretch;
   border: 1px solid #edeff4;
   border-radius: 6px;
   margin-bottom: 34px;
   }
   section.form-pAN select {
   width: 100%;
   border: 1px solid #e5e5e5;
   padding: 10px;
   border-radius: 6px;
       font-weight: 700;
       font-size:14px;
   }
   .card img {
   height: 150px;
   }
   .card p {
   text-align: center;
   color: #000;
   font-weight: 700;
   font-size: 22px;
   margin-top: 30px;
   margin-bottom: 0px;
   }
   .card.pan-card ul li {
   list-style-type: none;
   font-size: 15px;
   }
   .card.pan-card {
   padding: 0px;
   }
   .card.pan-card h1 {
   font-size: 15px;
   text-align: center;
   border-bottom: 1px solid #edeff4;
   padding: 7px;
   }
   .card {
   padding: 10px;
   border: 1px solid #edeff4;
   }
   .card.pan-card h1 {
   font-size: 15px;
   text-align: center;
   }
   .card.pan-card ul {
   padding-left: 11px;
   }
   .card.pan-card button {
   background: #fa8d43;
   border: none;
   color: white;
   margin-bottom: 10px;
   }
   .center-form {
   justify-content: center;
   }
   button.btn-pan {
   background: #a71af2 !important;
   margin-right: 8px;
   margin-left: 8px;
   border-radius: 4px;
   padding: 3px;
   }
   #custom-button1 {
   padding: 3px;
   color: white;
   background-color: #a71af2;
   border-radius: 5px;
   cursor: pointer;
   font-size: 15px;
   }
   /*#custom-button:hover {*/
   /*  background-color: #00b28f;*/
   /*}*/
   #custom-text1 {
   margin-left: 10px;
   font-family: sans-serif;
   color: #aaa;
   }
   span.note {
   border-bottom: 1px solid #edeff4;
   margin-bottom: 15px;
   padding-bottom: 5px;
   padding-left: 10px;
   font-weight: 700;
   }
   button#custom-button1 {
   background: #a71af2 !important;
   border-radius: 4px;
   }
   #custom-button {
   padding: 3px;
   color: white;
   background-color: #a71af2;
   border-radius: 5px;
   cursor: pointer;
   font-size: 15px;
   }
   /*#custom-button:hover {*/
   /*  background-color: #00b28f;*/
   /*}*/
   #custom-text {
   margin-left: 10px;
   font-family: sans-serif;
   color: #aaa;
   }
   span.note {
   border-bottom: 1px solid #edeff4;
   margin-bottom: 15px;
   padding-bottom: 5px;
   padding-left: 10px;
   font-weight: 700;
   }
   button#custom-button1 {
   background: #a71af2 !important;
   border-radius: 4px;
   }
   .edit-file.file-edits {
   padding-right: 10px;
   padding-left: 10px;
   }
   .process-btn button {
   width: 100% !important;
   }
   .edit-file.file-edits button {
   width: 100%;
   margin-left: 0;
   }
   span.note.none {
   border: none;
   }
   .card.pan-card.card-pan .process-btn {
   margin: 8px 0 0;
   }
   .body-sec {
   display: flex;
   align-items: center;
   padding: 20px 20px 20px 20px
   }
   .body-sec span {
   background: #eeeafa;
   width: 40px;
   height: 40px;
   text-align: center;
   line-height: 40px;
   color: #e028c2;
   font-weight: 700;
   border-radius: 40px;
   margin-right: 15px;
   }
   .form-group label {
   display: block;
   }
   section.form-pAN label {
   font-weight: 700;
   margin-bottom: 10px;
   }
   .pan-brd {
   /*border: 1px solid #e3e6ef;*/
   border-radius: 6px;
   }
   span.hastric {
   color: #f05060;
   }
   ::placeholder{
   color:#000;
   font-weight: 700;
   }
</style>
</head>
<body>
 
   <div class="container images-secscsc">
   <div class="row">
            <div class="col-sm-12">
   <div class="images-sec">
       <img src="public/web/images/logo.jpg">
   </div>
      </div>
         </div>
              </div>
   <div class="center">
             <h1>Pan New Application</h1>
   </div>
   <section class="form-pAN">
 
      <div class="container pan-brd">
      <div class="row center-form">
          @if (\Session::has('success'))
          <div class="alert alert-info">
          {!! \Session::get('success') !!}
          </div>
          @endif
<form class="" action="{{ url('creatsepanapplication') }}" method="Post" enctype="multipart/form-data">
        @csrf
         <div class="body-sec">
            <span>01</span>
            <h4 class="card-title">Customer Information</h4>
         </div>
    
         <div class="row br-sec">
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">Application Type <span class="hastric">*</span></label>
    <select onchange="MyFunctions(this)" id="country" name="application_type" required>
                  <option value="">Select Country</option>
                   @php
                    $countres = DB::table('tbl_countries')->get();
                   @endphp
                     @if($countres->count() > 0)
                      @foreach($countres as $items)
                      <option value="{{$items->id ?? ''}}">{{$items->name ?? ''}}</option>
                      @endforeach
                     @endif
                     <!--<option value="canada">Canada</option>-->
                     <!--<option value="usa">USA</option>-->
                  </select> 
                  @if ($errors->has('application_type'))
                  <span class="error">{{ $errors->first('application_type') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">State <span class="hastric">*</span></label>
                  <select id="resultsssss" name="state" onchange="myState(this)"  required>
                      <option value="">Select State</option>
                    @php
                     $state = DB::table('tbl_states')->where('country_id','101')->get();
                    @endphp
                     @if($state->count() > 0)
                        @foreach($state as $items)
                       <option value="{{$items->id ?? ''}}">{{$items->name ?? ''}}</option>
                       @endforeach
                    @endif   
                  </select>
                   @if ($errors->has('state'))
                  <span class="error">{{ $errors->first('state') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">Category of Applicant<span class="hastric">*</span></label>
                  <select id="applicantget" name="category_of_applican" class="applicantgets" required>
                        <option value="">Select Applicant</option>
                     <option value="Individual">Individual</option>
                     <option value="Firm">Firm</option>
                     <option value="Body of Individuals">Body of Individuals</option>
                       <option value="Hindu Undivided Family">Hindu Undivided Family</option>
                          <option value="Association of Persons">Association of Persons</option>
                            <option value="Local Authority">Local Authority</option>
                                   <option value="Company">Company</option>
                                   <option value="Trust">Trust</option>
                                      <option value="Artificial Juridical Person
">Artificial Juridical Person
</option>
                                                <option value="Government">Government
                                                </option>
                                                <option value="Limited Liability Partnership">Limited Liability Partnership
                                                </option>
                  </select>
                   @if ($errors->has('category_of_applican'))
                  <span class="error">{{ $errors->first('category_of_applican') }}</span>
                  @endif
               </div>
            </div>
        
         </div>
         <div class="row br-sec ">
            <div class="col-sm-6">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Aadhaar Number  <span class="hastric">*</span></label>
                    <input type="text" id="fname" name="aadhaar_number" maxlength="12" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                   @if ($errors->has('aadhaar_number'))
                  <span class="error">{{ $errors->first('aadhaar_number') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Name As Per Aadhaar  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="name_as_per_aadhaar"  maxlength="75"style="text-transform:uppercase" style="text-transform:uppercase"  onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('name_as_per_aadhaar'))
                  <span class="error">{{ $errors->first('name_as_per_aadhaar') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="row br-sec">
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s Last Name/ Surname  <span class="hastric"></span></label>
                  <input type="text" id="fname" name="applicant_last_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                   @if ($errors->has('applicant_last_name'))
                  <span class="error">{{ $errors->first('applicant_last_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s First Name <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_first_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                  @if ($errors->has('applicant_first_name'))
                  <span class="error">{{ $errors->first('applicant_first_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s Middle Name <span class="hastric"></span></label>
                  <input type="text" id="fname" name="applicant_middle_name"maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('applicant_middle_name'))
                  <span class="error">{{ $errors->first('applicant_middle_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-5 ">
               <div class="form-group input-fieldss ">
                  <label for="exampleSelectGender">Applicant’s Name on Card  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_name_on_card" maxlength="75"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('applicant_name_on_card'))
                  <span class="error">{{ $errors->first('applicant_name_on_card') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Date of Birth /incorporationation <span class="hastric">*</span></label>
                  <input type="date" id="dateofbirth" name="dob_incorporationation" required>
                 
                   @if ($errors->has('dob'))
                  <span class="error">{{ $errors->first('dob') }}</span>
                  @endif
               </div>
            </div>
            
                 <div class="col-sm-3">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant Age<span class="hastric">*</span></label>
                  <input type="text" id="agess" name="dob" readonly required>
                   @if ($errors->has('dob'))
                  <span class="error">{{ $errors->first('dob') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-3">
               <div class="form-group">
                  <label for="exampleSelectGender">Gender <span class="hastric">*</span></label>
                  <select name="gender" required>
                     <option value="">Select Gender</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     <option value="Transgender">Transgender</option>
                  </select>
                    @if ($errors->has('gender'))
                  <span class="error">{{ $errors->first('gender') }}</span>
                  @endif
               </div>
            </div>
              <div class="col-sm-3">
                   <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Pan Card Type <span class="hastric">*</span></label>
                  <input type="text" class="Assessee" name="Pan_Card_Type" style="text-transform:uppercase" readonly required>
                  @if ($errors->has('Pan_Card_Type'))
                  <span class="error">{{ $errors->first('Pan_Card_Type') }}</span>
                  @endif
               </div>
                  
             
            </div>
            
              <div class="col-sm-6">
               <div class="form-group group-secs">
                  <label for="exampleSelectGender">Parents name to be printed on the PAN Card  <span class="hastric">*</span></label>
                  <select id="changemyrow" name="fathermother" required>
                      <option value="">Parents name to be printed on the PAN Card</option>
                     <option value="Father">Father</option>
                     <option value="Mother">Mother</option>
                  </select>
                                   </div>
            </div>
         </div>
        
         <div class="row br-sec">
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="">Father’s Last Name  <span class="hastric">*</span></label>
                  
                  <label style="display:none" class="" for="exampleSelectGender">Parents’s Last Name  <span class="hastric">*</span></label>
                  
                  <input type="text"  name="father_last_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('father_last_name'))
                  <span class="error">{{ $errors->first('father_last_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                 
                  
                   <label for="exampleSelectGender" class="">Father’s First Name <span class="hastric"></span></label>
                   
                   
                    <label style="display:none" class="" class="" for="exampleSelectGender">Parents’s First Name <span class="hastric"></span></label>
                  
                  <input type="text" id="fathername" name="father_first_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('father_first_name'))
                  <span class="error">{{ $errors->first('father_first_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="">Father’s middle Name <span class="hastric"></span></label>
                  
                  
                   <label style="display:none" class="" for="exampleSelectGender">Parents’s middle Name <span class="hastric"></span></label>
                   
                  <input type="text" id="fname" name="father_middle_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('father_middle_name'))
                  <span class="error">{{ $errors->first('father_middle_name') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-6 ">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="">Father’s Name on Card  <span class="hastric">*</span></label>
                  <label style="display:none" class="" for="exampleSelectGender">Parents’s Name on Card  <span class="hastric">*</span></label>
                  
                  <input type="text" id="samenamefather" name="father_ame_on_card" maxlength="75"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" readonly>
                  @if ($errors->has('father_ame_on_card'))
                  <span class="error">{{ $errors->first('father_ame_on_card') }}</span>
                  @endif
               </div>
            </div>
       
         
         </div>
          
          
         <div class="row br-sec mychange" style="display:none;">
             
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Mother’s Last Name  <span class="hastric"></span></label>
                  <input type="text"  name="mother_last_name"  maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" style="text-transform:uppercase">
                   @if ($errors->has('mother_last_name'))
                  <span class="error">{{ $errors->first('mother_last_name') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Mother’s First Name <span class="hastric">*</span></label>
                  <input type="text" id="mothername" maxlength="25" name="mother_first_name" style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('mother_first_name'))
                  <span class="error">{{ $errors->first('mother_first_name') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Mother’s middle Name <span class="hastric"></span></label>
                  <input type="text" id="fname"  maxlength="25" style="text-transform:uppercase" name="mother_middle_name" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                  @if ($errors->has('mother_middle_name'))
                  <span class="error">{{ $errors->first('mother_middle_name') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-6 ">
               <div class="form-group input-fieldss ">
                  <label for="exampleSelectGender">Mother’s Name on Card  <span class="hastric">*</span></label>
                  <input type="text" id="samenamemother" maxlength="75"  style="text-transform:uppercase" name="mother_ame_on_card" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  readonly required>
                  @if ($errors->has('mother_ame_on_card'))
                  <span class="error">{{ $errors->first('mother_ame_on_card') }}</span>
                  @endif
               </div>
            </div>
         </div>
         
        
         <div class="body-sec">
            <span>02</span>
            <h4 class="card-title">Address for communication</h4>
         </div>
         <div class="row br-sec hidemyfilds ">
              <div class="col-sm-5">
                 <div class="template-demo">
                             <p for="exampleSelectGender">PAN card will be Dispatched At Address  
                    <span class="hastric">*</span></p>
                      <button style="display:none" name="ResidenceAddress" value="no" type="button" class="btn btn-outline-primary btn-fw newbe ssss"> Residence Address  
                       <i class="fa fa-close"></i>
                     </button>
                     
                      <button  type="button" name="ResidenceAddress" value="yes" class="btn btn-outline-primary btn-fw ddddd"> Residence Address  
                       <!--<i class="fa fa-close"></i>-->
                       <i class="fa fa-check check" aria-hidden="true"></i>
                     </button>
                     <input type="hidden" name="ResidenceAddress" value="yes" id="ResidenceAddressvalue">
                    </div>
              
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                   <label for="exampleSelectGender" style="visibility:hidden">office address <span class="hastric">*</span>
                   </label>
                   
        <button  type="button" name="ShopAddress" value="yes" class="btn btn-outline-primary btn-fw dddddd"> Shop Address  
                       <!--<i class="fa fa-close"></i>-->
                       <i class="fa fa-check check" aria-hidden="true"></i>
                     </button>
        
                   <button style="display:none" name="ShopAddress" value="no"  type="button" class="btn btn-outline-primary btn-fw newbes sssss">Shop Address  
                       <i class="fa fa-close"></i>
                     </button>
                <input type="hidden" name="ShopAddress" value="yes" id="ShopAddressValue">
               </div>
            </div>
            <div class="col-sm-3">
               <div class="form-group input-fieldss" id="hiddenboxdddddd">
                   <label for="exampleSelectGender" style="visibility:hidden">office address <span class="hastric">*</span></label>
                    <button style="display:none"  type="button" name="officeAddress" value="no" class="btn btn-outline-primary btn-fw ddddddd">office  Address  
                       <!--<i class="fa fa-close"></i>-->
                       <i class="fa fa-check check" aria-hidden="true"></i>
                     </button>
        
                    <button  type="button" name="officeAddress" value="yes" class="btn btn-outline-primary btn-fw newbess ssssss">office  Address  
                       <i class="fa fa-close"></i>
                    </button>
                    <input type="hidden" name="officeAddress" value="no" id="officeAddressValue">
               </div>
            </div>
           
            </div>
            
        
             <div class="row br-sec ">
             <div class="col-sm-4">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Country Name<span class="hastric">*</span></label>
                <input type="text" id="countrysecond" name="category_of_applican" style="text-transform:uppercase" value="India" readonly required>
                   @if ($errors->has('category_of_applican'))
                  <span class="error">{{ $errors->first('category_of_applican') }}</span>
                  @endif
               </div>
            </div>
            
            
           <div class="col-sm-4">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">State/Union Territory<span class="hastric">*</span></label>
                <input type="text" id="mystates" name="State_Union_Territory" style="text-transform:uppercase" value="Utterpardash" readonly required>
                   @if ($errors->has('State_Union_Territory'))
                  <span class="error">{{ $errors->first('State_Union_Territory') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-4">
                 <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Town/City/District<span class="hastric">*</span></label>
                   <select id="mycitys" name="Town_City_District" class="areacode"  required>
                      <option value="">Select Cites</option>
                  </select>
                <!--<input type="text" id="fname" name="Town_City_District" style="text-transform:uppercase" value="modinagar" readonly required>-->
                   @if ($errors->has('Town_City_District'))
                  <span class="error">{{ $errors->first('Town_City_District') }}</span>
                  @endif
               </div>
            </div>
            
            
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Pin Code  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="locality" maxlength="7" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                  @if ($errors->has('locality'))
                  <span class="error">{{ $errors->first('locality') }}</span>
                  @endif
               </div>
            </div>
            
            
            <div class="col-sm-4  bottom-sd">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Country code (ISD code) <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Country_code_ISD_code)"  maxlength="2" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                </div>
            </div>
            <div class="col-sm-4  bottom-sd">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Flat/Room/Door/Block No <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Flat_Room_Door_Block_No" maxlength="25" style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                </div>
            </div>
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Name Of Permission/Building/Village <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Name_Of_Permission_Building_Village" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Name_Of_Permission_Building_Village'))
                  <span class="error">{{ $errors->first('Name_Of_Permission_Building_Village') }}</span>
                  @endif
               </div>
            </div>
              <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Road/Street/Lane/Post Office <span class="hastric">*</span></label>
            <input type="text" id="fname" name="Road_Street_Lane_Post _Office" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Road_Street_Lane_Post _Office'))
                  <span class="error">{{ $errors->first('Road_Street_Lane_Post _Office') }}</span>
                  @endif
               </div>
            </div>
            
             
              <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Area/Locality/Taluka/Sub -Divisio <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Area_Locality_Taluka_Sub_Divisio" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Area_Locality_Taluka_Sub_Divisio'))
                  <span class="error">{{ $errors->first('Area_Locality_Taluka_Sub_Divisio') }}</span>
                  @endif
               </div>
            </div>
            
            
         </div>
         <div class="row br-sec ">
       
         
           
       
            <div class="col-sm-6 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Mobile Number  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="mobile"  maxlength="10" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                   @if ($errors->has('mobile'))
                  <span class="error">{{ $errors->first('mobile') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-6 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Email Address  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="email" required>
                   @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif
               </div>
            </div>
         </div>
         
         
            <div class="row br-sec ">
       
         
           
       
            <div class="col-sm-3 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Area Code  <span class="hastric">*</span></label>
                  <input type="text" id="area_code" name="Area_Code" required>
                   @if ($errors->has('Area_Code'))
                  <span class="error">{{ $errors->first('Area_Code') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-3 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">AO Type <span class="hastric">*</span></label>
                  <input type="text" id="ao_type" name="AO_Type" required>
                   @if ($errors->has('AO_Type'))
                  <span class="error">{{ $errors->first('AO_Type') }}</span>
                  @endif
               </div>
            </div>
        <div class="col-sm-3 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Range Code  <span class="hastric">*</span></label>
                  <input type="text" id="range_code" name="Range_Code" required>
                   @if ($errors->has('Range_Code'))
                  <span class="error">{{ $errors->first('Range_Code') }}</span>
                  @endif
               </div>
            </div>
     
         <div class="col-sm-3 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">AO No <span class="hastric">*</span></label>
                  <input type="text" id="ao_no" name="AO_No" required>
                   @if ($errors->has('AO_No'))
                  <span class="error">{{ $errors->first('AO_No') }}</span>
                  @endif
               </div>
            </div>
         
         </div>
         <div class="body-paryss">
            <div class="body-sec sec-body">
                <div class="ico-wrap">
               <span>03</span>
               </div>
               <div class="text-wrap vcenter">
               <h4 class="card-title">Documents Submitted</h4>
               <p>Proof of Identity, Proof Of Address, Proof Of Date Of Birth *</p>
               </div>
         
            </div>
         </div>
         <div class="row br-sec">
            <div class="col-sm-4">
                
                
                   <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Proof of identity  <span class="hastric">*</span></label>
               <select id="country" name="Proof_of_identity" required>
                     <option value="">Please Select</option>
                     <option value="Certificate of Identity signed by a Gazetted Officer">Certificate of Identity signed by a Gazetted Officer</option>
    <option value="Certificate of Identity signed by a Member of Legislative Assembly">Certificate of Identity signed by a Member of Legislative Assembly</option>
     <option value="Certificate of Identity signed by a Member of Parliament">Certificate of Identity signed by a Member of Parliament</option>
     <option value="Certificate of Identity signed by a Municipal Councillor">Certificate of Identity signed by a Municipal Councillor</option>
     
     <option value="Certificate of Identity signed by a Member of Legislative Assembly">Certificate of Identity signed by a Member of Legislative Assembly</option>
     
     <option value="Driving License">Driving License</option>
     
     <option value="Passport">Passport</option>
     <option value="Arm's license">Arm's license</option>
     <option value="Central Government Health Scheme Card  ">Central Government Health Scheme Card  </option>
     <option value="Ex-Servicemen Contributory Health Scheme photo card">Ex-Servicemen Contributory Health Scheme photo card</option>
     
     <option value="Bank certificate in Original on letter head from the branch (along with name and stamp of the issuing officer) containing duly
attested photograph and bank account number of the applicant">Bank certificate in Original on letter head from the branch (along with name and stamp of the issuing officer) containing duly
attested photograph and bank account number of the applicant</option>



     
     <option value="Photo identity Card issued by the Central Government or State Government or Public Sector Undertaking">Photo identity Card issued by the Central Government or State Government or Public Sector Undertaking</option>
     
      <option value="Pensioner Card having photograph of the applicant"> Pensioner Card having photograph of the applicant</option>
      
       <option value="Elector's photo identity card">Elector's photo identity card</option>
       <option value="Ration card having photograph of the applicant">Ration card having photograph of the applicant</option>
       
        <option value="AADHAAR Card issued by the Unique Identification Authority of India">AADHAAR Card issued by the Unique Identification Authority of India</option>
                   
                 
                  </select>
               </div>
               </div>
     <div class="col-sm-4">
                
                
                   <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Proof of address<span class="hastric">*</span></label>
               <select id="country" name="Proof_of_address" required>
                     <option value="">Please Select</option>
                   <option>Latest property tax assessment order</option>
<option>Depository account statement (Not more than 3 months old from the date of application)</option>
<option>Credit card statement (Not more than 3 months old from the date of application)</option>
<option>Bank account statement/passbook (Not more than 3 months old from the date of application)</option>
<option>Landline Telephone Bill (Not more than 3 months old from the date of application)</option>
<option>Certificate of Address signed by a Municipal Councillor</option>
<option>Driving License</option>
<option>Passport</option>
<option>Property Registration Document</option>
<option>Electricity Bill (Not more than 3 months old from the date of application)</option>
<option>Bank Account Statement in the country of residence (Not more than 3 months old from the date of application)</option>
<option>NRE bank account statement (Not more than 3 months old from the date of application)</option>
<option>Employer certificate in original</option>
<option>Elector's photo identity card</option>
<option>Certificate of Address signed by a Gazetted Officer</option>
<option>Passport of the spouse</option>
<option>Post office passbook having address of the applicant</option>
<option>Domicile certificate issued by the Government</option>
<option>Allotment letter of accommodation issued by Central or State Government of not more than three years old</option>

                  </select>
               </div>
               </div>
             <div class="col-sm-4">
                
                
                   <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Proof of date of birth     <span class="hastric">*</span></label>
               <select id="country" name="Proof_of_date_of_birth" required>
                     <option value="">Please Select</option>
                    <option>Birth Certificate issued by the Municipal Authority or any office authorized to issue Birth and Death Certificate by the Registrar</option>
<option>of Birth and Death of the Indian Consulate</option>
<option>Pension payment order</option>
<option>Marriage certificate issued by Registrar of Marriages</option>
<option>Matriculation certificate</option>
<option>Passport</option>
<option>Driving License</option>
<option>Domicile certificate issued by the Government</option>
<option>Affidavit sworn before a magistrate stating the date of birth</option>
<option>Matriculation Marksheet of recognised board</option>
<option>AADHAAR Card issued by the Unique Identification Authority of India</option>
<option>Elector's photo identity card</option>
<option>Photo identity Card issued by the Central Government or State Government or Public Sector Undertaking</option>
<option>Central Government Health Scheme Card</option>
<option>Ex-Servicemen Contributory Health Scheme photo card</option>
                  </select>
               </div>
               </div>
         
         </div>
         
    <div class="body-paryss fatherfieldshow" style="display:none;">
                <div class="body-sec sec-body">
                    <div class="ico-wrap">
                   <span>04</span>
                   </div>
                   <div class="text-wrap vcenter">
                    <h4 class="card-title">Representative Assessee (RA)</h4>
                </div>
             
        </div>
    </div>
    
    
    
         <div class="row br-sec fatherfieldshow" style="display:none;">
             
               <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="fatherfieldhide">Parents's Last Name  <span class="hastric">*</span></label>
                  
                  <label style="display:none" class="fatherfieldshow" for="exampleSelectGender">Parents’s Last Name  <span class="hastric">*</span></label>
                  
                  <input type="text" id="copyname" name="parents_last_name" maxlength="25" style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('father_last_name'))
                  <span class="error">{{ $errors->first('father_last_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                 
                  
                   <label for="exampleSelectGender" class="fatherfieldhide">Parents's First Name <span class="hastric"></span></label>
                   
                   
                    <label style="display:none" class="fatherfieldshow" class="" for="exampleSelectGender">Parents’s First Name <span class="hastric"></span></label>
                  
                  <input type="text" id="parentsname" name="parents_first_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('father_first_name'))
                  <span class="error">{{ $errors->first('father_first_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="fatherfieldhide">Parents's middle Name <span class="hastric"></span></label>
                  
                  
                   <label style="display:none" class="fatherfieldshow" for="exampleSelectGender">Parents’s middle Name <span class="hastric"></span></label>
                   
                  <input type="text"  name="parents_middle_name" maxlength="25"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                  @if ($errors->has('father_middle_name'))
                  <span class="error">{{ $errors->first('father_middle_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-6 ">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender" class="fatherfieldhide">Parents's Name on Card  <span class="hastric">*</span></label>
                  
                  
                  
                  <label style="display:none" class="" for="exampleSelectGender">Parents’s Name on Card  <span class="hastric">*</span></label>
                  
                  <input type="text" id="copname" name="father_ame_on_card" maxlength="75"style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" readonly>
                  @if ($errors->has('father_ame_on_card'))
                  <span class="error">{{ $errors->first('father_ame_on_card') }}</span>
                  @endif
               </div>
            </div>
            </div>
         <div class="row br-sec fatherfieldshow" style="display:none;">
             <div class="col-sm-4">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Country Name<span class="hastric">*</span></label>
                <input type="text" id="fname" name="category_of_applican" style="text-transform:uppercase" value="India" readonly required>
                   @if ($errors->has('category_of_applican'))
                  <span class="error">{{ $errors->first('category_of_applican') }}</span>
                  @endif
               </div>
            </div>
            
            
           <div class="col-sm-4">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's State/Union Territory<span class="hastric">*</span></label>
                <input type="text" id="fname" name="State_Union_Territory" style="text-transform:uppercase" value="Utterpardash" readonly required>
                   @if ($errors->has('State_Union_Territory'))
                  <span class="error">{{ $errors->first('State_Union_Territory') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-4">
                 <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Town/City/District<span class="hastric">*</span></label>
                <input type="text" id="fname" name="Town_City_District" style="text-transform:uppercase" value="modinagar" readonly required>
                   @if ($errors->has('Town_City_District'))
                  <span class="error">{{ $errors->first('Town_City_District') }}</span>
                  @endif
               </div>
            </div>
            
            
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Pin Code  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="locality" maxlength="7" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                  @if ($errors->has('locality'))
                  <span class="error">{{ $errors->first('locality') }}</span>
                  @endif
               </div>
            </div>
            
            
            <div class="col-sm-4  bottom-sd">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Country code (ISD code) <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Country_code_ISD_code)"  maxlength="2" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" required>
                </div>
            </div>
            <div class="col-sm-4  bottom-sd">
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parent Flat/Room/Door/Block No <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Flat_Room_Door_Block_No" maxlength="25" style="text-transform:uppercase" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                </div>
            </div>
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Name Of Permission/Building/Village <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Name_Of_Permission_Building_Village" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Name_Of_Permission_Building_Village'))
                  <span class="error">{{ $errors->first('Name_Of_Permission_Building_Village') }}</span>
                  @endif
               </div>
            </div>
              <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Road/Street/Lane/Post Office <span class="hastric">*</span></label>
            <input type="text" id="fname" name="Road_Street_Lane_Post _Office" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Road_Street_Lane_Post _Office'))
                  <span class="error">{{ $errors->first('Road_Street_Lane_Post _Office') }}</span>
                  @endif
               </div>
            </div>
            
             
              <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender"> Parents's Area/Locality/Taluka/Sub -Division <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="Area_Locality_Taluka_Sub_Divisio" style="text-transform:uppercase" maxlength="25" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                   @if ($errors->has('Area_Locality_Taluka_Sub_Divisio'))
                  <span class="error">{{ $errors->first('Area_Locality_Taluka_Sub_Divisio') }}</span>
                  @endif
               </div>
            </div>
         
         </div>
         
         <div class="row br-sec">
            <div class="col-sm-8">
               <div class="form-group">
                  <label for="exampleSelectGender">Pan Card Mode  <span class="hastric">*</span></label>
                  <select id="country" name="Pan_Card_Mode" required>
                     <option value="australia">Physical PAL Card a e-PAL Card</option>
                     <!-- <option value="canada">Canada</option>
                        <option value="usa">USA</option>-->
                  </select>
                   @if ($errors->has('pan_card_mode'))
                  <span class="error">{{ $errors->first('pan_card_mode') }}</span>
                  @endif
               </div>
            </div>
            @php
              $attributes = DB::table('attributes')->where('packageid',Session::get('packagid'))->get();
            @endphp
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Charges  <span class="hastric">*</span></label>
                  <input type="text" id="fname" placeholder="Procesing Fee ₹{{$attributes[3]->price}}" value="Procesing Fee ₹{{$attributes[3]->price}}" readonly required>
                  <input type="hidden" name="charges" value="{{$attributes[3]->price}}" / required>
                   @if ($errors->has('charges'))
                  <span class="error">{{ $errors->first('charges') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="my-2 d-flex justify-content-between align-items-center top-check">
            <div class="form-check">
               <label class="form-check-label text-muted">
               <input type="checkbox" class="form-check-input" name="policy" required>I Have Read The <i class="input-helper"></i><i class="input-helper"></i></label>
               <a href="#"><span class="term-con">Term Of Condition </a> </span> And  <a href="#"><span class="term-con"> Policy</span> </a>
            </div>
         </div>
         <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
               <label class="form-check-label text-muted">
               <input type="checkbox" class="form-check-input" name="infermation" required> All The Information  I Have Enetered Is Correct 
                @if ($errors->has('infermation'))
                  <span class="error">{{ $errors->first('infermation') }}</span>
                  @endif
               <i class="input-helper"></i><i class="input-helper"></i></label>
            </div>
         </div>
         <div class="mt-3 btn-m">
             <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn col-md-5" value="Process For Verify"
           
         </div>
      </div>
      </form>
   </section>
   @include('web.footer')
    <script>
        
        
        $("#copyname").keyup(function(){
            let value = $(this).val();
            $("#copname").val(value);
        });
        
        
    
        $(".areacode").change(function(){
           let value = $(this).val();
           $.ajax({
              "method":"get",
              "url":"{{url("arecode")}}/"+value,
              success:function(data){
                if(data.status=="200"){
                 
                 $("#area_code").val(data.data.area_code);
                 $("#ao_type").val(data.data.ao_type);
                 $("#range_code").val(data.data.range_code);
                 $("#ao_no").val(data.data.ao_no);
                } else {
                    alert("data not");
                }
              }
           });
        });
    
    
         
         $("#resultsssss").change(function(){
             values = $(this).val();
            $.ajax({
                url:"{{url('getmycites')}}/"+values,
                method:"get",
                success:function(data){
                    $("#mycitys").html(data);
                }
            })
         });
        
    
    
    
        $('#dateofbirth').blur(function(){
            let myage = $("#dateofbirth").val();
            var dob = new Date(myage);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            $("#agess").val(age);
            if(age<=18){
                $(".fatherfieldhide").hide();
                $(".fatherfieldshow").show();
                
                $(".hidemyfilds").hide();
                $(".Assessee").val("Miner");
                return false;
            } else {
                $(".fatherfieldhide").show();
                $(".fatherfieldshow").hide();
                 $(".hidemyfilds").show();
                $(".Assessee").val("Major");
            }
        });
        
        $('#changemyrow').change(function(){
            let newweb = $(this).val(); 
            if(newweb=="Mother"){
                $(".mychange").fadeIn();
            } else {
                $(".mychange").fadeOut();
            }
        });
        
    $(".newbe").click(function() {
       $("#ResidenceAddressvalue").val("yes")
       $(".ddddd").show();
       $(".ssss").hide();
    });
          
          
    $(".ddddd").click(function() {
      $("#ResidenceAddressvalue").val("no")
      $(".ddddd").hide();
       $(".ssss").show();
    });
    
    
    
    $(".newbes").click(function() {
      $("#ShopAddressValue").val("yes");
      $(".dddddd").show();
       $(".sssss").hide();
    });
          
          
    $(".dddddd").click(function() {
         $("#ShopAddressValue").val("no");
      $(".dddddd").hide();
       $(".sssss").show();
    });
    
    
    $(".newbess").click(function() {
      $("#officeAddressValue").val('yes');
      $(".ddddddd").show();
      $(".ssssss").hide();
    });
          
          
    $(".ddddddd").click(function() {
         $("#officeAddressValue").val('no');
      $(".ddddddd").hide();
      $(".ssssss").show();
    });
    
    
    
    function MyFunctions(value){
      let values = value.value;
      $.ajax({
          method:"GET",
          url:"{{url("getstatus")}}/"+values,
          success:function(data){
              if(values=="101"){
                $("#countrysecond").val("INDIA");
              } if(values=="247"){
                 $("#countrysecond").val("FOREIGN Citizen");
              }
              //alert(data);
            $("#resultsssss").html(data);
            $("#sdfsdfsdf").html(data);
          }
      });
      
      $.ajax({
          method:"GET",
          url:"{{url("getapplicant")}}/"+values,
          success:function(data){
            $("#applicantget").html(data);
          }
      });
      
    }
    
    
    function MyCity(value){
         let values = value.value;
         $.ajax({
          method:"GET",
          url:"{{url("getcity")}}/"+values,
          success:function(data){
              
            $("#citys").html(data);
          }
      });
    }
        
        function myState(value){
            let values = value.value;
            $.ajax({
                method:"GET",
                url:"{{url("singalstate")}}/"+values,
                success:function(data){
                $("#mystates").val(data.data.name);
             }
            });
        }
        
        $(function(){
           $("#fathername").keyup(function(){
             let value = $(this).val();
             $("#samenamefather").val(value);
           });
           
           $("#mothername").keyup(function(){
               let value = $(this).val();
               $("#samenamemother").val(value);
           });
        });
        
        
        
        $(".applicantgets").change(function(){
            let value = $(this).val();
             if(value=="Individual"){
                $("#hiddenboxdddddd").hide();
             }
        });
        
    </script>
   
   
   
   
   
   
   
   <script>
      const realFileBtn = document.getElementById("real-file");
      const customBtn = document.getElementById("custom-button");
      const customTxt = document.getElementById("custom-text");
      
      customBtn.addEventListener("click", function() {
      realFileBtn.click();
      });
      
      realFileBtn.addEventListener("change", function() {
      if (realFileBtn.value) {
      customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
      )[1];
      } else {
      customTxt.innerHTML = "No file chosen, yet.";
      }
      });
      
   </script>
   <script>
      const realFileBtn = document.getElementById("real-file1");
      const customBtn = document.getElementById("custom-button1");
      const customTxt = document.getElementById("custom-text1");
      
      customBtn.addEventListener("click", function() {
      realFileBtn.click();
      });
      
      realFileBtn.addEventListener("change", function() {
      if (realFileBtn.value) {
      customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
      )[1];
      } else {
      customTxt.innerHTML = "No file chosen, yet.";
      }
      });
      
   </script>
   <script>
      const realFileBtn = document.getElementById("real-file");
      const customBtn = document.getElementById("custom-button");
      const customTxt = document.getElementById("custom-text");
      
      customBtn.addEventListener("click", function() {
      realFileBtn.click();
      });
      
      realFileBtn.addEventListener("change", function() {
      if (realFileBtn.value) {
      customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
      )[1];
      } else {
      customTxt.innerHTML = "No file chosen, yet.";
      }
      });
      
   </script>
   
   <script>
       // Yasser's problems

const elementOne = document.getElementById("elementOne");

elementOne.addEventListener("input", function (event) {
  this.value = this.value.replace(/^[a-zA-Z]+(\.[a-zA-Z]{0,2})?$/, "");
});

// Sven.hig solution https://stackoverflow.com/a/62925605/13029578

const elementTwo = document.getElementById("elementTwo");

var flag = false;

elementTwo.addEventListener("input", function (event) {
  pattern = /^\d+[,]?\d{0,2}$/;
  if (pattern.test(this.value)) {
    flag = true;
    l = this.value;
    if (flag && this.value.length > 1) return this.value;
    else flag = false;
  } else if (!pattern.test(this.value) && flag == true) {
    return (this.value = l);
  } else if (!pattern.test(this.value) && flag == false) {
    return (this.value = "");
  }
});

// Yasser's solutions

const elementThree = document.getElementById("elementThree");

var lastValue = "";

elementThree.addEventListener("input", function (e) {
  var inputValue = e.target.value;
  var regex = /^\d+[,]?\d{0,2}$/;
  var result = regex.test(inputValue);

  if (result) {
    lastValue = inputValue;
    return (this.value = inputValue);
  } else if (!result && inputValue != "" && lastValue != "") {
    return (this.value = lastValue);
  } else if (!result) {
    lastValue = "";
    return (this.value = "");
  }
});
   </script>