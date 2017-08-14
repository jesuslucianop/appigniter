$(document).ready(function(){


  $("#buttonsubmit").click(function(){
    alert("entro el button");
    var nombre = $("#txtnombre").val();
    var apellido = $("#txtapellido").val();
    var direccion = $("#txtdireccion").val();
    var cedula = $("#txtcedula").val();

    //ajax
    $.ajax({
      url:"<?php echo base_url();?>index.php/Cliente/index",
      type:'POST',
      data:{"nombre":nombre,"apellido":apellido,"direccion":direccion,"cedula":cedula},
      succes:function(){
alert("paso");

      },error:function(){
        console.error("fallo");


}
    })


  })
});
