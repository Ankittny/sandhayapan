@include('web.header')
<style>
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
   }
   label.form-check-label.text-muted {
   font-size: 14px;
   }
   .body-sec h4 {
   font-size: 20px;
   font-weight: 900;
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
   padding: 23px 0 10px;
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
    font-size: 14px;
    color: #000;
    font-weight: 700;
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
   border: 1px solid #e3e6ef;
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
             <h1>Gazzlet Pan Application</h1>
   </div>
    
       <section class="form-pAN">
   <div class="container">
      <div class="row">
      
    

    
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
                  <select id="country" name="application_type">
                     <option value="australia">New PAN-Indian Citizen (Form 49A)</option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select> 
                  @if ($errors->has('application_type'))
                  <span class="error">{{ $errors->first('application_type') }}</span>
                  @endif
               </div>
            </div>
               <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">State <span class="hastric">*</span></label>
                  <select id="country" name="state">
                     <option value="australia">DELHI</option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select>
                   @if ($errors->has('state'))
                  <span class="error">{{ $errors->first('state') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">Category of Applicant  <span class="hastric">*</span></label>
                  <select id="country" name="category_of_applican">
                     <option value="australia">INDIVIDUAL</option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select>
                   @if ($errors->has('category_of_applican'))
                  <span class="error">{{ $errors->first('category_of_applican') }}</span>
                  @endif
               </div>
            </div>
          
         </div>
         <div class="row br-sec ">
             
             
                  <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s Last Name/ Surname  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_last_name">
                   @if ($errors->has('applicant_last_name'))
                  <span class="error">{{ $errors->first('applicant_last_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s First Name <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_first_name">
                  @if ($errors->has('applicant_first_name'))
                  <span class="error">{{ $errors->first('applicant_first_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant’s Middle Name <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_middle_name">
                  @if ($errors->has('applicant_middle_name'))
                  <span class="error">{{ $errors->first('applicant_middle_name') }}</span>
                  @endif
               </div>
            </div>
            
                   <div class="col-sm-5 ">
               <div class="form-group input-fieldss ">
                  <label for="exampleSelectGender">Applicant’s Name on Card  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_name_on_card">
                   @if ($errors->has('applicant_name_on_card'))
                  <span class="error">{{ $errors->first('applicant_name_on_card') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Date of Birth /incorporationation <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="dob">
                   @if ($errors->has('dob'))
                  <span class="error">{{ $errors->first('dob') }}</span>
                  @endif
               </div>
            </div>
           <div class="col-sm-3">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Applicant Age <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="dob">
                   @if ($errors->has('dob'))
                  <span class="error">{{ $errors->first('dob') }}</span>
                  @endif
               </div>
            </div>
            
            <div class="col-sm-3">
               <div class="form-group">
                  <label for="exampleSelectGender">Gender <span class="hastric">*</span></label>
                  <select id="country" name="gender">
                     <option value="australia"></option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
                                   </div>
            </div>
            
            
               <div class="col-sm-6">
               <div class="form-group group-secs">
                  <label for="exampleSelectGender">Parents name to be printed on the PAN Card  <span class="hastric">*</span></label>
                  <select id="country" name="gender">
                     <option value="australia">Father</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                  </select>
                                   </div>
            </div>
            
            
            
           <!-- <div class="col-sm-6">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Aadhaar Number  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="aadhaar_number">
                   @if ($errors->has('aadhaar_number'))
                  <span class="error">{{ $errors->first('aadhaar_number') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Name As Per Aadhaar  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="name_as_per_aadhaar">
                   @if ($errors->has('name_as_per_aadhaar'))
                  <span class="error">{{ $errors->first('name_as_per_aadhaar') }}</span>
                  @endif
               </div>
            </div>-->
         </div>
         <div class="row br-sec">
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Father’s Last Name  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_last_name">
                   @if ($errors->has('applicant_last_name'))
                  <span class="error">{{ $errors->first('applicant_last_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Father’s First Name <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_first_name">
                  @if ($errors->has('applicant_first_name'))
                  <span class="error">{{ $errors->first('applicant_first_name') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Father’s middle Name<span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_middle_name">
                  @if ($errors->has('applicant_middle_name'))
                  <span class="error">{{ $errors->first('applicant_middle_name') }}</span>
                  @endif
               </div>
            </div>
              <div class="col-sm-6 ">
               <div class="form-group input-fieldss ">
                  <label for="exampleSelectGender">Father’s Name on Card  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="father_ame_on_card">
                  @if ($errors->has('father_ame_on_card'))
                  <span class="error">{{ $errors->first('father_ame_on_card') }}</span>
                  @endif
               </div>
            </div>
     
         </div>
         <!--<div class="row br-sec ">-->
         <!--   <div class="col-sm-6">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Parents name to be printed on the PAN Card  <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="father_name" placeholder="Father Name">-->
         <!--           @if ($errors->has('father_name'))-->
         <!--         <span class="error">{{ $errors->first('father_name') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="col-sm-6">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Mother Name  <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="mother_name" placeholder="Mother Name">-->
         <!--           @if ($errors->has('mother_name'))-->
         <!--         <span class="error">{{ $errors->first('mother_name') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="row br-sec">-->
         <!--   <div class="col-sm-4 bottom-sd">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Father’s Last Name  <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="father_last_name">-->
         <!--          @if ($errors->has('father_last_name'))-->
         <!--         <span class="error">{{ $errors->first('father_last_name') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="col-sm-4">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Father’s First Name <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="father_first_name">-->
         <!--         @if ($errors->has('father_first_name'))-->
         <!--         <span class="error">{{ $errors->first('father_first_name') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="col-sm-4">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Father’s middle Name <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="father_middle_name">-->
         <!--         @if ($errors->has('father_middle_name'))-->
         <!--         <span class="error">{{ $errors->first('father_middle_name') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
          
         <!--   <div class="col-sm-3">-->
         <!--      <div class="form-group input-fieldss">-->
         <!--         <label for="exampleSelectGender">Applicant Age  <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="fname" name="applicant_age">-->
         <!--            @if ($errors->has('applicant_age'))-->
         <!--         <span class="error">{{ $errors->first('applicant_age') }}</span>-->
         <!--         @endif-->
         <!--      </div>-->
         <!--   </div>-->
         <!--   <div class="col-sm-3">-->
         <!--      <div class="form-group">-->
         <!--         <label for="exampleSelectGender">Pan Card Type  <span class="hastric">*</span></label>-->
         <!--         <input type="text" id="country" name="pan_card_type">-->
         <!--          @if ($errors->has('pan_card_type'))-->
         <!--         <span class="error">{{ $errors->first('pan_card_type') }}</span>-->
         <!--         @endif-->
                     
         <!--      </div>-->
         <!--   </div>-->
         <!--</div>-->
         <div class="body-sec">
            <span>02</span>
            <h4 class="card-title">Address for communication</h4>
         </div>
         <div class="row br-sec ">
             
             
              
            <div class="col-sm-5">
                 <div class="template-demo">
                             <p for="exampleSelectGender">PAN card will be dispatched at _ address  <span class="hastric">*</span></p>
                      <button type="button" class="btn btn-outline-primary btn-fw"> Residence Address     <i class="fa fa-check check" aria-hidden="true"></i></button>
                       
                      <!--<button type="button" class="btn btn-outline-secondary btn-fw"> Secondary </button>-->
               
                    </div>
               <!--<div class="form-group input-fieldss pan-group">-->
               <!--   <label for="exampleSelectGender">PAN card will be dispatched at _ address  <span class="hastric">*</span></label>-->
               <!--   <input type="text" id="fname" name="residence_address" placeholder="Residence Address">-->
               <!--   <i class="fa fa-check" aria-hidden="true"></i>-->
               <!--    @if ($errors->has('residence_address'))-->
               <!--   <span class="error">{{ $errors->first('residence_address') }}</span>-->
               <!--   @endif-->
               <!--</div>-->
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                   <label for="exampleSelectGender" style="visibility:hidden">office address <span class="hastric">*</span></label>
                 <button type="button" class="btn btn-outline-secondary btn-fw"> Shop Address </button>
               </div>
            </div>
         </div>
         <div class="row br-sec ">
        <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">Country Name  <span class="hastric">*</span></label>
                  <select id="country" name="category_of_applican">
                     <option value="australia"></option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select>
                                  </div>
            </div>
           <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">State/Union Territory <span class="hastric">*</span></label>
                  <select id="country" name="category_of_applican">
                     <option value="australia"></option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select>
                                  </div>
            </div>
     <div class="col-sm-4">
               <div class="form-group">
                  <label for="exampleSelectGender">Town/City/District <span class="hastric">*</span></label>
                  <select id="country" name="category_of_applican">
                     <option value="australia"></option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                  </select>
                                  </div>
            </div>
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Pin Code  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="locality">
                  @if ($errors->has('locality'))
                  <span class="error">{{ $errors->first('locality') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4  bottom-sd">
                
                <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Country code (ISD code) <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_first_name">
                                 </div>
        
            </div>
            <div class="col-sm-4  bottom-sd">
                
                    <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Flat/Room/Door/Block No <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="applicant_first_name">
                                 </div>
             
            </div>
            <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Name Of Permission/Building/Village <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="pincode">
                   @if ($errors->has('pincode'))
                  <span class="error">{{ $errors->first('pincode') }}</span>
                  @endif
               </div>
            </div>
              <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Road/Street/Lane/Post Office <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="pincode">
                   @if ($errors->has('pincode'))
                  <span class="error">{{ $errors->first('pincode') }}</span>
                  @endif
               </div>
            </div>
                   <div class="col-sm-4 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">  Area/Locality/Taluka/Sub -Division  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="pincode">
                   @if ($errors->has('pincode'))
                  <span class="error">{{ $errors->first('pincode') }}</span>
                  @endif
               </div>
            </div>
            
        
           
            <div class="col-sm-6 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Mobile Number  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="mobile">
                   @if ($errors->has('mobile'))
                  <span class="error">{{ $errors->first('mobile') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-6 bottom-sd">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Email Address  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="email">
                   @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif
               </div>
            </div>
        
       
       
        
         </div>
      
     
         <div class="row br-sec">
            <div class="col-sm-8">
               <div class="form-group">
                  <label for="exampleSelectGender">Pan Card Mode  <span class="hastric">*</span></label>
                  <select id="country" name="pan_card_mode">
                     <option value="australia">Physical PAN Card a e-PAN Card</option>
                     <!-- <option value="canada">Canada</option>
                        <option value="usa">USA</option>-->
                  </select>
                   @if ($errors->has('pan_card_mode'))
                  <span class="error">{{ $errors->first('pan_card_mode') }}</span>
                  @endif
               </div>
            </div>
            <div class="col-sm-4">
               <div class="form-group input-fieldss">
                  <label for="exampleSelectGender">Charges  <span class="hastric">*</span></label>
                  <input type="text" id="fname" name="charges" placeholder="Procesing Fee ₹107">
                   @if ($errors->has('charges'))
                  <span class="error">{{ $errors->first('charges') }}</span>
                  @endif
               </div>
            </div>
         </div>
         
         
         <div class="my-2 d-flex justify-content-between align-items-center top-check">
            <div class="form-check">
               <label class="form-check-label text-muted">
               <input type="checkbox" class="form-check-input" name="policy">I Have Read The <i class="input-helper"></i><i class="input-helper"></i></label>
               <a href="#"><span class="term-con">Term Of Condition </a> </span> And  <a href="#"><span class="term-con"> Policy</span> </a>
            </div>
         </div>
         <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
               <label class="form-check-label text-muted">
               <input type="checkbox" class="form-check-input" name="infermation"> All The Information  I have Enetered Is Correct 
                @if ($errors->has('infermation'))
                  <span class="error">{{ $errors->first('infermation') }}</span>
                  @endif
               <i class="input-helper"></i><i class="input-helper"></i></label>
            </div>
         </div>
         <div class="mt-3 btn-m">
             <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn col-md-5" value="Process For Verify">
           
         </div>
      </div></div>
      </form>
   </section>
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
@include('web.footer')

