<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Kyc;
use App\Models\Price;
use App\Models\Pan_by_aadhaar;
use App\Models\Pan_by_detail;
use Validator;
use Session;
use DB;

class AdminController extends Controller
{
    //auto load function
    protected $admin;
    public function __construct()
    {
        $this->admin = new Admin();
    }

   //admin login
   public function Admin(){
       return view('admin.login');
   }
   public function Loginchecks(Request $request){
       $this->validate($request,[
           'email' => 'required',
           'password' => 'required',
       ]);

       $user_data = array(
           'email'  => $request->email,
           'password' => $request->password,
       );
        $data = DB::table('admin')->where($user_data)->first();
       if(!empty($data)){
           Session::put('admin',$data);
           return Redirect::to('admin/dashboard');
       } else {
        return redirect()->back()->with('success', 'User Email And Password Was Wrong!');
       }
   }

   public function Dashboard()
   {

       $data=Session::get('admin');
       if(empty($data))
       {
            return redirect()->route('Admin');

       }else{
            return view('admin.dashboard');
       }

   }

   public function Logout(){
       session()->forget('admin');
       // return Redirect::to('admin');
       return redirect()->route('Admin');
    }

  // End login

  //kyc

public function kyc(){

    $result['kyc'] = Kyc::get();
    return view('admin.kyc.kyc',$result)->with('i');

}

public function changeStatus($id){


    $getstatus = Kyc::select('status')->where('id',$id)->first();
    if($getstatus->status==1){
        $status=0;

    }
    else{
        $status=1;
    }
    Kyc::where('id',$id)->update(['status'=>$status]);

    return redirect()->back()->with('success','Status Changed Successfully');

}

public function deleteKyc($id){

    $kyc = DB::delete('delete from kycs where id = ?',[$id]);
    return redirect()->route('adminkyc')->with('success', 'Kyc details deleted successfully');
}

//Adhar
public function adhar(){
    $table = "adhar";
    $result['adhar'] = $this->admin->GetallData($table);
    return view('admin.adhar.adhar',$result)->with('i');
}

public function addadhar(Request $request){
    if(empty($request->id)){
        $validator = Validator::make($request->all(), [
            'adharno' => 'required',
            'name'  => 'required',
    ]);
        if ($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['name'] = $request->name;
            $data['adharno'] = $request->adharno;

            $table = "adhar";
            $result = $this->admin->insertdata($table, $data);
            if ($result==1) {
                return response()->json(['status'=>200,'success'=>'adhar Successfully Create!']);
            } else {
                return response()->json(['status'=>200,'success'=>'Query Not Run!']);
            }
        }
    } else {
        $data['name'] = $request->name;
        $data['adharno'] = $request->adharno;
        $table = "adhar";
        $result = $this->admin->UpdateItem($table,$request->id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'adhar Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
    }
}

public function Editadhar($id){
    $adhar = $this->admin->EditeItem('adhar',$id);
    return response()->json(['status'=>200,"data"=>$adhar]);
}

public function deleteadhar($id){
    $result = $this->admin->RemoveItem('adhar',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
}
//End Adhar

//Terms & Info

public function PanNoTermsInfo(){
    $table = "termsinfos";
    $result['termsInfo'] = $this->admin->GetallData($table);
    return view('admin.termsInfo.panNoTermsInfo',$result)->with('i');
}

public function AddPanNoTermsInfo(Request $request){
    if(empty($request->id)){
        $validator = Validator::make($request->all(), [
            'for'  => 'required',
            'terms' => 'required',
            'info'  => 'required',

    ]);
        if ($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['for'] = $request->for;
            $data['terms'] = $request->terms;
            $data['info'] = $request->info;


            $table = "termsinfos";
            $result = $this->admin->insertdata($table, $data);
            if ($result==1) {
                return response()->json(['status'=>200,'success'=>'adhar Successfully Create!']);
            } else {
                return response()->json(['status'=>200,'success'=>'Query Not Run!']);
            }
        }
    } else {
        $data['for'] = $request->for;
        $data['terms'] = $request->terms;
        $data['info'] = $request->info;

        $table = "termsinfos";
        $result = $this->admin->UpdateItem($table,$request->id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'adhar Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
    }
}

public function EditPanNoTermsInfo($id){
    $terms = $this->admin->EditeItem('termsinfos',$id);
return response()->json(['status'=>200,"data"=>$terms]);
}

public function DeleteTermsInfo($id){
    $result = $this->admin->RemoveItem('termsinfos',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
}
//End terms & info

// usermanagement
   public function createuser(){

       return view('admin.usermanagement.createuser');
   }
    public function Pendingkyc(){
    $result['kyc'] = Kyc::get();
    return view('admin.usermanagement.pendingkyc',$result)->with('i');

}

public function PendingStatus(Request $request){
    $kyc = Kyc::find($request->id);
    $kyc->status = $request->status;
    $kyc->remark = $request->remark;
    if($kyc->save()){
        return redirect()->back()->with('success', 'Update Status!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
}

      public function commissionchart(){

       return view('admin.usermanagement.commissioncharts');
   }
      public function transferuser(){

       return view('admin.usermanagement.transferuser');
   }
      public function userlist(){

       return view('admin.usermanagement.userlist');
   }
      public function holdProcess(){
        $result['holdProcess'] = $this->admin->GetallData('panapplication');
        return view('admin.holdprocess.holdProcess',$result)->with('i');
   }
   
       public function formCollection(){

       return view('admin.holdprocess.formCollection');
   }
   
    public function pandingNew(){
       $result['panding'] = $this->admin->GetallDataByCondition('panapplication',['status'=>'0']);
       return view('admin.nsdlmanagement.pandingNew',$result);
   }
   
   
   
   public function successNew(Request $request){
    $data['message'] = $request->message;
    $data['message1'] = $request->message1;
    $data['status'] = "1";
    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $images = "thumbnail".time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/admin/images');
        $image->move($destinationPath, $images);
        $data['image'] = $images;
    }
    $result = $this->admin->UpdateItem('panapplication',$request->id,$data);
    if($result > 0){
        return redirect()->back()->with('success', 'Well Done Update!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
       
   }
   
   
         public function  ListofPanCard(){

       return view('admin.holdprocess.ListofPanCard');
   }
   
   
   
   
     public function  nsdlVerify(){

       return view('admin.nsdlmanagement.nsdlVerify');
   }
   
      public function   newPan(){

       return view('admin.nsdlmanagement.newPan');
   }
   
   


      public function holdProcessNew(){
       return view('admin.holdprocess.holdProcessNew');
   }
   
   


   public function PanByAadhaar(){
    $result['aadhaar'] = Pan_by_aadhaar::orderBy('id','desc')->get();
    //echo "<pre>"; print_r($result['aadhaar']); die;
    return view('admin.findPan.panByAadhaar',$result);
   }


   public function UpdateData(Request $request){
     $data['status'] = $request->status;
     $data['panno'] = $request->value;
       $result = $this->admin->UpdateItem('pan_by_aadhaars',$request->id,$data);
        if ($result==1) {
            return redirect()->back()->with('success', 'Well Done Successful Update!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
   }



      public function PanByDetail(){

        $result['detail'] = Pan_by_detail::get();

       return view('admin.findPan.panByDetail',$result);
   }
   
//   public function EditpanByDetails($id=""){
//     $result['panByDetails'] = $this->admin->EditeItem('Pan_by_detail',$id);
//     return view('admin.pages.editpages',$result);
// }
   
    public function updatepanByDetails(Request $request){
      $data['type'] = $request->type;
      $data['numpin'] = $request->numpin;
      $result = $this->admin->UpdateItem('pan_by_details',$request->id,$data);
        if ($result==1) {
          return redirect()->back()->with('success', 'Well Done Successful Update!');
        } else {
           return redirect()->back()->with('success', 'Query Not Run!');
        }
   }
   
   

      public function updateprofile(){

       return view('admin.usermanagement.updateprofile');
   }

   public function Pricing(){

    $result['price'] = Price::get();


    return view('admin.pricing.pricing',$result);
   }

   public function LostPanHistory(){

    $result['kyc'] = Kyc::get();

    return view('admin.findPan.lostPanHistory',$result)->with('i');

   }

      public function LostPanDatabase(){
        $result['adhar'] = $this->admin->GetallData('pan_by_aadhaars');
        return view('admin.findPan.lostPanDatabase',$result)->with('i');
   }
   
   
   public function addlostPanDatabase(Request $request){
    if(empty($request->id)){
        $validator = Validator::make($request->all(), [
            'appName'  => 'required',
            'aadhaarNo' => 'required',
            'panno'  => 'required',

    ]);
        if ($validator->fails()) {
            return response()->json(['status'=>201,'error'=>$validator->errors()]);
        } else {
            $data['appName'] = $request->appName;
            $data['aadhaarNo'] = $request->aadhaarNo;
            $data['panno'] = $request->panno;


           
            $result = $this->admin->insertdata('pan_by_aadhaars', $data);
            if ($result==1) {
                // return response()->json(['status'=>200,'success'=>'adhar Successfully Create!']);
                  return redirect()->back()->with('success', 'pages Successfully Add!');
            } else {
                // return response()->json(['status'=>200,'success'=>'Query Not Run!']);
                return redirect()->back()->with('success', 'Query Not Run!');
            }
        }
    } else {
        $data['appName'] = $request->appName;
            $data['aadhaarNo'] = $request->aadhaarNo;
            $data['panno'] = $request->panno;

        $table = "pan_by_aadhaars";
        $result = $this->admin->UpdateItem($table,$request->id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'adhar Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
    }
}
   
   

     public function PendingDiscrepencyLetter(){
       $result['discrepencys'] = $this->admin->GetAllData('discrepency'); 
       return view('admin.discrepencyLetterManagement.pendingDiscrepancyLetter',$result);
   }
   
   
    public function PendingDiscrepencyLetterupdate(Request $request){
      $data['types'] = $request->types;
      $data['pendingnum'] = $request->pendingnum;
      $result = $this->admin->UpdateItem('discrepency',$request->id,$data);
        if ($result==1) {
          return redirect()->back()->with('success', 'Well Done Successful Update!');
        } else {
           return redirect()->back()->with('success', 'Query Not Run!');
        }
   }

   public function PackageSetting(){
    $result['package'] = DB::table('package')->get();
    $result['ourservices'] =  DB::table('ourservices')->get();
    //dd($result);
    return view('admin.setting.packageSetting',$result)->with('i');
   }

     public function DiscrepencyLetterHistory(){

       return view('admin.discrepencyLetterManagement.discrepencyLetterHistory');
   }


   public function UpdatePackige($value,$id,$price){
      $data['charge'] = $value;
      $data['price'] = $price;
      $result = $this->admin->UpdateItem('attributes',$id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
   }

   public function updateName($name,$id){
     $data['name'] = $name;
     $result = $this->admin->UpdateItem('package',$id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
   }

   public function MyPlanePrice($price,$id){
    $data['price'] = $price;
    $result = $this->admin->UpdateItem('package',$id,$data);
       if ($result==1) {
           return response()->json(['status'=>200,'success'=>'Successfully Update!']);
       } else {
           return response()->json(['status'=>200,'success'=>'Query Not Run!']);
       }
  }

  public function MyPlaneValidity($validity,$id){
    $data['validity'] = $validity;
    $result = $this->admin->UpdateItem('package',$id,$data);
       if($result==1) {
           return response()->json(['status'=>200,'success'=>'Successfully Update!']);
       } else {
           return response()->json(['status'=>200,'success'=>'Query Not Run!']);
       }
  }

  public function MyPlaneOverService($name,$id){
    $data['name'] = $name;
     $result = $this->admin->UpdateItem('ourservices',$id,$data);
       if($result==1) {
           return response()->json(['status'=>200,'success'=>'Successfully Update!']);
       } else {
           return response()->json(['status'=>200,'success'=>'Query Not Run!']);
       }
  }

  public function BannerSetting(){
    $result['item'] = $this->admin->GetAllData('banner');
    return view('admin.banner.banner',$result)->with('i');
  }

  public function SaveBanner(Request $request){
    if(empty($request->id)){
    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/admin/images');
        $image->move($destinationPath, $name);

        $data['image'] = $name;

        $result = $this->admin->insertdata('banner',$data);
        if($result >0 ){
            return response()->json(['status'=>200,'success'=>"image Store Successfull!"]);
        } else {
            return response()->json(['status'=>201,'success'=>"Query Not Run!"]);
        }
    } else {
        return response()->json(['status'=>201,'success'=>"Image Store Successful!"]);
    }
    } else {
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
            $result = $this->admin->UpdateItem('banner',$request->id,$data);
            if($result >0 ){
                return response()->json(['status'=>200,'success'=>"image Store Successfull!"]);
            } else {
                return response()->json(['status'=>201,'success'=>"Query Not Run!"]);
            }
        } else {
            return response()->json(['status'=>201,'success'=>"Image Store Successful!"]);
        }
    }
  }

  public function deletebanner($id=""){
    $result = $this->admin->RemoveItem('banner',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
  }

  public function EditBanner($id=""){
    $result = $this->admin->EditeItem('banner',$id);
    return response()->json(['status'=>200,'data'=>$result]);
  }

  public function WelcomeMessage(){
    $result['data'] = $this->admin->GetAllData('welcomemsg');
    return view('admin.welcome.welcomemsg',$result)->with('i');
  }

  public function SaveText(Request $request){
    if(empty($request->id)){
        $data['msg'] = $request->msg;
        $result = $this->admin->insertdata('welcomemsg',$data);
        if($result== 1){
            return response()->json(['status'=>201,'success'=>"record Successfull Add!"]);
        } else {
            return response()->json(['status'=>201,'success'=>"query not run!"]);
        }
    } else  {
        $data['msg'] = $request->msg;
        $result = $this->admin->UpdateItem('welcomemsg',$request->id,$data);
        if($result== 1){
            return response()->json(['status'=>201,'success'=>"Record Successfull Update!"]);
        } else {
            return response()->json(['status'=>201,'success'=>"query not run!"]);
        }
    }
  }

  public function editText($id=""){
    $result = $this->admin->EditeItem('welcomemsg',$id);
    return response()->json(['status'=>200,'data'=>$result]);
  }


public function NotificationView(){
    $result['data'] = $this->admin->GetAllData('notification');
    return view('admin.notification.notification',$result)->with('i');
}

 public function EditnotiFication($id=""){
    $result = $this->admin->EditeItem('notification',$id);
    return response()->json(['status'=>200,'data'=>$result]);
 }

  public function Notification(Request $request){
    $data['msg'] = $request->msg;
    $result = $this->admin->UpdateItem('notification',$request->id,$data);
    if($result== 1){
        return response()->json(['status'=>201,'success'=>"Record Successfull Update!"]);
    } else {
        return response()->json(['status'=>201,'success'=>"query not run!"]);
    }
  }

 // Video
  public function addvideo(){
    $result['video'] = $this->admin->GetallData('video');
    return view('admin.video.add-video',$result);
 }
 public function Createvideo(Request $request){
    $validated = $request->validate([
        'title' => 'required',
        'link' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
       ]);
    $data['title'] = $request->title;
    $data['link'] = $request->link;
    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $images = "thumbnail".time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/admin/images');
        $image->move($destinationPath, $images);
        $data['image'] = $images;
    }
    $result = $this->admin->insertdatagetid('video', $data);
    if($result >0){
       // dd($result); die;
        return redirect()->back()->with('success', 'Well Done Cretae video!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
 public function videolist(){
    $result['videolist'] = $this->admin->GetallData('video');
    return view('admin.video.video-list',$result)->with('i');
 }

 public function Editvideo($id=""){
    $result['video'] = $this->admin->EditeItem('video',$id);
    return view('admin.video.edit-video',$result);
 }

 public function videoUpdate(Request $request){
    $data['title'] = $request->title;
    $data['link'] = $request->link;
    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $images = "thumbnail".time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/admin/images');
        $image->move($destinationPath, $images);
        $data['image'] = $images;
    }
    $result = $this->admin->UpdateItem('video',$request->id,$data);
    if($result > 0){
        return redirect()->back()->with('success', 'Well Done Update video!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
 public function deletevideo($id=""){
    $result = $this->admin->RemoveItem('video',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }

  // End Video

//commision


public function addcommission(){
    $result['commission'] = $this->admin->GetallData('commission');
    return view('admin.commission.add-commission',$result);
 }
 public function Createcommission(Request $request){
    $validated = $request->validate([
        'profile' => 'required',
        'vat_no' => 'required',
       ]);
    $data['profile'] = $request->profile;
    $data['vat_no'] = $request->vat_no;

    $result = $this->admin->insertdatagetid('commission', $data);
    if($result >0){
       // dd($result); die;
        return redirect()->back()->with('success', 'Well Done Cretae commission!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
 public function commissionlist(){
    $result['commissionlist'] = $this->admin->GetallData('commission');
    return view('admin.commission.commission-list',$result)->with('i');
 }

 public function Editcommission($id=""){
    $result['commission'] = $this->admin->EditeItem('commission',$id);
    return view('admin.commission.edit-commission',$result);
 }

 public function commissionUpdate(Request $request){
    $data['profile'] = $request->profile;
    $data['vat_no'] = $request->vat_no;

    $result = $this->admin->UpdateItem('commission',$request->id,$data);
    if($result > 0){
        return redirect()->back()->with('success', 'Well Done Update commission!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
 public function deletecommission($id=""){
    $result = $this->admin->RemoveItem('commission',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }

//end commision

//payment method
public function paymentmethlist(){
    $result['paymentmethlist'] = $this->admin->GetallData('paymentmeth');
    return view('admin.paymentmeth.paymentmeth-list',$result)->with('i');
 }

public function addpaymentmeth(){
    $result['paymentmeth'] = $this->admin->GetallData('paymentmeth');
    return view('admin.paymentmeth.add-paymentmeth',$result);
}
public function Createpaymentmeth(Request $request){
    $validated = $request->validate([
        'payment_type' => 'required',
        // 'commision' => 'required',
        // 'name' => 'required',
        // 'upiid' => 'required',
        // 'account_name' => 'required',
        // 'account_number' => 'required',
        // 'bank_ifsc' => 'required',
        // 'bank_name' => 'required',
       ]);
    $data['payment_type'] = $request->payment_type;
    $data['commision'] = $request->commision;
    $data['name'] = $request->name;
    $data['upiid'] = $request->upiid;
    $data['account_name'] = $request->account_name;
    $data['account_number'] = $request->account_number;
    $data['bank_ifsc'] = $request->bank_ifsc;
    $data['bank_name'] = $request->bank_name;

    $result = $this->admin->insertdatagetid('paymentmeth', $data);
    if($result >0){
       // dd($result); die;
        return redirect()->back()->with('success', 'Well Done Cretae Paymenth method!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }

  public function Editpaymentmeth($id=""){
    $result['editpaymentmeth'] = $this->admin->EditeItem('paymentmeth',$id);
    return view('admin.paymentmeth.edit-paymentmeth',$result);
 }

 public function paymentmethUpdate(Request $request){
    $data['payment_type'] = $request->payment_type;
    $data['commision'] = $request->commision;
    $data['name'] = $request->name;
    $data['upiid'] = $request->upiid;
    $data['account_name'] = $request->account_name;
    $data['account_number'] = $request->account_number;
    $data['bank_ifsc'] = $request->bank_ifsc;
    $data['bank_name'] = $request->bank_name;
    $result = $this->admin->UpdateItem('paymentmeth',$request->id,$data);
    if($result > 0){
        return redirect()->back()->with('success', 'Well Done Update payment method !');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
 public function deletepaymentmeth($id=""){
    $result = $this->admin->RemoveItem('paymentmeth',$id);
    if($result==1){
        return redirect()->back()->with('success', 'Remove Record Successfully!');
    } else {
        return redirect()->back()->with('success', 'Query Not Run!');
    }
 }
// end payment method
 public function PaymentList(Request $request){
    $result['data'] = DB::table('wallets')->whereIn('status',['0','1','2','3'])->orderBy('id','DESC')->get();
    return view('admin.paymentmeth.index',$result)->with('i');
 }
 //ChangeStatus
public function ChangeCreadit($value,$id,$ddd){
    echo $ddd;
      if($value=="1"){
        $data['status'] = "credit";
      } elseif($value=="2"){
        $data['status'] = "2";
      }elseif($value=="3"){
        $data['status'] = "3";
      }else {
        $data['status'] = "0";
      }
      $result = $this->admin->UpdateItem('wallets',$id,$data);
        if ($result==1) {
            return response()->json(['status'=>200,'success'=>'Successfully Update!']);
        } else {
            return response()->json(['status'=>200,'success'=>'Query Not Run!']);
        }
}


protected  function chekWallet($userid){
    $debit = DB::table('wallets')->where(['agetid'=>$userid,'status'=>'0'])->sum('amount');
    $credit = DB::table('wallets')->where(['agetid'=>$userid,'status'=>'credit'])->sum('amount');
    return $debit-$credit;
}


public function Listarea(){
     $result['arealist'] = $this->admin->GetallData('area');
    return view('admin.area.arealist',$result)->with('i');
}


public function Addarea(){
$result['country'] = $this->admin->GetallData('tbl_countries');
//echo "<pre>"; print_r($result); die;
$result['state'] = $this->admin->GetallData('tbl_states');
$result['city'] = $this->admin->GetallData('tbl_cities');
//echo "<pre>"; print_r($result); die;
return view('admin.area.addarea',$result)->with('i');
}

public function getstate($id=""){
    $data = $this->admin->GetbyDataCondition('tbl_countries',['id'=>$id]);
    echo '<option value="">Select State</option>';
    if($data->count()> 0){
        foreach($data as $items){ ?>
            <option value="<?= $items->id ?? '' ?>"><?= $items->name ?? '' ?></option>
      <?php  }
    }

}

public function getcity($id=""){
    $data = $this->admin->GetbyDataCondition('tbl_states',['id'=>$id]);
    echo '<option value="">Select Childcategory</option>';
    if($data->count()> 0){
        foreach($data as $items){ ?>
            <option value="<?= $items->id ?? '' ?>"><?= $items->name ?? '' ?></option>
      <?php  }
    }
}

public function Createarea(Request $request){
   
   $data['area_code'] = $request->area_code;
    $data['ao_type'] = $request->ao_type;
    $data['range_code'] = $request->range_code;
    $data['ao_no'] = $request->ao_no;
    $data['country_id'] = $request->country_id;
    $data['state_id'] = $request->state_id;
    $data['city_id'] = $request->city_id;
     $result = $this->admin->InsertData('area',$data);
    if($result==1){
        return redirect()->back()->with('success','Record Successful! Create');
    } else {
        return redirect()->back()->with('success','This Query Not Run');
    }
   
    
}




}
