<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
  public function index()
  {
    
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->view('Form_cliente');

  }








}
