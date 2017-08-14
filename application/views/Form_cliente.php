<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Formulario para personas</title>
<style>
#divprincipal{
margin:10px;


}

</style>
</head>
<body>
<h1>En este formulario se Registraran Personas</h1>
<div id="divprincipal">


<div class="row">
  <div class="col-sm-6">
    <div class="input-group form-group">
      <span class="input-group-addon">Nombre</span>
      <input class="form-control" name="txtnombre" id="txtnombre"/>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon">Apellido</span>
      <input class="form-control" name="txtapellido" id="txtapellido"/>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon">Cedula</span>
      <input class="form-control" name="txtcedula" id="txtcedula" />
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon">Direccion</span>
      <input class="form-control" name="txtdireccion" id="txtdireccion" />
    </div>
    <div>
      <button type="button" id="buttonsubmit" class="btn btn-success">Enviar</button>
    </div>
  </div>
</div>
</div>
<?php

 ?>
   <script src="<?php echo base_url();?>assets/js/archivo.js"></script>
</body>

</html>
