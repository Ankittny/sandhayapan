<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Kyc;
use App\Models\Wallet;
use App\Models\Pan_by_aadhaar;
use App\Models\Pan_by_detail;
use Illuminate\Support\Facades\Http;
use QrCode;
use PaytmWallet;
use Session;
use Str;
use PDF;
use DB;
class Index extends Controller{
    protected $admin;

    public function __construct(){
        $this->admin = new admin();
    }

   public function index(){
     if(empty(Session::get('name'))){
       return view('web.login');
     } else{
        return redirect('deshbord');
     }
   }

   public function Regester(){
     return view('web.regester');
   }

   public function RegesterPan(request $request){
    $checkemail = $this->admin->MultiDataSingal('agents',['email'=>$request->email]);
    if(!empty($checkemail)){
        return redirect()->back()->with('success','This email id is already taken');
    }
    $checkmobile = $this->admin->MultiDataSingal('agents',['mobile'=>$request->mobile]);
    if(!empty($checkmobile)){
        return redirect()->back()->with('success','This mobile id is already taken');
    } else {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'mobile' => 'numeric|digits_between:9,11',
        'password' => 'required',
        'termandcondition' => 'required',
    ]);
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['mobile'] = $request->mobile;
       $data['password'] = $request->password;
       $data['agentid'] = random_int(100000, 999999);
       $data['termandcondition'] = $request->termandcondition;
       Session::put('data',$data);
       Session::put('second',Str::substr($request->email,2));

