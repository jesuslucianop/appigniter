$(document).ready(function(){
  function limpiar()
  {
      $("#txtnombre").val("");
     $("#txtapellido").val("");
     $("#txtdireccion").val("");
     $("#txtcedula").val("");



  }

  $("#buttonsubmit").click(function(){
    alert("entro el button");
    var nombre = $("#txtnombre").val();
    var apellido = $("#txtapellido").val();
    var direccion = $("#txtdireccion").val();
    var cedula = $("#txtcedula").val();

    //ajax
    $.ajax({
      url:"http://localhost/appigniter/index.php/Cliente/agregar",
      type:'POST',
      data:{"nombre":nombre,"apellido":apellido,"direccion":direccion,"cedula":cedula},
      success:function(){
        alert("paso");
        limpiar();
      },error:function(){
        console.error("fallo");
        limpiar();

}
    })


  })
});
