<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}

label {
    font-size: font-size: 15px;
    font-size: 14px;
}
form h1 {
    font-size: 20px;
    margin: 15px 0 15px 0;
}
body{
  font-family: 'Poppins', sans-serif;  
}

input[type=text], select, textarea {
  width: 100%;
  padding: 7px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 6px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container-fluid">
  <form action="/action_page.php">

 
  
 
  <div class="row">
      <div class="col-md-7">
            <div class="row">
    <div class="col-md-3">
   <label>Pan Number</label>
      <input type="text" id="fname" name="firstname" >

    </div>
     <div class="col-md-3">
         <label>         Last Name/ Surname</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
        <div class="col-md-3">
         <label>         First Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
        <div class="col-md-3">
         <label>         Middle Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
    
     <div class="col-md-6">
         <label>         Name on Card</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
       <div class="col-md-3">
         <label>         Date of Birth</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-3">
                   <label>         Gender</label>
      <select id="country" name="country">
        <option value="australia">Male </option>
        <option value="canada">Female</option>
     
      </select>
    </div>
    
    <div class="col-md-3">
         <label>        Father's Last Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
    <div class="col-md-3">
         <label>         Father's First Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
    <div class="col-md-3">
         <label>         Father's Middle Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
    <div class="col-md-3">
         <label>         Aadhaar Number</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-6">
         <label>        Name As Per Aadhaar</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
     <div class="col-md-3">
         <label>        Mobile Number</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
     <div class="col-md-3">
         <label>        Email Address</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
        <div class="col-md-3">
         <label>       Flat/Room/Block No.</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-3">
         <label>      Village Name</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
    <div class="col-md-3">
         <label>     Street/Post Office</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-3">
         <label>     Area/Sub-Division</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-3">
         <label>    Town/City/District</label>
           <input type="text" id="fname" name="firstname" >

  
    </div>
      <div class="col-md-3">
         <label>    State</label>
         <select id="country" name="country">
        <option value="australia">UTTER PRADESH </option>
        <option value="canada">Female</option>
     
      </select>

  
    </div>
      <div class="col-md-3">
         <label>       Pincode</label>
                  <input type="text" id="fname" name="firstname" >
     
      </select>

  
    </div>
     <div class="col-md-3">
                  <label> Number of Documents</label>
      <select id="country" name="country">
        <option value="australia">3</option>
        <option value="canada">5</option>
        <option value="usa">7</option>
      </select>
    </div>
       <div class="col-md-12">
         <form action="/action_page.php">
<h1>Show Checkboxes</h1>
<div class="flex-sse">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Full Name </label>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> Father's Name</label>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Date Of Birth</label>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Gender</label>
      <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Address</label>
  </div>

</form>
      </select>
    </div>
      <div class="col-md-4">
                  <label> Proof of Identity</label>
      <select id="country" name="country">
        <option value="australia">AADHAR Card Issued By</option>
        <option value="canada">5</option>
        <option value="usa">7</option>
      </select>
    </div>
      <div class="col-md-4">
                  <label> Proof of Address</label>
      <select id="country" name="country">
   <option value="australia">AADHAR Card Issued By</option>
        <option value="canada">5</option>
        <option value="usa">7</option>
      </select>
    </div>
      <div class="col-md-4">
                  <label>Proof of DOB</label>
      <select id="country" name="country">
  <option value="australia">AADHAR Card Issued By</option>
        <option value="canada">5</option>
        <option value="usa">7</option>
      </select>
    </div>
    

 
    </div>
    
    
    </div>
    
    <div class="col-sm-5">
     <object data="https://sandhyapanindia.in/downloads.php?files=_KARTIK-1673270238_Form.pdf" type="application/pdf" width="100%" height="650"><p></p>
     <iframe id="getImgUrl" width="100%" height="100%" style="border: none;">
    <p>Your browser does not support PDFs.
      <a href="https://sandhyapanindia.in/downloads.php?files=_KARTIK-1673270238_Form.pdf">Download the PDF</a>.</p>
</iframe>
</object>
    </div>
 

 
  </form>
</div>

</body>
</html>