       $result =  $this->SmsSendOtp($request->mobile);
       $this->OtpMail($request->email);
       if($result==1){

        return redirect('verified-otp')->with('success','OTP has been sent to your Mobile: xxxx'.Str::substr($request->mobile,7));
       } else {

        return redirect()->with()->back('success','Please Enter A Valid  Number!');
       }
    }
   }

   public function SmsSendOtp($mobile=""){
    $otp = mt_rand(2000,9000);
    Session::put('mobileotp',$otp);
    $dd = Http::get('https://maker.ifttt.com/trigger/SMS/with/key/enT1gZgyUR0avkatrD4l3ydQiuzSM3-JdQjie5ce6Ir?value1='.$mobile.'&value2=Do Not Share it with anyone. Login OTP is:"'.$otp.'" Not You? Report +91 9891927865');
    if($dd){
        return "1";
    } else {
        return "2";
    }
   }


  public function OtpVerify(){
    return view('web.verify');
  }

  public function CheckOtp(Request $request){
    $request->validate([
        'mobileotp' => 'required',
        'emailotp' => 'required',
    ]);
    if($request->mobileotp==Session::get('mobileotp') && $request->emailotp==Session::get('emailotp')){
        $result = $this->admin->Insert('agents',Session::get('data'));
        if($result==1){
            $re =  $this->SendNotification(Session::get('data'),$request);
            if($re == 1){
            Session::flush();
            return redirect('/')->with('success','SuccessFul Create!');
            }
        } else {
            Session::forget('second');
            return redirect()->back()->with('success','Please Enter A valid OTP');
        }
    } else {
         Session::forget('second');
        return redirect()->back()->with('success','Please Enter A valid otp');
    }
  }

  public function SendMailNotification($data){
    Session::put('emailotp',$otp);
        $to      = 'tny3infotech@gmail.com';
        $subject = 'the subject';
        $message = 'UserName:'.$data['email']."\r\n".'Password:'.$data['password'];
        $headers = 'From: '.$data['email']      . "\r\n" .
                    'Reply-To: '.$data['email'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
       $result =  mail($to, $subject, $message, $headers);
       return $result;
   }

    public function SendNotification($data,$request){
        $to      = 'tny3infotech@gmail.com';
        $subject = 'the subject';
        $message = 'UserName:'.$data['email']."\r\n".'Password:'.$data['password'];
        $headers = 'From: '.$data['email']      . "\r\n" .
                    'Reply-To: '.$data['email'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
       $result =  mail($to, $subject, $message, $headers);
       return $result;
   }

   public function Login(Request $request){
        $mobilecheck = $this->admin->MultiDataSingal('agents',['mobile'=>$request->mobile]);
            if(!empty($mobilecheck)){
            $check = $this->admin->MultiDataSingal('loginauth',['macaddress'=>$this->GetmacAddress()]);
            if(@$check->atamp > 3){
                return redirect()->back()->with('success','Your are block');
            } else {
            $request->validate([
                'mobile' => 'required',
                'password' => 'required',
            ]);
            $checkuser = $this->admin->MultiDataSingal('agents',['mobile'=>$request->mobile,'password'=>$request->password]);
            if(!empty($checkuser)){
                Session::put('agetid',$checkuser->id);
                Session::put('name',$checkuser->name);
                Session::put('email',$checkuser->email);
                Session::put('mobile',$checkuser->mobile);
                Session::put('packagid',$checkuser->packagid);
                Session::put('status',$checkuser->status);
        DB::table('loginauth')->where('mobile',$request->mobile)->delete();
                 if($checkuser->status=="0"){
                    return redirect('/pricing');
                 } else {
                    return redirect('/deshbord');
                 }
            } else {
                $result = $this->ChackAtamp($request->mobile);
                if($result > 3){
                    return redirect()->back()->with('success','Your account has been locked contact the customer care +91 9891927865');
                } else {
                    return redirect()->back()->with('success',' Invalid password. You are left with '.(3-$result).' more attempts');
                }
            }
        }
        }else {
            return redirect()->back()->with('success','This Mobile Number is not Registered');
        }
   }

   public function ChackAtamp($mobile){
        $check = $this->admin->MultiDataSingal('loginauth',['macaddress'=>$this->GetmacAddress(),'mobile'=>$mobile]);
        if(empty($check)){
            $data['macaddress'] = $this->GetmacAddress();
            $data['atamp'] = 1;
            $data['mobile'] = $mobile;
            $res = $this->admin->Insert('loginauth',$data);
            return $res;
        } else {
           if($check->atamp >= 3){
            return $check->atamp+1;
           } else {
            $data['atamp'] = $check->atamp+1;
            $data['mobile'] = $mobile;
            $update = $this->admin->DataUpdate('loginauth','macaddress',$this->GetmacAddress(),$data);
            return $check->atamp+1;
           }
        }
   }


   public function GetmacAddress(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
    //   return $ipAddr=\Request::ip(); exit;
    //     ob_start();
    //     system('ipconfig/all');
    //     $mycom=ob_get_contents();
    //     ob_clean();
    //     $findme = "Physical";
    //     $pmac = strpos($mycom, $findme);
    //     $mac=substr($mycom,($pmac+36),17);
    //     return $mac;
   }


   public function DeshBord(){
    $banner = $this->admin->GetAllData('banner');
    $notification = $this->admin->GetallDataSingal('notification');
     return view('web.deshbord',['banner'=>$banner,'notification'=>$notification]);
   }

   public function Logout(){
    Session::flush();
    return redirect('/');
   }

   //pan-no

   public function panno(){
    $fund = Session::get('fund');
    return view('web.pan-no',['fund'=>$fund]);
   }

   public function panDeduction(Request $request){
       $wallets = Wallet::where('agetid',session::get('agetid'))->count();
    if($wallets == 0){
        $fund = 0;
    }
    else {
        $subtotal = Wallet::where('status','credit')->where('agetid',Session::get('agetid'))->sum('amount');
        $deduction = ($subtotal-20);
        $fund = ($subtotal-$deduction);
    }
    return view('web.pan-no',['fund'=>$fund]);
   }

   public function searchAddhar($id){
      $dd = DB::table('attributes')->where('packageid',Session::get('packagid'))->get();
      $balence = $this->chekWallet(Session::get('agetid'));
        $result  = $this->admin->MultiDataSingal('pan_by_aadhaars',['aadhaarNo'=>$id]);
        if(!empty($result)){
            if($dd[0]->price<=$balence){
            return response()->json(['status'=>"200",'result'=>$result]);
            } else {
           return response()->json(["status"=>"202","msg"=>"You Don t Have Balance"]);
      }
        } else {
            return response()->json(['status'=>"201",'result'=>[]]);
        }
      
   }

//    public function PanSave(Request $request){
//        $result  = $this->admin->MultiDataSingal('adhar',['adharno'=>$request->adharno]);

//        if(empty($result)){
//             $data['adharno'] = $request->adharnumber;
//             $data['name'] = $request->applicantName;
//             $result = $this->admin->Insert('adhar',$data);
//             if($result==1){
//                 return redirect()->back()->with('success','Your Data has been successfully stored');
//             }
//              else {
//                 return redirect('receipts');
//             }
//        } else{
//             return redirect('panDeduction');
//        }
//    }

   public function Resendemail(){
   @$result = $this->OtpMail(Session::get('data')['email']);
    if($result==1){
        return redirect('verified-otp')->with('emai','OTP has been sent to your Email:'.'xxx'.'@gmail.com');
    } else {
        return redirect('verified-otp');
    }
   }
    public function Resend(){
    $dd = Http::get('https://maker.ifttt.com/trigger/SMS/with/key/enT1gZgyUR0avkatrD4l3ydQiuzSM3-JdQjie5ce6Ir?value1='.Session::get('data')['mobile'].'&value2= Do Not Share it with anyone. Login OTP is:"'.Session::get('mobileotp').'" Not You? Report+91 9891927865');
    if($dd){
        return redirect('verified-otp')->with('mob','OTP has been sent to your Mobile:'.'xxxxxx'.substr(Session::get('data')['mobile'],6,10));
    } else {
        return redirect('verified-otp');
    }
   }

   public function ForgetPassword(){
     return view('web.forgetpassword');
   }

   public function forgetpasswordSend(Request $request){
    $result  = $this->admin->MultiDataSingal('agents',['mobile'=>$request->mobile]);
    if(!empty($result)){
        $dd = Http::get('https://maker.ifttt.com/trigger/SMS/with/key/enT1gZgyUR0avkatrD4l3ydQiuzSM3-JdQjie5ce6Ir?value1='.$result->mobile.'&value2=Your Password Is:'.$result->password.'');
        if($dd){
            return redirect()->back()->with('success','Your Password Send Your Register Mobile no.');
        } else {
            return redirect('/');
        }
    } else {
        return redirect()->back()->with('success','Please Enter A valide Mobile number.');
    }
   }

   public function SearchEmail($email=""){
       $checkemail = $this->admin->MultiDataSingal('agents',['email'=>$email]);
       if(!empty($checkemail)){
           return response()->json(['status'=>200,'data'=>$checkemail]);
       } else {
            return response()->json(['status'=>201]);
       }
   }
   public function SearcheMobile($mobile=""){
       $checkemail = $this->admin->MultiDataSingal('agents',['mobile'=>$mobile]);
       if(!empty($checkemail)){
           return response()->json(['status'=>200,'data'=>$checkemail]);
       } else {
            return response()->json(['status'=>201]);
       }
   }


    public function OtpMail($email){
    $otp = mt_rand(2000,9000);
    Session::put('emailotp',$otp);
     $to      = $email;
     $subject = 'verification';
     $message = 'Hii this is Your Otp:'.$otp;
     $headers = 'From: tny3infotech@gmail.com'      . "\r\n" .
                  'Reply-To: '.$email . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
    }


    public function Services(){
        $fund = Session::get('fund');
        return view('web.services',['fund' => $fund]);
    }
    
    
    public function GetDataState($value){
       $result = DB::table('tbl_states')->where('country_id',$value)->get();
        echo "<option value=''>Select State</option>";
        if($result->count()>0){
           foreach($result as $items){ 
            echo "<option value='$items->id'>".$items->name."</option>";
          }
        }
    }
    
    public function GetDataCity($value){
        $result = DB::table('cities')->where('state_id',$value)->get();
        echo "<option value=''>Select City</option>";
        if($result->count()>0){
           foreach($result as $items){ 
            echo "<option value='$items->id'>".$items->city."</option>";
          }
        } 
    }
    
    
    
    public function AreCode($value){
        $data = DB::table('area')->where('city_id',$value)->first();
        if(!empty($data)){
            return response()->json(['status'=>200,'data'=>$data]);
        } else {
            return response()->json(['status'=>201,'data'=>[]]);
        }
    }
    
    
    
     public function GetDataCitys($value){
        $result = DB::table('tbl_cities')->where('state_id',$value)->get();
        echo "<option value=''>Select City</option>";
        if($result->count()>0){
           foreach($result as $items){ 
            echo "<option value='$items->id'>".$items->name."</option>";
          }
        } 
    }
    
    
    public function SingalState($value){
        $result = DB::table('tbl_states')->where('id',$value)->first();
        if(!empty($result)){
            return response()->json(['status'=>200,'data'=>$result]);
        } else {
             return response()->json(['status'=>201,'data'=>[]]);
        }
        echo "<pre>"; print_r($result);
    }
    
    
    
    
    public function GetApplicant($value){
        $result = DB::table('categoryofapplicant')->where('country_id',$value)->get();
        // echo "sdfsdfsdf"; die;
        echo "<option value=''>Select Applicant</option>";
        if($result->count()>0){
           foreach($result as $items){ 
            echo "<option value='$items->Applicant'>".$items->Applicant."</option>";
          }
        }
    }

    public function OrderHistory(){
        $result['fund'] = Session::get('fund');
        $result['data'] = $this->admin->GetallDataByCondition('wallets',['agetid'=> Session::get('agetid')]);
        return view('web.orderHistory',$result);
    }

    public function TxnHistory(){
        $result['fund'] = Session::get('fund');
        $result['data'] = $this->admin->GetallDataByCondition('wallets',['agetid'=> Session::get('agetid')]);
        return view('web.txnHistory',$result);
    }

    public function HelpSupport(){
        $fund = Session::get('fund');
        return view('web.helpSupport',['fund' => $fund]);
    }

    public function Profile(){
        $fund = Session::get('fund');
        return view('web.profile',['fund' => $fund]);
    }

    public function Commission(){
        $fund = Session::get('fund');
        return view('web.commission',['fund' => $fund]);
    }

    public function kyc(){
        $fund = Session::get('fund');
        return view('web.kyc.kyc',['fund' => $fund]);
    }

    public function panSearching(){
        $fund = Session::get('fund');
        //dd($fund);
        return view('web.pan-searching',['fund' => $fund]);
    }

    public function panApplication(){
        $fund = Session::get('fund');
        return view('web.pan-application',['fund' => $fund]);
    }
    
    public function Createpanapplication(Request $request){
      // echo "<pre>"; print_r($request->all()); die;
    //      $this->validate($request, [
    //     'application_type' => 'required',
    //     'category_of_applican' => 'required',
    //     'state' => 'required',
    //     'aadhaar_number' => 'required',
    //     'name_as_per_aadhaar' => 'required',
    //     'applicant_last_name' => 'required',
    //     'applicant_first_name' => 'required',
    //     'applicant_middle_name' => 'required',
    //     'applicant_name_on_card' => 'required',
    //     'dob' => 'required',
    //     'father_name' => 'required',
    //     'mother_name' => 'required',
    //     'gender' => 'required',
    //     'father_last_name' => 'required',
    //     'father_first_name' => 'required',
    //     'father_middle_name' => 'required',
    //     'father_ame_on_card' => 'required',
    //     'applicant_age' => 'required',
    //     'pan_card_type' => 'required',
    //     'residence_address' => 'required',
    //     'office_address' => 'required',
    //     'address' => 'required',
    //     'name_of_premises' => 'required',
    //     'post_office' => 'required',
    //     'locality' => 'required',
    //     'city' => 'required',
    //     'state_union' => 'required',
    //     'pincode' => 'required',
    //     'country_name' => 'required',
    //     'country_code' => 'required',
    //     'mobile' => 'required',
    //     'email' => 'required',
    //     'area_code' => 'required',
    //     'range_code' => 'required',
    //     'ao_no' => 'required',
    //     'proof_of_identity' => 'required',
    //     'proof_of_address' => 'required',
    //     'proof_of_date_of_birth' => 'required',
    //     'pan_card_mode' => 'required',
    //     'charges' => 'required',
    // ]);
    $chekpay = $this->chekWallet(Session::get('agetid'));
        if($chekpay>=$request->charges){
    
    $data['application_type'] = $request->application_type;
    $data['category_of_applican'] = $request->category_of_applican;
    $data['state'] = $request->state;
    $data['aadhaar_number'] = $request->aadhaar_number;
    $data['name_as_per_aadhaar'] = $request->name_as_per_aadhaar;
    $data['applicant_last_name'] = $request->applicant_last_name;
    $data['applicant_first_name'] = $request->applicant_first_name;
    $data['applicant_middle_name'] = $request->applicant_middle_name;
    $data['applicant_name_on_card'] = $request->applicant_name_on_card;   
    $data['dob_incorporationation'] = $request->dob_incorporationation;  
    $data['dob'] = $request->dob;
    $data['gender'] = $request->gender;
    $data['Pan_Card_Type'] = $request->Pan_Card_Type;
    $data['fathermother'] = $request->fathermother;
    $data['father_last_name'] = $request->father_last_name;
    $data['father_name'] = $request->father_name;
    $data['father_first_name'] = $request->father_first_name;
    $data['father_middle_name'] = $request->father_middle_name;
    $data['father_ame_on_card'] = $request->father_ame_on_card;
    $data['mother_last_name'] = $request->mother_last_name;
    $data['mother_first_name'] = $request->mother_first_name;
    $data['mother_middle_name'] = $request->mother_middle_name;
    $data['mother_name_on_card'] = $request->mother_name_on_card;
    $data['state_union'] = $request->state_union;
    $data['town_city_district'] = $request->town_city_district;
    $data['locality'] = $request->locality;
    $data['country_code'] = $request->country_code;
    $data['country_name'] = $request->country_name;
    $data['flat_room_door_block_no'] = $request->flat_room_door_block_no;
    $data['name_of_permission_building_village'] = $request->name_of_permission_building_village;
    $data['road_street_lane_post_office'] = $request->road_street_lane_post_office;
    $data['area_locality_taluka_sub_divisio'] = $request->area_locality_taluka_sub_divisio;
    $data['mobile'] = $request->mobile;
    $data['email'] = $request->email;
    $data['area_code'] = $request->area_code;
    $data['ao_type'] = $request->ao_type;
    $data['range_code'] = $request->range_code;
    $data['ao_no'] = $request->ao_no;
    $data['proof_of_identity'] = $request->proof_of_identity; 
    $data['proof_of_address'] = $request->proof_of_address; 
    $data['proof_of_date_of_birth'] = $request->proof_of_date_of_birth;
    $data['pan_card_mode'] = $request->pan_card_mode;
    $data['charges'] = $request->charges;
    
    $data['datetime'] = date('d/m/y h:i:sa');
    $data['agetid'] =  Session::get('agetid');
    $data['orderid'] = random_int(100000, 999999);
    $data['pincode'] = $request->pincode;
    $data['applicant_age'] = $request->applicant_age;
    $data['residence_address'] = $request->ResidenceAddress;
    $data['office_address'] = $request->ShopAddress;
    $data['address'] = $request->officeAddress;
    
    $data["parents_ame_on_card"] = $request->parents_ame_on_card;
    $data["parents_middle_name"] = $request->parents_middle_name;
    $data["parents_first_name"] = $request->parents_first_name;
    $data["parents_last_name"] = $request->parents_last_name;

    $data['name_of_premises'] = $request->name_of_premises;
    $data['post_office'] = $request->post_office;
    $data['city'] = $request->city;
    $data['policy'] = $request->policy;
    $data['infermation'] = $request->infermation;
    
    $result = $this->admin->insertdatagetid('panapplication', $data);
    if ($result>0) {
            $data1['user'] = Session::get('name');
            $data1['status'] = "debit";
            $data1['amount'] = $request->charges;
            $data1['agetid'] = Session::get('agetid');
            $data1['total'] =  $chekpay-$request->charges;
            $data1['details'] = "Pan New Application";
            $data1['detailsstatus'] = "Apply";
            $data1['utrstatus'] = random_int(100000, 999999);
            $data1['datetime'] = date('d/y/m h:i:s A');
            $this->admin->insertdata('wallets',$data1);
        
            return redirect()->back()->with('success', ' Record Successfully!');
        } else {
            return redirect()->back()->with('success', 'Query Not Run!');
        }
        
}else {
            return redirect()->back()->with("success", "you don't have sufficient balance");
        }
    }
    
    


    public function Receipts(){
        $fund = Session::get('fund');
        return view('web.pan-recipts',['fund' => $fund]);
    }

    public function panno2(){
        $fund = Session::get('fund');
        return view('web.pan-no2',['fund' => $fund]);
    }


 public function kycStore(Request $request){
    $check = DB::table('kycs')->where('userid',Session::get('agetid'))->first();
       if(empty($check)){
        $kyc = new Kyc;
        $kyc->userid = Session::get('agetid');
        $kyc->name = $request->name;
        $kyc->email = $request->email;
        $kyc->phoneNo = $request->phoneNo;
        $kyc->dob = $request->dob;
        $kyc->aadhaar = $request->aadhaar;
        $kyc->pan = $request->pan;
        $kyc->country = $request->country;
        $kyc->state = $request->state;
        $kyc->town = $request->town;
        $kyc->pin = $request->pin;
        $kyc->countryCode = $request->countryCode;
        $kyc->flat = $request->flat;
        $kyc->building = $request->building;
        $kyc->street = $request->street;
        $kyc->area = $request->area;
        $kyc->aadhaarFront = $request->aadhaarFront;
        $kyc->aadhaarBack = $request->aadhaarBack;
        $kyc->panFront = $request->panFront;
        $kyc->shopFront = $request->shopFront;
        $kyc->agentLive = $request->agentLive;

        if (request()->hasFile('aadhaarFront')) {
            $image = $request->file('aadhaarFront');
            $images = "thumbnail1".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->aadhaarFront = $images;
        }

        if (request()->hasFile('aadhaarBack')) {
            $image = $request->file('aadhaarBack');
            $images = "thumbnail2".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->aadhaarBack = $images;
        }

        if (request()->hasFile('panCardImage')) {
            $image = $request->file('panCardImage');
            $images = "thumbnail3".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->panFront = $images;
        }

        if (request()->hasFile('shopFront')) {
            $image = $request->file('shopFront');
            $images = "thumbnail4".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->shopFront = $images;
        }

        if (request()->hasFile('agentFront')){
            $image = $request->file('agentFront');
            $images = "thumbnail5".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->agentLive = $images;
        }
        if($kyc->save()){
            return redirect()->route('kyc')->with('success','Your Kyc details have been saved Successfully.');
        } else {
            return redirect()->route('kyc')->with('success','Query Not Run...');
        }
     } else {
        $kyc = Kyc::where('userid',Session::get('agetid'))->first();
       // dd($kyc); die;
        $kyc->userid = Session::get('agetid');
        $kyc->name = $request->name;
        $kyc->email = $request->email;
        $kyc->phoneNo = $request->phoneNo;
        $kyc->dob = $request->dob;
        $kyc->aadhaar = $request->aadhaar;
        $kyc->pan = $request->pan;
        $kyc->country = $request->country;
        $kyc->state = $request->state;
        $kyc->town = $request->town;
        $kyc->pin = $request->pin;
        $kyc->countryCode = $request->countryCode;
        $kyc->flat = $request->flat;
        $kyc->building = $request->building;
        $kyc->street = $request->street;
        $kyc->area = $request->area;
        $kyc->aadhaarFront = $request->aadhaarFront;
        $kyc->aadhaarBack = $request->aadhaarBack;
        $kyc->panFront = $request->panFront;
        $kyc->shopFront = $request->shopFront;
        $kyc->agentLive = $request->agentLive;
        if (request()->hasFile('aadhaarFront')) {
            $image = $request->file('aadhaarFront');
            $images = "thumbnail1".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->aadhaarFront = $images;
        }
        if (request()->hasFile('aadhaarBack')) {
            $image = $request->file('aadhaarBack');
            $images = "thumbnail2".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->aadhaarBack = $images;
        }
        if (request()->hasFile('panCardImage')) {
            $image = $request->file('panCardImage');
            $images = "thumbnail3".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->panFront = $images;
        }
        if (request()->hasFile('shopFront')) {
            $image = $request->file('shopFront');
            $images = "thumbnail4".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->shopFront = $images;
        }
        if (request()->hasFile('agentFront')){
            $image = $request->file('agentFront');
            $images = "thumbnail5".time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $images);
            $kyc->agentLive = $images;
        }
        if($kyc->save()){
            return redirect()->route('kyc')->with('success','Your Kyc details have been saved Successfully.');
        } else {
            return redirect()->route('kyc')->with('success','Query Not Run...');
        }
     }
    }
    

    public function Discripency(){
        $fund = Session::get('fund');
        return view('web.discripency',['fund' => $fund]);
    }
    
    
    
    public function DiscrepencyInsert(Request $request){
       $chekpay = $this->chekWallet(Session::get('agetid'));
        if($chekpay>=$request->charges){
            $data['charges'] = $request->charges;
            $data['ApplicationType'] = $request->ApplicationType;
            $data['Acknowledgement'] = $request->Acknowledgement;
            $data['ApplicantName'] = $request->ApplicantName;
            $data['dateofbirth'] = $request->dateofbirth;
            $data['fathername'] = $request->fathername;
            $data['customermobile'] = $request->customermobile;
            $data['marginamount'] = $request->marginamount;
            $data['currenrdate'] = date("Y-m-d H:i:s");
                    
        
         if (request()->hasFile('customerpassport')){
            $image = $request->file('customerpassport');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image->move($destinationPath, $name);
            $data['customerpassport'] = $name;
         }
         
          if (request()->hasFile('acknowledgementslip')) {
                $image1 = $request->file('acknowledgementslip');
                $name1 = time().'1'.'.'.$image1->getClientOriginalExtension();
                $destinationPath1 = public_path('/admin/images');
                $image1->move($destinationPath1, $name1);
                $data['acknowledgementslip'] = $name1;
           }
           
          if (request()->hasFile('customerpancard')) {
            $image2 = $request->file('customerpancard');
            $name2 = time().'2'.'.'.$image2->getClientOriginalExtension();
            $destinationPath1 = public_path('/admin/images');
            $image2->move($destinationPath1, $name2);
            $data['customerpancard'] = $name2;
         }
          
        
          if (request()->hasFile('clarificationletter')) {
            $image3 = $request->file('clarificationletter');
            $name3 = time().'3'.'.'.$image3->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images');
            $image3->move($destinationPath, $name3);
            $data['clarificationletter'] = $name3;
         }
         
         $data['terms'] = $request->terms;
         $data['info'] = $request->info;
        $result = $this->admin->insertdata('discrepency',$data);
        if($result==1){
            
            
            $data1['user'] = Session::get('name');
            $data1['status'] = "debit";
            $data1['amount'] = $request->charges;
            $data1['agetid'] = Session::get('agetid');
            $data1['total'] =  $chekpay-$request->charges;
            $data1['details'] = "Solved NSDL Discrepancy";
            $data1['detailsstatus'] = "Apply";
            $data1['utrstatus'] = random_int(100000, 999999);
            $data1['datetime'] = date('d/y/m h:i:s A');
            $this->admin->insertdata('wallets',$data1);
           return redirect()->back()->with("success", "Your Data Successfull Save!");
        } else {
            return redirect()->back()->with("success", "Query Not Run!");
        }
        }else {
            return redirect()->back()->with("success", "you don't have sufficient balance");
        }
        
    }
    
    
    

    public function PanNoSearch(){
        $fund = Session::get('fund');
        return view('web.pan-searching',['fund' => $fund]);
    }


    public function panByAadhaar(Request $request){
        
    $chekpay = $this->chekWallet(Session::get('agetid'));
        if($chekpay>=$request->aadhaarCharges){
        
        $find = Pan_by_aadhaar::where('aadhaarNo',$request->adharnumber)->first();
        if(empty($find)){
                $aadhaar = new Pan_by_aadhaar;
                $aadhaar->aadhaarNo = $request->adharnumber;
                $aadhaar->appName = $request->applicantName;
                $aadhaar->save();
                return redirect()->route('pan-searching');
        } else{
            if($find->status=="Success"){
                
            $data['user'] = Session::get('name');
            $data['status'] = "debit";
            $data['amount'] = $request->aadhaarCharges;
            $data['agetid'] = Session::get('agetid');
            $data['total'] = $chekpay-$request->aadhaarCharges;
            $data['details'] = "By Aadhaar No";
            $data['detailsstatus'] = "Download";
            $data['utrstatus'] = random_int(100000, 999999);
            $data['datetime'] = date('d/y/m h:i:s A');
            $this->admin->insertdata('wallets',$data);
                session::Put('status','done');
                Session::Put('panno',$find->panno);
                Session::Put('applicantName',$request->applicantName);
                Session::Put('aadhaarCharges',$request->aadhaarCharges);
                return redirect('receipts');
            } else {
                session::put('status','false');
                Session::Put('panno',$find->panno);
                return redirect('receipts');
            }
        }
        } else {
            return redirect()->back()->with("success", "you don't have sufficient balance");
        }

    }

    public function Download(){
        $pdf = PDF::loadView('web.pdfview');
        return $pdf->download('web.pdfview');
        return view('web.pdfview');
    }

    

    public function Package(){
        $fund = Session::get('fund');
        return view('web.package',['fund' => $fund]);
    }




    public function Pricing(){
        $result['package'] = DB::table('package')->get();
        $result['ourservices'] =  DB::table('ourservices')->get();
       return view('web.pricing',$result)->with('i');
    }


    public function PurchasePackage(Request $request){
        //dd($request->all());
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
            'order' => rand(),
            'user' => Session::get('name'),
            'mobile_number' => Session::get('mobile'),
            'email' => Session::get('email'),
            'amount' => $request->packageprice,
            'callback_url' => route('paytm.callback'),
          ]);

          Session::put('userid',$request->userid);
          Session::put('amount',$request->packageprice);
          Session::put('packagename',$request->packagename);
          Session::put('packagid',$request->packagid);

          return $payment->receive();
    }
    public function Purchase(Request $request){
        $data['status'] = "1";
        $data['amount'] = $request->packageprice;
        $data['packagename'] = $request->packagename;
        $data['packagid'] = $request->packagid;
        $result = DB::table('agents')->where('id',$request->userid)->update($data);
        if($result==1){
            return redirect('/deshbord')->with('success','Payment Has been Successfully Received');
        } else {
            return redirect('/')->with('success','Payment Has been failed!');
        }
        //echo "<pre>"; print_r($request->all());
    }
