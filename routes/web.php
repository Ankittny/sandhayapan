<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\PaytmController;


//Admin Login
Route::get('Admin',[App\Http\Controllers\AdminController::class, 'Admin'])->name('Admin');
Route::Post('loginchecks',[App\Http\Controllers\AdminController::class, 'Loginchecks'])->name('loginchecks');
Route::get('logout',[App\Http\Controllers\AdminController::class, 'Logout'])->name('logout');
Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard');
Route::get('admin/changepassword',[App\Http\Controllers\AdminController::class, 'changepassword'])->name('changepassword');
//adhar
Route::get('admin/adhar',[App\Http\Controllers\AdminController::class, 'adhar'])->name('adhar');
Route::Post('admin/addadhar',[App\Http\Controllers\AdminController::class, 'addadhar'])->name('addadhar');
Route::get('admin/Editadhar/{id}',[App\Http\Controllers\AdminController::class, 'Editadhar'])->name('Editadhar');
Route::get('admin/deleteadhar/{id}',[App\Http\Controllers\AdminController::class, 'deleteadhar'])->name('deleteadhar');
//kyc
Route::get('admin/kyc',[App\Http\Controllers\AdminController::class, 'kyc'])->name('adminkyc');
Route::get('admin/deletekyc/{id}',[App\Http\Controllers\AdminController::class, 'deleteKyc'])->name('deletekyc');

Route::get('admin/change-status/{id}', [App\Http\Controllers\AdminController::class, 'changeStatus'])->name('changestatus');

Route::Post('admin/changepasssword',[App\Http\Controllers\AdminController::class, 'changeadminpassword'])->name('changepasssword');

// usermanagement
Route::get('admin/commissionchart',[App\Http\Controllers\AdminController::class, 'commissionchart'])->name('commissionchart');
Route::get('admin/userlist',[App\Http\Controllers\AdminController::class, 'userlist'])->name('userlist');

Route::get('admin/holdProcess',[App\Http\Controllers\AdminController::class, 'holdProcess'])->name('holdProcess');
Route::get('admin/ListofPanCard',[App\Http\Controllers\AdminController::class, 'ListofPanCard'])->name('ListofPanCard');

Route::get('admin/formCollection',[App\Http\Controllers\AdminController::class, 'formCollection'])->name('formCollection');

Route::get('admin/pandingNew',[App\Http\Controllers\AdminController::class, 'pandingNew'])->name('pandingNew');

Route::Post('admin/successNew',[App\Http\Controllers\AdminController::class, 'successNew'])->name('successNew');


Route::get('admin/holdProcessNew',[App\Http\Controllers\AdminController::class, 'holdProcessNew'])->name('holdProcessNew');


Route::get('admin/newPan',[App\Http\Controllers\AdminController::class, 'newPan'])->name('newPan');

Route::get('admin/pendingkyc',[App\Http\Controllers\AdminController::class, 'pendingkyc'])->name('pendingkyc');


Route::post('admin/pendingstatus',[App\Http\Controllers\AdminController::class,'PendingStatus'])->name('admin/pendingstatus');


Route::get('admin/transferuser',[App\Http\Controllers\AdminController::class, 'transferuser'])->name('transferuser');
Route::get('admin/createuser',[App\Http\Controllers\AdminController::class, 'createuser'])->name('createuser');
Route::get('admin/panByAadhaar',[App\Http\Controllers\AdminController::class, 'PanByAadhaar'])->name('panByAadhaar');
Route::get('admin/panByDetails',[App\Http\Controllers\AdminController::class, 'PanByDetail'])->name('panByDetails');

// Route::Post('admin/updatepanByDetails',[App\Http\Controllers\AdminController::class, 'updatepanByDetails'])->name('updatepanByDetails');

Route::Post('admin/updatepanByDetails',[App\Http\Controllers\AdminController::class, 'updatepanByDetails'])->name('updatepanByDetails');

Route::get('admin/nsdlVerify',[App\Http\Controllers\AdminController::class, 'nsdlVerify'])->name('nsdlVerify');

