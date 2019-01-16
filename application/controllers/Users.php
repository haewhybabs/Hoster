<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
        if($this->control->auth()==true){
            redirect('/');
        }
     $this->load->view('registration');
    }

    public function registration(){
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

                $data['success']=true;

                $password=$this->input->post('password');
                 $options = [
                    'cost' => 11,
                    ];
                $pass= password_hash($password, PASSWORD_BCRYPT, $options);


                $insert=array(
                        'first_name'=>$this->input->post('first_name'),
                        'last_name'=>$this->input->post('last_name'),
                        'mobile'=>$this->input->post('mobile'),
                        'email'=>$this->input->post('email'),
                        'street_add'=>$this->input->post('street_add'),
                        'country'=>$this->input->post('country'),
                        'state'=>$this->input->post('state'),
                        'city'=>$this->input->post('city'),
                        'password'=>$pass,

                    );
                    //Insert into user table
                    $this->Host_model->insert_post($insert);
                   // $user=$this->Host_model->get_user_id($this->input->post('email'));

                   
            }
            else{
                //echo validation_errors();
                foreach($_POST as $key=>$value){
                    $data['messages'][$key]=form_error($key);
                }
            }


            echo json_encode($data);
    }
    public function login(){
        if($this->control->auth()==true){
            redirect('/');
        }
        $this->load->view('login');
    }
    public function login_user(){
         $data=array('success'=> false, 'message'=>array());

        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters('<p class="text-danger" style="color:red;">', '</p>');


        if($this->form_validation->run()){

            $data['success']=true;
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $checkUser=$this->Host_model->checkuser($password,$email);
            if($checkUser){
                $sess_array = array(
                        'first_name' => $checkUser->first_name,
                        'last_name' => $checkUser->last_name,
                        'email' => $checkUser->email,
                        'user_id' => $checkUser->user_id,
                    );

                    $this->session->set_userdata('logged', $sess_array);

                    $data['users']=true;
            }
            else{
                $data['users']=false;

            }


        }
        else{

             foreach($_POST as $key=>$value){
                $data['messages'][$key]=form_error($key);
             }
        }
             echo json_encode($data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }


}