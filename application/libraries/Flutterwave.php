

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Flutterwave
{

  
    public function index()
    { 
         
    }

    public function initialize($email,$amount,$redirect_url,$txref,$PBFPubKey,$currency){



         $curl = curl_init();     
              curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_CUSTOMREQUEST => "POST",
               CURLOPT_SSL_VERIFYPEER=>false,
              CURLOPT_POSTFIELDS => json_encode([
                'amount'=>$amount,
                'customer_email'=>$email,
                'currency'=>$currency,
                'txref'=>$txref,
                'PBFPubKey'=>$PBFPubKey,
                'redirect_url'=>$redirect_url,
               
              ]),
              CURLOPT_HTTPHEADER => [
                "content-type: application/json",
                "cache-control: no-cache"
              ],
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            if($err){
              // there was an error contacting the rave API
              die('Curl returned error: ' . $err);
            }

            $transaction = json_decode($response);

            if(!$transaction->data && !$transaction->data->link){
              // there was an error from the API
              print_r('API returned error: ' . $transaction->message);
            }

            // uncomment out this line if you want to redirect the user to the payment page
            print_r($transaction->data->message);


            // redirect to page so User can pay
            // uncomment this line to allow the user redirect to the payment page
              header('Location: ' . $transaction->data->link);

	}
}