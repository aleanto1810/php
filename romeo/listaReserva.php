<?php
if(isset($_GET["mensaje"])){
    echo "<script>alert(".$_GET["mensaje"].");location.href = 'listaReservada.php</script>";
};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body class="row " style="background-image: url( )"  width="720" height="720">
       
        <script src="js/jquery-3.2.0.min.js"></script>
        <script>
        $(document).ready(function (event){
          
          $("#btnEliminar").click(function (){
              $("#txtAccion").val("Eliminar");
              $.ajax({
                  type: 'POST',
                  url: "proceso.php",
                  data: $("#formulario").serialize(),
                  success : function (data){
                      $("#respuesta").html(data);
                  }
              });
          });
          $("#btnListar").click(function (){
              $("#txtAccion").val("Listar");
              $.ajax({
                  type: 'POST',
                  url: "proceso.php",
                  data: $("#formulario").serialize(),
                  success : function (data){
                      $("#respuesta").html(data);
                  }
              });
          });
        });
        </script>
        <div class="row"  style="margin-top: 15px">
            <?php include ("/InicioMenu.php"); ?> 
        </div>
    <center>
        <form id="formulario" onsubmit="return formulario(this)">
             
            <div class="col-sm-offset-5"   style="margin-top: 50px">
                
                <table colspan="2" style="margin-right: 450px">
                    <tr>
                    <h1 style="color:black ; margin-right: 450px">Eliminar Reserva</h1>
                    </tr>
                    <tr>
                        <td class="control-label col-sm-2" style="color:black ; margin-top: 900px">Codigo: </td>
                        <td> 
                            <div class="form-horizontal">
                                <input type="text" name="txtCodigo" value="" /> 
                                <input type="button" value="Eliminar"  id="btnEliminar" class="btn btn-primary"/>

                            </div>
                        </td>




                    </tr>
                   
                    

                    </div></tr>
                    <tr>
                        <td><input type="button" value="Listar"  id="btnListar" class="btn btn-primary" style="margin-top: 50px "/></td>
                    </tr>
                     
                   
                </table>   
                     </div>
                   <center>
                       <input type="hidden" id="txtAccion" name="txtAccion" >
                       <div id="respuesta">
                           
                       </div> 
                    </center>
        </form>
        
    </center>





</body>
</html>
