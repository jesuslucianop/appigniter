<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Formulario para personas</title>
</head>
<body>
<h1>En este formulario se Registraran Personas</h1>

<?php
     echo form_open('\Cliente\index');
     echo form_label('Nombre', 'nombre');
     echo form_input('nombre');echo '<br>';
     echo form_label('Sueldo', 'sueldo');
     echo form_input('sueldo');echo '<br>';
     echo form_submit('botonSubmit', 'Enviar');
     echo form_close();
 ?>
</body>

</html>
