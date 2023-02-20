@include('web.header')
<!DOCTYPE html>
<html lang="en">
<head>

  <!--<meta charset="utf-8">-->
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">-->
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>-->
  
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
   /*max-width: 1240px;*/
      width: 100%;
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
    font-size: 21px;
    margin-top: 30px;
    margin-bottom: 15px;
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
   <div class="container">
      <div class="row">
  
         
             <div class="col-md-4">
            <div class="card card-secc">
               <img src="{{asset('public')}}/web/images/pan.png">
               <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/panNewApplication">
               <p>  Pan New Application</p>
               </a>
            </div>
            </div>
             <div class="col-md-4">
            <div class="card card-secc">
               <img src="{{asset('public')}}/web/images/pan.png">
               <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/gazzletPanApplication">
               <p>  Gazzlet Pan Application</p>
               </a>
            </div>
            </div>
               <div class="col-md-4">
            <div class="card card-secc">
               <img src="{{asset('public')}}/web/images/pan.png">
               <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/pan-application">
               <p> Pan Changes Or Correction</p>
               </a>
            </div>
            </div> </div>
                   <div class="card_wrapper pan-secc">
            <div class="card pan-card">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Pending Document</button>
               <button class="btn-pan">Download Pan Form</button>
               <div class="edit-file">
                  <button class="btn-pan">Edit Form</button>
                  <input type="file" id="real-file" hidden="hidden" />
                  <button type="button" id="custom-button">Upload Doc</button>
                  <span id="custom-text"></span>
               </div>
            </div>
            <div class="card pan-card">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Form</button>
               <span class="note">Note:</span>
               <div class="edit-file file-edits">
                  <button class="btn-pan edit-f">Edit Form</button>
               </div>
            </div>
            <div class="card pan-card">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Documents</button>
               <span class="note">Note:</span>
               <div class="edit-file file-edits">
                  <input type="file" id="real-file1" hidden="hidden" />
                  <button type="button" id="custom-button1">Upload Doc</button>
                  <span id="custom-text1"></span>
               </div>
            </div>
            <div class="card pan-card">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Process</button>
               <span class="note none">Note:</span>
            </div>
            <div class="card pan-card">
               <h1>CSF Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Pending Document</button>
               <button class="btn-pan">Download Pan Form</button>
               <div class="edit-file">
                  <button class="btn-pan">Edit Form</button>
                  <input type="file" id="real-file" hidden="hidden" />
                  <button type="button" id="custom-button">Upload Doc</button>
                  <span id="custom-text"></span>
               </div>
            </div>
            <div class="card pan-card">
               <h1>CSF Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Form</button>
               <span class="note">Note:</span>
               <div class="edit-file file-edits">
                  <button class="btn-pan edit-f">Edit Form</button>
               </div>
            </div>
            <div class="card pan-card">
               <h1>CSF Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Documents</button>
               <span class="note">Note:</span>
               <div class="edit-file file-edits">
                  <input type="file" id="real-file" hidden="hidden" />
                  <button type="button" id="custom-button">Upload Doc</button>
                  <span id="custom-text"></span>
               </div>
            </div>
            <div class="card pan-card">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <button>Hold Process</button>
               <span class="note none">Note:</span>
            </div>
            <div class="card pan-card card-pan">
               <h1>New Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <div class="process-btn">
                  <button>Process</button>
               </div>
               <div class="edit-file">
                  <button class="btn-pan">View Form</button>
                  <input type="file" id="real-file" hidden="hidden" />
                  <button type="button" id="custom-button">View Doc</button>
                  <span id="custom-text"></span>
               </div>
            </div>
            <div class="card pan-card card-pan">
               <h1>CSF Pan Card</h1>
               <ul>
                  <li>Tokken No:</li>
                  <li>Applicent Name:</li>
                  <li>Date of Birth:</li>
                  <li>Father Name:</li>
                  <li>Aaadhan No:</li>
                  <li>Mobile Id:</li>
               </ul>
               <div class="process-btn">
                  <button>Process</button>
               </div>
               <div class="edit-file">
                  <button class="btn-pan">View Form</button>
                  <input type="file" id="real-file" hidden="hidden" />
                  <button type="button" id="custom-button">View Doc</button>
                  <span id="custom-text"></span>
               </div>
            </div>
         </div>
      </div>
   </div>

   @include('web.footer')
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