
<style>
[data-theme-version="dark"] .deznav .metismenu > li:hover > a, [data-theme-version="dark"] .deznav .metismenu > li:focus > a, [data-theme-version="dark"] .deznav .metismenu > li.mm-active > a {
    color: #000 !important;

/*border-left: 3px solid #7e3af2!important;*/
    border-radius: 0px !important;
}
ul#menu li a {
    font-size: 14px;
}
[data-theme-version="dark"] .dropdown-menu .dropdown-item.selected, [data-theme-version="dark"] .dropdown-menu .dropdown-item.selected.active, [data-theme-version="dark"] .dropdown-menu .dropdown-item.active, [data-theme-version="dark"] .dropdown-menu .dropdown-item:hover, [data-theme-version="dark"] .dropdown-menu .dropdown-item:focus {
    background-color: #ddd !important;
    color: #000;
}
table.dataTable thead .sorting {

    background: 0 !important;
}
th.sorting_asc {
    background: 0 !important;
}
.dash-sec {
    margin: 50px 0;
}
[data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu > li .has-arrow:after{

    display:none;
}
[data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu > li {
    padding: 0 10px !important;
}
[data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu > li > a {
  
    padding: 20px 15px !important;
}
ul#menu li a i {
    display: none;
}
    ul.mm-collapse li a {
    padding-left: 11px !important;
}
.deznav {
    width: 13.563rem !important;
}
   .content-body {
    margin-left: 11.563rem !important;

}
/*ul#menu li {*/
/*    padding: 0px !important;*/
/*}*/

.deznav .metismenu ul {
    padding: 15px;
    background: #f9fafb;
    border-radius: 12px;
    /* box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px; */
    box-shadow: rgb(50 50 93 / 11%) 0px 15px 9px -12px inset, rgb(0 0 0 / 11%) 0px 16px 17px -18px inset;
}
.deznav .metismenu > li a > i {

    padding: 0px !important;
}
.deznav .metismenu > li > a i {
    color: #000 !important;
    margin-right: 4px;
    font-size: 17px;
}
.content-body {
    padding: 0px !important;
}


a.has-arrow.ai-icon.title-sec:after {
    display: none !important;
    color: #000;
    font-weight: 900 !important;
}
a.has-arrow.ai-icon.title-sec span {
    color: #000 !important;
    font-weight: 600;
    font-size: 15px;
    text-transform: uppercase;
}
.title-sec {
    padding: 0px !important;
    text-align: center;
}
 .deznav .metismenu > li.mm-active > a:before {
    background: #7e3af2;
    content: '';
    width: 4px;
    height: 30px;
    position: absolute;
    left: 0;
    right: 0;
    border-radius: 50px;
    top: 50%;
    transform: translateY(-50%);
}
[data-sidebar-style="full"] .deznav .metismenu ul a:before {
 
    background: 0 !important;
}
</style>
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

               <a class="has-arrow ai-icon title-sec" href="{{ url('admin/dashboard') }}" aria-expanded="false">

                <span class="nav-text">Sandhya pan Admin</span>
            </a>


            <li><a href="{{ url('admin/dashboard') }}" aria-expanded="false">
           <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="nav-text">Dashboard</span>
                </a>


            </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="nav-text">User Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/pendingkyc') }}">Pending KYC</a></li>
                <li><a href="{{ url('admin/transferuser') }}">Transfer Users  </a></li>
                <li><a href="{{ url('admin/createuser') }}">Create Users  </a></li>
                <li><a href="{{ url('admin/userlist') }}">List of Users  </a></li>
            </ul>
        </li>



        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="nav-text">Find Pan Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/panByAadhaar') }}">By Aadhaar</a></li>
                <li><a href="{{ url('admin/panByDetails') }}">By Details  </a></li>
                <li><a href="{{ url('admin/lostPanHistory') }}">Pan History </a></li>
                <li><a href="{{ url('admin/lostPanDatabase') }}">Pan Database </a></li>
            </ul>
        </li>

        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="nav-text">Terms & Info</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/panNoTermsInfo') }}">Terms & Info</a></li>
            </ul>
        </li>

        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="nav-text">Discrepency Letter Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/pendingDiscrepencyLetter') }}">Discrepency Letter Management</a></li>
                      <li><a href="{{ url('admin/discrepencyLetterHistory') }}">Letter History</a></li>

            </ul>
        </li>

        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                 <span class="nav-text">Offline Payment</span>
             </a>
             <ul aria-expanded="false">
                 <li><a href="{{ url('admin/paymentlist') }}">Payment List</a></li>
             </ul>
         </li>

         <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="nav-text">Setting</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/packageSetting') }}">Package Setting</a></li>
                <li><a href="{{ url('admin/bannersetting') }}">Banner Setting</a></li>
                <li><a href="{{ url('admin/welcomemessage') }}">Welcome Text Setting</a></li>
                <li><a href="{{ url('admin/notificationview') }}">Notification Setting</a></li>
                 <li><a href="{{ url('admin/videolist') }}">Video Tutrial</a></li>
                <li><a href="{{ url('admin/commissionlist') }}">Commission</a></li>
                <li><a href="{{ url('admin/paymentmethlist') }}">payment method</a></li>
            </ul>
        </li>


  <li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
      <i class="fa fa-paper-plane" aria-hidden="true"></i>
      <span class="nav-text">NSDL MANAGEMENT</span>
    </a>
    <ul aria-expanded="false">
      <li>
        <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/pandingNew">Pending New(1)</a>
      </li>
      <li>
        <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/holdProcess">Pending Gazzlet Pan (1)</a>
      </li>
      <li>
        <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/holdProcessNew">Hold Process New(10)</a>
      </li>
      <li>
        <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/holdProcessNew">Hold Process Correction(10)</a>
      </li>
      <li>
        <a href=" https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/holdProcess">Hold Process Gazzlet Pan (10)</a>
      </li>
      <li>
        <a href=" https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/ListofPanCard">List Of Pan Card</a>
      </li>
      <li>
        <a href="https://dev.gazingtechnosoft.com/jatin/sandhyapan/admin/formCollection">Form Collection</a>
      </li>
    </ul>
</li>    
   
   <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                    <span class="nav-text">Area</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/area-list') }}">Area</a></li>
                </ul>
            </li>
                   
                
            </ul>
        </li>
            {{--  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/category') }}">Category</a></li>
                </ul>
            </li>

              <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Bank</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('admin/bank') }}">Bank List</a></li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-network"></i>
                <span class="nav-text">Privacy Policy</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('admin/addpages') }}">Privacy Policy Add</a></li>
                <li><a href="{{ url('admin/pageslist') }}">List Privacy Poicy</a></li>
            </ul>
        </li>  --}}

            {{--  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Select 2</a></li>
                    <li><a href="uc-nestable.html">Nestedable</a></li>
                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="uc-toastr.html">Toastr</a></li>
                    <li><a href="map-jqvmap.html">Jqv Map</a></li>
                    <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                </ul>
            </li>

            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form-element.html">Form Elements</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>  --}}
        </ul>


    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
