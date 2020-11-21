<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Booking;
use App\Customer;
use Mail;
use Session;

class PaymentController extends Controller
{
 
    public $gateway;
 
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
 
    public function index()
    {
        return view('payment');
    }
 
    public function charge($total,$id,Request $request)
    {
        // dd($total);
        try {
            $response = $this->gateway->purchase(array(
                'amount' => (int)$total,
                'currency' => 'THB',
                'returnUrl' => url('paymentsuccess/'.$id.''),
                'cancelUrl' => url('paymenterror'),
            ))->send();
        
            if ($response->isRedirect()) {
                $response->redirect(); // this will automatically forward the customer
            } else {
                // not successful
                return $response->getMessage();
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
        
    }
 
    public function payment_success($id,Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
         
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
                // dd($arr_body);
                $data  = array(
                    'booking'   => Booking::where('booking_id',$id)->first(),
                );
                Booking::where('booking_id',$id)->update(['status_payment'=>1,'payment_id'=>$arr_body['id']]);
                $user = Customer::where('customer_id',Session::get('customer_id'))->first();
                Mail::send('email.sendbooking',$data,function($message) use($user){
                    $message->to($user->email)
                            ->subject('ยืนยันการจองบริการจากเว็บ beautygowhere')
                            ->from('58030218@kmail.ac.th');
                });
         
                return redirect('confirm_order/'.$id.'');
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
 
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
 
}