Route::get('admin/updateprofile',[App\Http\Controllers\AdminController::class, 'updateprofile'])->name('updateprofile');
Route::get('admin/lostPanHistory',[App\Http\Controllers\AdminController::class, 'LostPanHistory'])->name('lostPanHistory');
Route::get('admin/lostPanDatabase',[App\Http\Controllers\AdminController::class, 'LostPanDatabase'])->name('lostPanDatabase');
Route::Post('admin/addlostPanDatabase',[App\Http\Controllers\AdminController::class, 'addlostPanDatabase'])->name('addlostPanDatabase');

Route::Post('admin/updatedata',[App\Http\Controllers\AdminController::class, 'UpdateData'])->name('updatedata');

// pricing
Route::get('admin/pricing',[App\Http\Controllers\AdminController::class, 'Pricing'])->name('pricing');

//setting
Route::get('admin/packageSetting',[App\Http\Controllers\AdminController::class,'PackageSetting'])->name('packageSetting');

Route::get('admin/updatepackige/{value}/{id}/{price}',[App\Http\Controllers\AdminController::class,'UpdatePackige'])->name('updatepackige');
Route::get('admin/updateName/{value}/{id}',[App\Http\Controllers\AdminController::class,'updateName'])->name('updateName');

Route::get("admin/MyPlanePrice/{value}/{id}",[App\Http\Controllers\AdminController::class,'MyPlanePrice'])->name('MyPlanePrice');
Route::get("admin/MyPlaneValidity/{value}/{id}",[App\Http\Controllers\AdminController::class,'MyPlaneValidity'])->name('MyPlaneValidity');
Route::get("admin/MyPlaneOverService/{value}/{id}",[App\Http\Controllers\AdminController::class,'MyPlaneOverService'])->name('MyPlaneOverService');

//video
Route::get('admin/addvideo',[App\Http\Controllers\AdminController::class, 'addvideo'])->name('addvideo');
Route::Post('admin/addvideos',[App\Http\Controllers\AdminController::class, 'Createvideo'])->name('addvideos');
Route::get('admin/videolist',[App\Http\Controllers\AdminController::class, 'videolist'])->name('videolist');
Route::get('admin/deletevideo/{id}',[App\Http\Controllers\AdminController::class, 'deletevideo'])->name('deletevideo');
Route::get('admin/editvideo/{id}',[App\Http\Controllers\AdminController::class, 'Editvideo'])->name('editvideo');
Route::post('admin/editvideou',[App\Http\Controllers\AdminController::class, 'videoUpdate'])->name('editvideo');
//end video
//commission
Route::get('admin/addcommission',[App\Http\Controllers\AdminController::class, 'addcommission'])->name('addcommission');
Route::Post('admin/addcommissions',[App\Http\Controllers\AdminController::class, 'Createcommission'])->name('addcommissions');
Route::get('admin/commissionlist',[App\Http\Controllers\AdminController::class, 'commissionlist'])->name('commissionlist');
Route::get('admin/deletecommission/{id}',[App\Http\Controllers\AdminController::class, 'deletecommission'])->name('deletecommission');
Route::get('admin/editcommission/{id}',[App\Http\Controllers\AdminController::class, 'Editcommission'])->name('editcommission');
Route::post('admin/editcommissionu',[App\Http\Controllers\AdminController::class, 'commissionUpdate'])->name('editcommission');

//end commission
//payment method paymentmeth

Route::get('admin/addpaymentmeth',[App\Http\Controllers\AdminController::class, 'addpaymentmeth'])->name('addpaymentmeth');
Route::Post('admin/addpaymentmeths',[App\Http\Controllers\AdminController::class, 'Createpaymentmeth'])->name('addpaymentmeths');
Route::get('admin/paymentmethlist',[App\Http\Controllers\AdminController::class, 'paymentmethlist'])->name('paymentmethlist');
Route::get('admin/deletepaymentmeth/{id}',[App\Http\Controllers\AdminController::class, 'deletepaymentmeth'])->name('deletepaymentmeth');
Route::get('admin/editpaymentmeth/{id}',[App\Http\Controllers\AdminController::class, 'Editpaymentmeth'])->name('editpaymentmeth');
Route::post('admin/editpaymentmethu',[App\Http\Controllers\AdminController::class, 'paymentmethUpdate'])->name('editpaymentmeth');


