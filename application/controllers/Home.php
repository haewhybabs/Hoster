<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model(['Host_model']);
        $this->load->library('cart');
        $this->load->library('email');
        $this->load->library('paystack');
        $this->load->library('flutterwave');
        $this->load->library('control');
    }

    public function index()
    {
      $data['get_plan']=$this->Host_model->get_host_category();
     
      $this->load->view('index',$data);   
    }
    public function domain_search(){
        $this->load->view('domain');
    }
    public function host_section($id){
        $this->load->view('host');
    }
    public function load(){
        $category=$this->input->post('category');
        $pre='';
        $pre.=

          '
                    <form action="'.base_url().'Home/get_details" method="POST">
                      <div class="form-group">
                        <label for="name">Domain Name</label>
                        <input type="text" name="d_name" class="form-control" id="d_name" placeholder="example.com" required>
                        <input type="hidden" name="category" value="'.$category.'"
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

        ';
        echo $pre;
    }

    public function get_details(){
        $d_name=$this->input->post('d_name');
        $category=$this->input->post('category');
        $money=$this->Host_model->get_money($category);


       
        $money_get=$money->price;
        $data=array(
            'domain_name'=>$d_name,
            'category'=>$category,
            'money'=>$money_get
        );


        $this->load->view('checkout',$data);

    }
    public function payment(){

        $track=uniqid(rand());
        $char=$this->input->post('money');
        $charge= $char * 100;
        $result = array();
       
        $callback=base_url().'Home/st_verify';

        if($this->control->auth()==false){
        $email=$this->input->post('email');


             $data=array('success'=> false, 'message'=>array());

              
     
                $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
                 $this->form_validation->set_rules('mobile', 'First Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_users.email]',
                      array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                      )

                     );
                
                $this->form_validation->set_rules('street_add', 'Street', 'required');
                $this->form_validation->set_rules('country', 'Country', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required|matches[password]');
                $this->form_validation->set_error_delimiters('<p class="text-danger" style="color:red;">', '</p>');


                if ($this->form_validation->run()) {

                    $insert=array(
                            'first_name'=>$this->input->post('first_name'),
                            'last_name'=>$this->input->post('last_name'),
                            'mobile'=>$this->input->post('mobile'),
                            'email'=>$this->input->post('email'),
                            'street_add'=>$this->input->post('street_add'),
                            'country'=>$this->input->post('country'),
                            'state'=>$this->input->post('state'),
                            'city'=>$this->input->post('city'),
                            'password'=>$this->input->post('password'),

                        );
                        //Insert into user table
                        $this->Host_model->insert_post($insert);
                        $user=$this->Host_model->get_user_id($this->input->post('email'));

                        
                        $sess_array = array(
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'email' => $user->email,
                            'user_id' => $user->user_id,
                        );

                        $this->session->set_userdata('logged', $sess_array);

                        

                         //insert into transaction status
                        $transaction=array(
                            'user_id'=>$user->user_id,
                            'payment_status'=>'0',
                            'reference'=>$track,
                            'category_id'=>$this->input->post('category_id'),
                            'domain_name'=>$this->input->post('d_name')
                        );
                        $this->Host_model->save_trans($transaction);
                   




                    if($this->input->post('optradio')==1){
                        //Check for Paystack        
                                                
                       $this->paystack->initialize($track,$email,$callback,$charge);

                    }
                    elseif($this->input->post('optradio')==2){
                        //check for flutterwave


                        //secret key
                        $PBFPubKey ="FLWPUBK-d74c4e96806d18dde285513857f61092-X";
                        $currency="NGN";
                        $redirect_url==base_url().'Home/f_verify';
                        $amount=$char;

                        $this->flutterwave->initialize($email,$amount,$redirect_url,$track,$PBFPubKey,$currency);
                        

                    }
                    elseif($this->input->post('optradio')==3){
                        //Get for PayPal
                    }

                   



                }
                else{

                    $data=array(
                        'domain_name'=>$this->input->post('d_name'),
                        'category'=>$this->input->post('category_id'),
                        'money'=>$this->input->post('money')
                    );
                   //  echo validation_errors();
                    $this->load->view('checkout',$data);

              
                }


            }
            else{
                $email=$this->session->userdata['logged']['email'];

                    if($this->input->post('optradio')==1){
                        //Check for Paystack        
                                                
                       $this->paystack->initialize($track,$email,$callback,$charge);

                    }
                    elseif($this->input->post('optradio')==2){
                        //check for flutterwave


                        //secret key
                        $PBFPubKey ="FLWPUBK-d74c4e96806d18dde285513857f61092-X";
                        $currency="NGN";
                        $redirect_url=base_url().'Home/f_verify';
                        $amount=$char;

                        $this->flutterwave->initialize($email,$amount,$redirect_url,$track,$PBFPubKey,$currency);
                        

                    }
                    elseif($this->input->post('optradio')==3){
                      
                    }

            }
         

        
    }
    public function st_verify(){
            $curl = curl_init();
            $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
            if(!$reference){
              die('No reference supplied');
            }

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $_GET['reference'],
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_test_6489daa61afb9289aaf7b5af93d8c6a90599d26a",
                "cache-control: no-cache"
              ],
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            if($err){
                // there was an error contacting the Paystack API
              die('Curl returned error: ' . $err);
            }

            $tranx = json_decode($response);

            if(!$tranx->status){
              // there was an error from the API
              die('API returned error: ' . $tranx->message);
            }

            if('success' == $tranx->data->status){
              $user_id=$this->session->userdata['logged']['user_id'];
              $email=$this->session->userdata['logged']['email'];
              $reference=$_GET['reference'];
              $this->Host_model->update_trans_status($user_id,$reference);
              $get_details=$this->Host_model->trans_details($reference);
              if($get_details->payment_status=='1'){

                    $config = Array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'smtp.office365.com',
                    'smtp_port' => '587',
                    'smtp_user' => 'support@xownsolutions.com',
                    'smtp_pass' => 'qwas_098@2@',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'smtp_crypto'=>'tls',
                    'newline'   => "\r\n"
                );
                $this->email->initialize($config);

             
                $this->email->from('support@xownsolutions.com', 'Xhost Support');
                $this->email->to($email);
                 $this->email->cc('support@xownsolutions.com');

                $message='<p> Dear'.$get_details->first_name.'</p>
                          <p> Thank You for Patronizing Xhost for your hosting plan.</P>
                          <p> Your Order for '.$get_details->disk_space_id.' GB hosting plan for '.$get_details->domain_name.' was successful</p>
                           
                ';

                $this->email->subject('Transaction Successful');
                $this->email->message($message);


                $this->email->send();
              }



              $this->session->set_flashdata('success', 'Transaction is successful');
              redirect('Home');
            }
    }

    public function f_verify(){

        if (isset($_GET['txref'])) {
            

            $ref = $_GET['txref'];
             $get_details=$this->Host_model->trans_details($ref);
            $amount = $get_details->price; //Correct Amount from Server
            $currency = "NGN"; //Correct Currency from Server

            $query = array(
                "SECKEY" => "FLWSECK-155fa8add7f200b44166d9a5256701c6-X",
                "txref" => $ref
            );

            $data_string = json_encode($query);
                    
            $ch = curl_init('https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify');                                                                      
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $response = curl_exec($ch);

            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $header = substr($response, 0, $header_size);
            $body = substr($response, $header_size);

            curl_close($ch);

            $resp = json_decode($response, true);

            $paymentStatus = $resp['data']['status'];
            $chargeResponsecode = $resp['data']['chargecode'];
            $chargeAmount = $resp['data']['amount'];
            $chargeCurrency = $resp['data']['currency'];

            if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
              // transaction was successful...
                 // please check other things like whether you already gave value for this ref
              // if the email matches the customer who owns the product etc
              //Give Value and return to Success page
              $user_id=$this->session->userdata['logged']['user_id'];
              $email=$this->session->userdata['logged']['email'];
              $reference=$ref;
              $this->Host_model->update_trans_status($user_id,$reference);
             // $get_details=$this->Host_model->trans_details($reference);
              if($get_details->payment_status=='1'){

                    $config = Array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'smtp.office365.com',
                    'smtp_port' => '587',
                    'smtp_user' => 'support@xownsolutions.com',
                    'smtp_pass' => 'qwas_098@2@',
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'smtp_crypto'=>'tls',
                    'newline'   => "\r\n"
                );
                $this->email->initialize($config);

             
                $this->email->from('support@xownsolutions.com', 'Xhost Support');
                $this->email->to($email);
                 $this->email->cc('support@xownsolutions.com');

                $message='<p> Dear'.$get_details->first_name.'</p>
                          <p> Thank You for Patronizing Xhost for your hosting plan.</P>
                          <p> Your Order for '.$get_details->disk_space_id.' GB hosting plan for '.$get_details->domain_name.' was successful</p>
                           
                ';

                $this->email->subject('Transaction Successful');
                $this->email->message($message);


                $this->email->send();
              }



              $this->session->set_flashdata('success', 'Your Order for '.$get_details->disk_space_id.' GB hosting plan for '.$get_details->domain_name.' was successful');
              redirect('Home');



            } else {
                //Dont Give Value and return to Failure page
            }
        }
            else {
          die('No reference supplied');
        }


    }
    public function testing(){
        

    }

}
//'callback_url'