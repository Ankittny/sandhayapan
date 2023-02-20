@include('web.header')
<!DOCTYPE html>
<html lang="en">
   <head>
      <title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <style>
         @media print
         {
         .print-sec { border: none !important;     background: #fff !important;  } 
         .part-p{
         font-size:14px !important; 
         }
         .cookie-banner {margin: 0 !important;}
p {
    margin-top: 0px !important;
    margin-bottom: 16px;
    font-size: 14px;
}
         }
		 .button-group button {
      background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
    border: none;
    color: white;
    padding: 12px 50px !important;
    font-weight: bold;
    font-size: 16px;
    border-radius: 6px;
	    margin-right: 40px;
}
.button-group {
text-align: left;
    border-bottom: 1px solid #ddd;
    padding: 30px;
    padding-bottom: 60px !important;
}

element.style {
    max-width: 890px;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
}
table {
    border: 1px solid #ddd;
    border-spacing: 0px;
    border-radius: 7px;
}
label#cookie-banner {
    padding-left: 40px;
    padding-right: 40px;
}
tr {
    padding-left: 30px !important;
}
p {
    padding-left: 40px;
    padding-right: 40px;
}
.button-group a {
    color: white;
    text-decoration: none;
}
.pan-serching h1 {
    font-size: 30px;
}
.pan-serching {
    text-align: center;
}
.main-parts {
    border: 1px solid #ddd;
    border-radius: 6px;
}.pan-serching p {
    font-size: 20px;

    line-height: 17px;
	    margin-top: 17px;
}
.pan-serching img {
  
    width: 30%;
   
	    margin: 20px 0;
}

      </style>
   </head>
  
<body>



<div class="main-parts" style="
    margin: 0 auto; font-family: 'Poppins', sans-serif; background-color:#fff">


		<div class="button-group">
		<a href="deshbord">
	<button class="add  font-weight-regular  text-nowrap print-btn report" id="addd" data-toggle="modal" data-target="#basicModal"> <a href="deshbord">Back To Home</a></button></a>
	
  </div>
  <div class="pan-serching">
  <img src="{{asset('public/web/images')}}/animationSearch.gif ">
  
<h1>Pan Number Searching</h1>
<p>Your request  has been Proceesed </p>
<p>Please Wait 1 minute To 6 hours</p>

</div>
	
</div>


 





 
  

    

   <!-- <table style="font-family: sans-serif; max-width: 890px;" cellpadding="10">


        <tr>
		
               <span class="" style="   margin: 0 auto; text-align:center;">
               <h2 class="income" style="text-align: center;font-weight: 900; margin-bottom: 0px !important;">INCOME TAX PAN SERVICES UNIT</h2>
              
               <p id="reset-cookie-button" class="part-p" href="#" style="font-size: 18px;
                  color: #000; font-size: 18px;
                  color: #000;
                  padding-right: 155px;
                  padding-left: 155px;    margin-top: 0px !important;
                  margin-bottom: 35px;">(Managed by NSDL e-Governance Infrastructure Limited)
                  4th Floor, Mantri Sterling, Plot No. 341, Survey No. 997/8, Model Colony,
                  Near Deep Bungalow Chowk, Pune-411 016.
               </p>
            </span>
        </tr>
        <tr>
            <p>F. No. DIT(S)/PAN/ITMN_REG</p>
            <p>MThe Income Tax Department takes pleasure in informing that the Permanent Account Number (PAN)
               allotted to you is:
            </p>
        </tr>
        <tr>
          <h2 class="income" style="text-align: center;font-weight: 900;">HHHPD5129J</h2>
        </tr>
		
		 <tr>
    <p>We wish to inform you that quoting of PAN on return of income and challans for payment of taxes is
               necessary to ensure accurate credit of taxes paid by you and faster processing of return of income
               Please quote PAN in all communications with the department as it helps to improve taxpayer
               services.
            </p>
        </tr>
		 <tr>