//discrepency letter management
Route::get('admin/pendingDiscrepencyLetter',[App\Http\Controllers\AdminController::class, 'PendingDiscrepencyLetter'])->name('pendingDiscrepencyLetter');
Route::post('admin/pendingDiscrepencyLetterupdate',[App\Http\Controllers\AdminController::class, 'PendingDiscrepencyLetterupdate'])->name('pendingDiscrepencyLetterupdate');
Route::get('admin/discrepencyLetterHistory',[App\Http\Controllers\AdminController::class, 'DiscrepencyLetterHistory'])->name('discrepencyLetterHistory');
// terms & info
Route::get('admin/panNoTermsInfo',[App\Http\Controllers\AdminController::class, 'PanNoTermsInfo'])->name('panNoTermsInfo');
Route::Post('admin/addPanNoTermsInfo',[App\Http\Controllers\AdminController::class, 'AddPanNoTermsInfo'])->name('addPanNoTermsInfo');
Route::get('admin/editPanNoTermsInfo/{id}',[App\Http\Controllers\AdminController::class, 'EditPanNoTermsInfo'])->name('editPanNoTermsInfo');
Route::get('admin/deleteTermsInfo/{id}',[App\Http\Controllers\AdminController::class, 'DeleteTermsInfo'])->name('deleteTermsInfo');
Route::get('admin/bannersetting',[App\Http\Controllers\AdminController::class,'BannerSetting'])->name('bannersettion');

Route::get('admin/paymentlist',[App\Http\Controllers\AdminController::class,'PaymentList'])->name('paymentlist');

Route::Post('admin/savebanners',[App\Http\Controllers\AdminController::class,'SaveBanner'])->name('savebanners');
Route::get('admin/deletebanner/{id}', [App\Http\Controllers\AdminController::class,'deletebanner'])->name('deletebanner');
Route::get('admin/editbanner/{id}', [App\Http\Controllers\AdminController::class,'EditBanner'])->name('editbanner');

//banner edit delete insert


Route::get('admin/welcomemessage',[App\Http\Controllers\AdminController::class,'WelcomeMessage'])->name('welcomemessage');
Route::Post('admin/savetext',[App\Http\Controllers\AdminController::class,'SaveText'])->name('savetext');
Route::get('admin/edittext/{id}',[App\Http\Controllers\AdminController::class,'editText'])->name('edittext');

Route::Post('admin/notification',[App\Http\Controllers\AdminController::class,'Notification'])->name('notification');

Route::get('admin/notificationview',[App\Http\Controllers\AdminController::class,'NotificationView'])->name('notificationview');
Route::get('admin/editnotification/{id}',[App\Http\Controllers\AdminController::class,'EditnotiFication'])->name('editnotification');

Route::get('admin/changecreadit/{value}/{id}/{userid}',[App\Http\Controllers\AdminController::class,'ChangeCreadit'])->name('changecreadit');

Route::get('admin/add-area',[App\Http\Controllers\AdminController::class,'Addarea'])->name('add-area');

Route::Post('admin/createarea',[App\Http\Controllers\AdminController::class,'Createarea'])->name('createarea');

Route::get('admin/area-list',[App\Http\Controllers\AdminController::class,'Listarea'])->name('area-list');

Route::get('admin/getstate/{any}',[App\Http\Controllers\AdminController::class,'getstate'])->name('getstate');

Route::get('admin/getcity/{any}',[App\Http\Controllers\AdminController::class,'getcity'])->name('getcity');



Route::get('/', [Index::class,'index'])->name('index');
Route::get('index', [Index::class,'index'])->name('index');
Route::Post('/login', [Index::class,'Login'])->name('login');
Route::get('forget-password',[Index::class,'ForgetPassword'])->name('forget-password');
Route::Post('forgetpassword',[Index::class,'forgetpasswordSend'])->name('forgetpassword');
Route::get('deshbord',[Index::class,'DeshBord'])->name('deshbord');
Route::get('regester', [Index::class,'Regester'])->name('regester');
Route::Post('regester', [Index::class,'RegesterPan'])->name('regester');
Route::get('verified-otp', [Index::class,'OtpVerify'])->name('verified-otp');
Route::Post('verified-otp', [Index::class,'CheckOtp'])->name('verified-otp');
Route::get('resend',[Index::class,'Resend'])->name('resend');
Route::get('resendemail',[Index::class,'Resendemail'])->name('resendemail');
Route::get('logout',[Index::class,'Logout'])->name('logout');
Route::get('package',[Index::class, 'Package'])->name('package');