// Change password

    public function Changepassword(Request $request){
        $check = DB::table('agents')->where('password',$request->cpassword)->first();
        //echo "<pre>"; print_r($check); die;
        if(!empty($check)){
            if($request->password==$request->password){
                $data['password'] = $request->password;
                $result = $this->admin->UpdateItem('agents',$check->id,$data);
                if($result==1){
                    return response()->json(['status'=>200,'msg'=>'Password Successfully Change!']);
                }
            } else {
                return response()->json(['status'=>201,'msg'=>'query not Run']);
            }
        } else {
            return response()->json(['status'=>201,'msg'=>'Please Enter Valid Password!']);
        }
    }

    // End password

    //video
    public function Video(){
        return view('web.video-tutorial');
    }
     public function gazzletPanApplication(){
        return view('web.gazzletPanApplication');
    }
     public function AccountStatement(){
        return view('web.AccountStatement');
    }

    
        public function newPanCard(){
        return view('web.newPanCard');
    }
    
         public function panNewApplication() {
        return view('web.panNewApplication');
    }

    // End  video

    public function GenrateQrcode($price){
       $qrcode =  QrCode::size(250)->generate("upi://pay?pa=8929045571@okbizaxis&pn='SANDHYA PAN INDIA'&am=".$price."&tn=".Session::get('mobile')."");
       echo $qrcode;
    }

    public function PaymetRequest(Request $request){
        $data['amount'] = $request->amount;
        $data['details'] = "Add Fund";
        $data['utrstatus'] = $request->utrbank;
        $data['agetid'] = Session::get('agetid');
        $data['user'] = Session::get('name');
        $data['datetime'] = date("d/m/Y h:i:sa");
        $data['detailsstatus'] = "offline";
        $total = $this->chekWallet(Session::get('agetid'));
        $data['total'] = $total+$request->amount;
        $data['status'] = 0;
        $result = $this->admin->insertdata('wallets',$data);
        if($result==1){
            return response()->json(['status'=>200,'msg'=>'Successful! Add']);
        } else {
            return response()->json(['status'=>201,'msg'=>'Query Not Run!']);
        }
    }


