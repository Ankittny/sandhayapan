<style type="text/css">
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

    h2.income {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
</style>



<table style="max-width: 890px;
margin: 0 auto; font-family: 'Poppins', sans-serif; background-color:#fff">
    <tr>
        <td>
            <span class="" style="   margin: 0 auto; text-align:center;">
                <h2 class="income" style="text-align: center;font-weight: 900; margin-bottom: 0px !important;">INCOME TAX PAN SERVICES UNIT</h2>
                <!-- begin optional -->
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
        </td>

    </tr>
    <tr>
        <td>
            <p>F. No. DIT(S)/PAN/ITMN_REG</p>
            <p>The Income Tax Department takes pleasure in informing that the Permanent Account Number (PAN)
                allotted to you is:
            </p>
        </td>

    </tr>
    <tr>

    <tr>
        <td>
            <h2 class="income" style="text-align: center;font-weight: 900;">{{ Session::get('panno') }}</h2>
        </td>
    </tr>
    <tr>
        <td>
            <p>We wish to inform you that quoting of PAN on return of income and challans for payment of taxes is
                necessary to ensure accurate credit of taxes paid by you and faster processing of return of income
                Please quote PAN in all communications with the department as it helps to improve taxpayer
                services.
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>We may inform you that it is <strong>mandatory to quote PAN </strong>in several transactions specified under the
                Income Tax Act, 1961. For details of such transactions, reference is s invited to rule 114B of the
                Income Tax Rules, 1962 read with section 139 A of the Income Tax Act, 1961.
            </p>
        </td>
    </tr>

    <tr>
        <td>
            <p>In the unlikely event of <strong>more than one PAN being allotted,</strong> this fact should be brought to the
                notice of your Assessing Officer, as <strong>possessing or using more than one PAN is against the
                    law</strong> and may attract <strong>penalty of upto Rs. 10,000/-.</strong>
                .
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>Any error in the data printed on your PAN Card may be brought to the notice of the IT PAN
                Services Unit at the address given above or on the reverse of the PAN Card
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>Income Tax Department maintains a website - www.incometaxindia.gov.in and Aayakar Sampark
                Kendra (Phone - 1800 180-1961) for providing information and services to citizens. This site
                contains detailed information on PAN also.
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p>The PAN Card enclosed contains Enhanced QR Code which is readable by a specific Android
                Mobile App. Keyword to search for this specific Mobile App on Google Play Store is "Enhanced
                QR Code Reader for PAN Card"
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <label id="cookie-banner" class="cookie-banner cookie-banner--hide" style="font-size: 11px;
        color:#000;
        font-style: italic;
        margin: 85px 0 0;
        display: inline-block;">
                <span style="font-size:11px;color:#000;font-style:italic;">As per instruction from Income Tax Department, an authorized agencies' agent may visit you for your identity and address verification as per the
                    documents submitted by you with the PAN application form. You are requested to ask authorization letter/D card from the agent before verification.
                    Your cooperation is solicited in this regard."
                </span>
            </label>
        </td>
    </tr>
    <tr>
        <td>
            <p style="padding: 20px;text-align:center;">(This being a computer-generated letter, no signature is required)</p>
        </td>
    </tr>
</table>
