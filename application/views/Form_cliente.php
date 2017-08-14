<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header_index.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Formulario para personas</title>

</head>
<body>
<h1>En este formulario se Registraran Personas</h1>
<form method="post" >
  
</form>
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

</body>

</html>
