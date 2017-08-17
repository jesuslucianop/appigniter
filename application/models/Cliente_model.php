<?php
class Cliente_model extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }
    function nuevo_Cliente($nombre,$apellido,$direccion,$cedula)
    {
      $data = array('nombre' => $nombre,
      'apellido'=> $apellido,
      'direccion'=> $direccion,
      'cedula'=> $cedula,


     );

     $this->db->insert('clientes',$data);
    }









}




?>
