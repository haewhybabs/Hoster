<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Control
{

  
    public function index()
    { 
         
    }

     public function auth(){
        $CI=& get_instance();

	      if ($CI->session->userdata('logged')==false){
	           return false;
	      }
	      if ($CI->session->userdata('logged')==true){
	       return true;
	      }
    }

}