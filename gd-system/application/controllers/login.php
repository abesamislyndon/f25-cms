<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Login extends CI_Controller {

		 function __construct()
		 {
		   parent::__construct();

		 }

		 function index()
		 {
		 
		   $this->load->view('login');

		 }
 function logout()
  {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('login', 'refresh');
  }

}
