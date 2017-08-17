<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cliente_model');


  }
  public function index()
  {
    $this->load->helper('url');
    $this->load->view('Form_cliente');

  }
  public function agregar()
  {
    $nombre = $this->input->post('nombre');
    $apellido= $this->input->post('apellido');
    $direccion= $this->input->post('direccion');
    $cedula= $this->input->post('cedula');

    $nuevo_Cliente=$this->Cliente_model->nuevo_Cliente(
$nombre,$apellido,$direccion,$cedula
    );

  }








}
