<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login_view');
 }
 function logout(){
 	$this->session->unset_userdata('logged_out');
 	session_destroy();
 	$this->load->helper('url');
 	redirect('login','refresh');
 }
 
}
 
?>