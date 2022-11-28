<?php

namespace App\Http\Controllers;

use App\Models\paymentModel;
use Illuminate\Http\Request;
use App\Models\User;

class Shop extends Controller
{
    public function zarinpal(Request $request){
        // dd($request->all());


        try {

            $gateway = \Gateway::make('zarinpal');

            $gateway->setCallback(url('/bank/response')); // You can also change the callback
            $gateway->price($request->inp1)
                    // setShipmentPrice(10) // optional - just for paypal
                    // setProductName("My Product") // optional - just for paypal
                    ->ready();

            $refId =  $gateway->refId(); // شماره ارجاع بانک
            $transID = $gateway->transactionId(); // شماره تراکنش

            // در اینجا
            //  شماره تراکنش  بانک را با توجه به نوع ساختار دیتابیس تان
            //  در جداول مورد نیاز و بسته به نیاز سیستم تان
            // ذخیره کنید .

            return $gateway->redirect();

         } catch (\Exception $e) {

            echo $e->getMessage();
         }

            }


            public function response(){




        try {

            $gateway = \Gateway::verify();
            $trackingCode = $gateway->trackingCode();
            $refId = $gateway->refId();
            $cardNumber = $gateway->cardNumber();
            $price = $gateway->getPrice();
            if ($price == 20000) {
                $azer = 20;
            }elseif ($price == 45000) {
                $azer = 50;
            }elseif ($price == 85000) {
                $azer = 100;
            }elseif ($price == 800000) {
                $azer = 1000;
            }

            User::where('id' ,  session('userID'))->increment('charge', $azer);

            paymentModel::insert([
                'user_id' => session('userID'),
                'amount' => $azer,
                'track_code' => $trackingCode
            ]);

            // تراکنش با موفقیت سمت بانک تایید گردید
            // در این مرحله عملیات خرید کاربر را تکمیل میکنیم

            // dd('movafaq',$trackingCode,$refId,$cardNumber,$price);
            //burdan jarah shutiasan , bura jalsa yane okey de
            return redirect()->route('ana')->with('buy', 'hesabiyiz şarj olde ☻♥');
        // return view('welcome');
         } catch (\Larabookir\Gateway\Exceptions\RetryException $e) {

             // تراکنش قبلا سمت بانک تاییده شده است و
             // کاربر احتمالا صفحه را مجددا رفرش کرده است
             // لذا تنها فاکتور خرید قبل را مجدد به کاربر نمایش میدهیم

             echo $e->getMessage() . "<br>";
             //agar okey olmush olsa va bida reload vurasan
             echo ('gəlde1, hisab şarj olmade malesef');
             echo ('<button><a href="https://www.bombazer.com/anaSayfa" class="btn btn-warning">giri don</a></button>');

         } catch (\Exception $e) {

             // نمایش خطای بانک
             echo $e->getMessage();
             echo ('gəlde2, hisab şarj olmade , çixin birdə gəlin');
             echo ('<button><a href="https://www.bombazer.com/anaSayfa" class="btn btn-warning">giri don</a></button>');

         }

            }
}
