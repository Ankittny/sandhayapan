<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use PaytmWallet;
use Session;
use DB;

class PaytmController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function paytmPayment(Request $request){
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => rand(),
          'user' => Session::get('name'),
          'mobile_number' => Session::get('mobile'),
          'email' => Session::get('email'),
          'amount' => $request->amount,
          'callback_url' => route('paytm.callback'),
        ]);

        Session::put('status', $request->status);
        Session::put('amount', $request->amount);
        return $payment->receive();
    }


    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paytmCallback(Request $request)
    {
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response(); // To get raw response as array
        if($transaction->isSuccessful()){
            $data['status'] = "1";
            $data['amount'] = Session::get('amount');
            $data['packagename'] = Session::get('packagename');
            $data['packagid'] = Session::get('packagid');
            DB::table('agents')->where('id',Session::get('userid'))->update($data);
            ///Transaction Successful
            $wallet = new Wallet;
            $addwallet = $this->AddWallerts();
            //echo $addwallet; die;
            $new_width = (3/100) *Session::get('amount');
            $wallet->user = Session::get('name');
            $wallet->agetid = Session::get('agetid');
            $wallet->status = Session::get('status');
            $wallet->utrstatus = $response['BANKTXNID'];
            $wallet->detailsstatus = "online";
            $wallet->amount = Session::get('amount')-$new_width;
            $wallet->total = (Session::get('amount')-$new_width)+$addwallet;
            $wallet->datetime = date("d/m/Y h:i:sa");
            $wallet->save();
          return redirect('/deshbord')->with('success','Payment Has been Successfully Received');
        } else if($transaction->isFailed()){
          Session::flush();
          return redirect('/')->with('success','Payment Has been failed!');
        //   return view('paytm.paytm-fail');
        } else if($transaction->isOpen()){
          //Transaction Open/Processing
          Session::flush();
          return redirect('/logins')->with('success','Payment Has been failed!');
        //   return view('paytm.paytm-fail');
        }



        // $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        // $transaction->getOrderId(); // Get order id
        // $transaction->getTransactionId(); // Get transaction id
    }

    /**
     * Paytm Payment Page
     *
     * @return Object
     */
    public function paytmPurchase()
    {
        return view('paytm.payment-page');
    }



    public function AddWallerts(){
        $credit = Wallet::where(["agetid"=>Session::get('agetid'),'status'=>'credit'])->sum('amount');
        $dabit = Wallet::where(["agetid"=>Session::get('agetid'),'status'=>'debit'])->sum('amount');

        return $credit-$dabit;
    }
}