public function panByDetails(Request $request){
       $chekpay = $this->chekWallet(Session::get('agetid'));
        if($chekpay>=$request->detailCharges){
        $details = new Pan_by_detail;
        $details->appName = $request->applicantsName;
        $details->fatherName = $request->fatherName;
        $details->dob = $request->dob;
        $details->pincode = $request->pincode;
        if($details->save()){
            $data['user'] = Session::get('name');
            $data['status'] = "debit";
            $data['amount'] = $request->detailCharges;
            $data['agetid'] = Session::get('agetid');
            $data['total'] =  $chekpay-$request->detailCharges;
            $data['details'] = "By Details";
            $data['detailsstatus'] = "Download";
            $data['utrstatus'] = random_int(100000, 999999);
            $data['download'] = $details->id;
            $data['datetime'] = date('d/y/m h:i:s A');
            $this->admin->insertdata('wallets',$data);
            
            return redirect()->route('pan-searching')->with('success','Your details have been saved Successfully.');
        } else {
            return redirect()->route('pan-searching')->with('success','Query not Run.');
        }
         } else {
            return redirect()->route('pan-searching')->with('success','You Have No Balance.');
         }

    }

    
    protected  function chekWallet($userid){
        $debit = DB::table('wallets')->where(['agetid'=>$userid,'status'=>'debit'])->sum('amount');
        $credit = DB::table('wallets')->where(['agetid'=>$userid,'status'=>'credit'])->sum('amount');
        return $credit-$debit;
    }

    public function GetData($id=""){
        $wallets = DB::table('wallets')->where('utrstatus',$id)->first();
        if(!empty($wallets)){
            return response()->json(['status'=>200,'msg'=>'UTR id Already Used!']);
        } else {
            return response()->json(['status'=>201,'msg'=>'Query Not Run!']);
        }
    }
    
    
    
    
    
    
    

}