//Kyc
Route::get('kyc',[Index::class, 'kyc'])->name('kyc');
Route::Post('kycStore',[Index::class, 'kycStore'])->name('kycStore');

//pan no
Route::get('pan-no',[Index::class,'panno'])->name('pan-no');
Route::Post('panNoSearch',[Index::class,'PanNoSearch'])->name('panNoSearch');
Route::get('panDeduction',[Index::class,'panDeduction'])->name('panDeduction');
Route::Post('panByAadhaar',[Index::class,'panByAadhaar'])->name('panByAadhaar');
Route::Post('panByDetails',[Index::class,'panByDetails'])->name('panByDetails');
Route::get('searchaddhar/{id}',[Index::class,'searchAddhar'])->name('searchaddhar');

//paytm
Route::post('paytm-payment',[PaytmController::Class, 'paytmPayment'])->name('paytm.payment');
Route::post('paytm-callback',[PaytmController::Class, 'paytmCallback'])->name('paytm.callback');
Route::get('paytm-purchase',[PaytmController::Class, 'paytmPurchase'])->name('paytm.purchase');

Route::get('searchemail/{id}',[Index::class,'SearchEmail'])->name('searchemail');
Route::get('searchemobile/{id}',[Index::class,'SearcheMobile'])->name('searchemobile');

Route::get('services',[Index::class,'Services'])->name('services');
Route::get('orderHistory',[Index::class,'OrderHistory'])->name('orderHistory');
Route::get('txnHistory',[Index::class,'TxnHistory'])->name('txnHistory');
Route::get('helpSupport',[Index::class,'HelpSupport'])->name('helpSupport');
Route::get('profile',[Index::class,'Profile'])->name('profile');
Route::get('commission',[Index::class,'Commission'])->name('commission');
Route::get('discrepency',[Index::class,'Discripency'])->name('discripency');

Route::Post('discrepency',[Index::class,'DiscrepencyInsert'])->name('discrepency');

// Route::get('pan-no2',[Index::class,'panno2'])->name('pan-no2');
Route::get('receipts',[Index::class,'Receipts'])->name('receipts');
Route::get('pan-searching',[Index::class,'panSearching'])->name('pan-searching');
Route::get('pan-application',[Index::class,'panApplication'])->name('pan-application');
Route::get('gazzletPanApplication',[Index::class,'gazzletPanApplication'])->name('gazzletPanApplication');




Route::get('AccountStatement',[Index::class,'AccountStatement'])->name('AccountStatement');


Route::get('newPanCard',[Index::class,'newPanCard'])->name('newPanCard');


Route::get('panNewApplication',[Index::class,'panNewApplication'])->name('panNewApplication');

Route::Post('createpanNewApplication',[Index::class,'CreatepanNewApplication'])->name('createpanNewApplication');

Route::Post('creatsepanapplication',[Index::class,'Createpanapplication'])->name('creatsepanapplication');
Route::get('download',[Index::class,'Download'])->name('download');

Route::get('pricing',[Index::class,'Pricing'])->name('pricing');

Route::Post('purchasepackage',[Index::class,'PurchasePackage'])->name('purchasepackage');
Route::post('purchase',[Index::class,'Purchase'])->name('purchase');

//change password
Route::Post('changepasssword',[Index::class, 'Changepassword'])->name('changepasssword');
Route::get('video-tutorial',[Index::class,'Video'])->name('video-tutorial');
//end password

Route::get('genrateqrcode/{id}',[Index::class,'GenrateQrcode'])->name('genrateqrcode');

Route::Post('paymetrequest',[Index::class,'PaymetRequest'])->name('paymetrequest');

Route::get('getstatus/{id}',[Index::class,'GetDataState']);
// Route::get('getcitys/{id}',[Index::class,''])
Route::get('getcity/{id}',[Index::class,'GetDataCity']);
Route::get('getmycites/{id}',[Index::class,'GetDataCitys']);
Route::get('arecode/{id}',[Index::class,'AreCode']);
Route::get('singalstate/{id}',[index::class,'SingalState']);

Route::get('getapplicant/{id}',[Index::class,'GetApplicant']);



