<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerPackageController;
use App\Http\Controllers\SellerPackageController;
use App\Http\Controllers\WalletController;
use Illuminate\Http\Request;
use App\Models\CombinedOrder;
use App\Models\CustomerPackage;
use App\Models\Order;
use App\Models\Product;
use App\Models\SellerPackage;
use Session;
use Redirect;

class M1paymentController extends Controller
{

    public function pay()
    {
        // Creating an environment
        $token  = null;
        $desc   = '';

        if (get_setting('m1_sandbox') == 1) {
            $url    = 'https://keycloak.m1pay.com.my/auth/realms/master/protocol/openid-connect/token';
            $token  = gettokenm1payment($url);
        }
        else {
            $url    = 'https://keycloak.m1pay.com.my/auth/realms/m1pay-users/protocol/openid-connect/token';
            $token  = gettokenm1payment($url);
        }

        $token = "Bearer ".$token->access_token;

        if(Session::has('payment_type')) {
            if(Session::get('payment_type') == 'cart_payment') {
                $combined_order = CombinedOrder::findOrFail(Session::get('combined_order_id'));
                $order   = Order::where('combined_order_id',Session::get('combined_order_id'))->first();
                $product = Product::join('carts','carts.product_id','products.id')
                            ->where('carts.temp_user_id',Session::get('temp_user_id'))
                            ->get();
                $amount  = $combined_order->grand_total;
            }
            elseif (Session::get('payment_type') == 'wallet_payment') {
                $amount = Session::get('payment_data')['amount'];
            }
            elseif (Session::get('payment_type') == 'customer_package_payment') {
                $customer_package = CustomerPackage::findOrFail(Session::get('payment_data')['customer_package_id']);
                $amount = $customer_package->amount;
            }
            elseif (Session::get('payment_type') == 'seller_package_payment') {
                $seller_package = SellerPackage::findOrFail(Session::get('payment_data')['seller_package_id']);
                $amount = $seller_package->amount;
            }
        }
        $detail   = json_decode($order['shipping_address']);


        $description = $order['code'];




        $signdata = $description.'|'.$amount.'|'.$order['code'].'|'.$order['code'].'|MYR|'.$detail->email.'|41012618';
        $sign = str_replace(' ','',getsignm1payment($signdata));
        $body =[
                "transactionAmount"=>$amount,
                "merchantId"=>env('M1_CLIENT_ID'),
                "transactionCurrency"=>"MYR",
                "merchantOrderNo"=>$order['code'],
                "exchangeOrderNo"=>$order['code'],
                "productDescription"=>$description,
                "fpxBank"=>1,
                "chanel"=>"CARD_PAYMENT",
                "emailAddress"=>$detail->email,
                "signedData"=>$sign,
                "phoneNumber"=>$detail->phone,
                "skipConfirmation"=>true
        ];


        $body = json_encode($body);
        if (get_setting('m1_sandbox') == 1) {
            $link    = 'https://gateway-uat.m1pay.com.my/m1paywall/api/transaction';
        }
        else {
            $link    = 'https://gateway.m1pay.com.my/wall/api/transaction';
        }

       try {
            // Call API with your client and get a response for your call
            $response = transactionm1($link,$token,$body);
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            //print $sign;
            return Redirect::to($response);
        }catch (\Exception $ex) {
            flash(translate($ex->getmessage()))->error();
            //return back();
            print $ex->getmessage();
        }









    }


}
