<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class ApiController extends Controller
{
    public function setEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'errors' => $validator->errors()
                ],422);
        }

        session(['vms-email' => $request->email]);
        return session('vms-email');

    }


    public function execute(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('PayPalClientID'),
                env('PayPalClientSecret')
            )
        );

        $paymentID = $request->input('paymentID');
        $payment = \PayPal\Api\Payment::get($paymentID, $apiContext);

        $execution = new \PayPal\Api\PaymentExecution();
        $execution->setPayerId($request->input('payerID'));
        $buy = $request->email;

        try {
            $result = $payment->execute($execution, $apiContext);


            Log::info($buy . 'buy vms!!!');
            Mail::send('mail.buy', ['name' => $buy], function ($message) use ($buy) {
                $message->to('semakasyrok1@gmail.com')->subject('New VMS bought');
                $message->from('info@simon-svirkov.com', 'From Simon Svirkov');
            });
        } catch (Exception $ex) {
            Log::info("Error!!! when buy {$request->email}, at: " . date('Y-m-d H:i:s') );
            echo $ex;
            exit(1);
        }

        return $result;
    }



    public function create()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                env('PayPalClientID'),
                env('PayPalClientSecret')
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Video Management System')
            ->setCurrency('RUB')
            ->setQuantity(1)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice(2499);


        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        $amount = new Amount();
        $amount->setCurrency("RUB")
            ->setTotal(2499);


        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $baseUrl = 'http://mysite';
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
            ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));


        $request = clone $payment;

        try {
            $payment->create($apiContext);


        } catch (Exception $ex) {
            Log::info(env('PayPalClientID') . '===================');

            exit(1);
        }

        return $payment;
    }


}