<p>We may inform you that it is <strong>mandatory to quote PAN </strong>in several transactions specified under the
               Income Tax Act, 1961. For details of such transactions, reference is invited to ru
            </p>
        </tr>
		
		 <tr>
     <p>In the unlikely event of <strong>more than one PAN being allotted,</strong> this fact should be brought to the
               notice of your Assessing Officer, as <strong>possessing or using more than one PAN is against the
               law</strong> and may attract <strong>penalty of upto Rs. 10,000/-.</strong>
               .
            </p>
        </tr>
		 <tr>
    <p>Any error in the data printed on your PAN Card may be brought to the notice of the IT PAN
               Services Unit at the address given above or on the reverse of the PAN Card
            </p>
        </tr>
		 <tr>
    <p>Income Tax Department maintains a website - www.incometaxindia.gov.in and Aayakar Sampark
               Kendra (Phone - 1800 180-1961) for providing information and services to citizens. This site
               contains detailed information on PAN also.
            </p>
        </tr>
		<tr><p>The PAN Card enclosed contains Enhanced QR Code which is readable by a specific Android
               Mobile App. Keyword to search for this specific Mobile App on Google Play Store is "Enhanced
               QR Code Reader for PAN Card".
            </p></tr>
			
			<tr>
			
			  <div id="cookie-banner" class="cookie-banner cookie-banner--hide" style="padding: 20px; font-size: 11px;
            color: #000;
            font-style: italic;
            margin: 85px 0 0;
            display: inline-block;">
            <span style="font-size:11px;color:#000;font-style:italic;">As per instruction from Income Tax Department, an authorized agencies' agent may visit you for your identity and address verification as per the
            documents submitted by you with the PAN application form. You are requested to ask authorization letter/D card from the agent before verification.
            Your cooperation is solicited in this regard."
            </span>
         </div></tr>
		 <tr><p style="padding: 20px;text-align:center;">(This being a computer-generated letter, no signature is required)</p></tr>

    </table>-->
 
 

 
</body>
</html>
   
   
   <!--<body style="font-family: 'Poppins', sans-serif;">
      <div class="print-sec" style="max-width: 890px;
         margin: auto;
         padding: 10px;
         border: 1px solid #eee; background: #fff;">
         <div class="" style="padding:20px;">
            <div class="" style="   margin: 0 auto; text-align:center;">
               <h2 class="income" style="text-align: center;font-weight: 900; margin-bottom: 0px !important;">INCOME TAX PAN SERVICES UNIT</h2>
    
               <p id="reset-cookie-button" class="part-p" href="#" style="font-size: 18px;
                  color: #000; font-size: 18px;
                  color: #000;
                  padding-right: 155px;
                  padding-left: 155px;    margin-top: 0px !important;
                  margin-bottom: 35px;">(Managed by NSDL e-Governance Infrastructure Limited)
                  4th Floor, Mantri Sterling, Plot No. 341, Survey No. 997/8, Model Colony,
                  Near Deep Bungalow Chowk, Pune-411 016.
               </p>
            </div>
       
            <p>F. No. DIT(S)/PAN/ITMN_REG</p>
            <p>MThe Income Tax Department takes pleasure in informing that the Permanent Account Number (PAN)
               allotted to you is:
            </p>
            <h2 class="income" style="text-align: center;font-weight: 900;">HHHPD5129J</h2>
            <p>We wish to inform you that quoting of PAN on return of income and challans for payment of taxes is
               necessary to ensure accurate credit of taxes paid by you and faster processing of return of income
               Please quote PAN in all communications with the department as it helps to improve taxpayer
               services.
            </p>
            <p>We may inform you that it is <strong>mandatory to quote PAN </strong>in several transactions specified under the
               Income Tax Act, 1961. For details of such transactions, reference is invited to ru
            </p>
            <p>In the unlikely event of <strong>more than one PAN being allotted,</strong> this fact should be brought to the
               notice of your Assessing Officer, as <strong>possessing or using more than one PAN is against the
               law</strong> and may attract <strong>penalty of upto Rs. 10,000/-.</strong>
               .
            </p>
            <p>Any error in the data printed on your PAN Card may be brought to the notice of the IT PAN
               Services Unit at the address given above or on the reverse of the PAN Card
            </p>
            <p>Income Tax Department maintains a website - www.incometaxindia.gov.in and Aayakar Sampark
               Kendra (Phone - 1800 180-1961) for providing information and services to citizens. This site
               contains detailed information on PAN also.
            </p>
            <p>The PAN Card enclosed contains Enhanced QR Code which is readable by a specific Android
               Mobile App. Keyword to search for this specific Mobile App on Google Play Store is "Enhanced
               QR Code Reader for PAN Card".
            </p>
         </div>
         <div id="cookie-banner" class="cookie-banner cookie-banner--hide" style="padding: 20px;    font-size: 11px;
            color: #000;
            font-style: italic;
            margin: 85px 0 0;
            display: inline-block;">
            <span style="font-size:11px;color:#000;font-style:italic;">As per instruction from Income Tax Department, an authorized agencies' agent may visit you for your identity and address verification as per the
            documents submitted by you with the PAN application form. You are requested to ask authorization letter/D card from the agent before verification.
            Your cooperation is solicited in this regard."
            </span>
         </div>
         <p style="padding: 20px;text-align:center;">(This being a computer-generated letter, no signature is required)</p>
      </div>
      </div>
   </body>
</html>-->

@include('web.footer')
