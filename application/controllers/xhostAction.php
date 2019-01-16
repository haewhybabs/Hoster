<?php
defined('BASEPATH') or exit('No direct script access allowed');

class xhostAction extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //$this->load->model(['Welcome_model']);
    }

    public function index()
    {
      $this->load->view('index');   
    }
    public function GetNameServer(){
    // $data = array(
    // "action"        => "GetNameservers",
    // "token"             => "LQVCPr9r1BlVuo0fdOmBuJo0",
    // "authemail"         => "partners@xownsolutions.com",
    // "sld"       => "haytick",
    // "tld"       => "com"

    //  );




    $data = array(
    "action"        => "RequestDelete",
    "token"             => "LQVCPr9r1BlVuo0fdOmBuJo0",
    "authemail"         => "partners@xownsolutions.com",
    "sld"       => "facebookioo",
    "tld"       => "com.ng",
    // "regperiod"     => 1,
    // "dnsmanagement" => 1,
    // "emailforwarding"   => 1,
    // "idprotection"  => 1,
    // "firstname"         => "John",
    // "lastname"          => "Doe",
    // "companyname"   => "Company Name",
    // "address1"          => "Address 1",
    // "address2"          => "Address 2",
    // "city"      => "City",
    // "state"             => "ST",
    // "country"           => "IT",
    // "postcode"          => "12345",
    // "phonenumber"   => "4455677888990",
    // "email"             => "user@domainexample.com",
    // "adminfirstname"    => "John",
    // "adminlastname" => "Doe",
    // "admincompanyname"  => "Company Name",
    // "adminaddress1" => "Address 1",
    // "adminaddress2" => "Address 2",
    // "admincity"     => "City",
    // "adminstate"    => "ST",
    // "admincountry"  => "IT",
    // "adminpostcode" => "12345",
    // "adminphonenumber"  => "4455677888990",
    // "adminemail"    => "admin@domainexample.com",
    "domainfields"      => base64_encode(serialize(array_values(array())
)));

      $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, "https://www.whogohost.com/host/domainsResellerAPI/api.php");
  // // curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  //   //curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
  //   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  //   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  //   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_HEADER, false);
  //  // curl_setopt($ch, CURLOPT_SSLVERSION, 3);
  //   //curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
  //   // $result = curl_exec($ch);
  //   // $res    = json_decode($result, true);
  //   // print_r($res);
  //   // curl_close($ch);

  //   if(curl_exec($ch) === false)
  //   {
  //       echo 'Curl error: ' . curl_error($ch);
  //   }
  //   else
  //   {
  //       echo 'Operation completed without any errors';
  //   }

  //   // Close handle
  //   curl_close($ch);

     // curl_setopt_array($ch, array(
     //          CURLOPT_URL => "https://www.whogohost.com/host/domainsResellerAPI/api.php",
     //          CURLOPT_RETURNTRANSFER => true,
     //          CURLOPT_CUSTOMREQUEST => "POST",
     //           CURLOPT_SSL_VERIFYPEER=>false,
     //          CURLOPT_POSTFIELDS => json_encode($data),
     //          CURLOPT_HTTPHEADER => [
     //            "content-type: application/json",
     //            "cache-control: no-cache"
     //          ],
     //        ));

     //        $response = curl_exec($ch);
     //        $err = curl_error($ch);
    curl_setopt($ch, CURLOPT_URL, "https://www.whogohost.com/host/domainsResellerAPI/api.php");
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    // curl_setopt($ch, CURLOPT_SSLVERSION, 3);
    // curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
    $result = curl_exec($ch);
    $res    = json_decode($result, true);
    print_r($res);
    curl_close($ch);


             






    }
    public function search_domain(){
       $data = array(
        "key"        => "X2JONRGLP3A6KWQE",
        "command"             => "Search",
        "domain0"         => "haytick.com",
        );

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://api.dynadot.com/api2.html");
      curl_setopt($ch, CURLOPT_TIMEOUT, 30);
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, false);
      // curl_setopt($ch, CURLOPT_SSLVERSION, 3);
      // curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
      $result = curl_exec($ch);
      $res    = json_decode($result, true);
      print_r($res);
      curl_close($ch);

    }
}