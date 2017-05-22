<?php
if (isset($_GET["mensaje"])) {
    echo "<script>alert(" . $_GET["mensaje"] . ");</script>";
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body class="row " style="background-image: url('img/fondo cine.jpg') "  width="720" height="720">

        <script src="js/jquery-3.2.0.min.js"></script>
        
        <script>
            function validar() {
                var usuario = document.getElementById("txtUsuario").value;
                var contrasena = document.getElementById("txtContrasena").value;
                if (usuario == "claudio" && contrasena == "1234") {
                    location.href="listaReserva.php";
                }else{
                    alert('usuario o contraseña invalida');
                }
                
            }
        </script>
        <div class="row"  style="margin-top: 15px">
            <?php include ("./inicioMenu.php"); ?> 
            <form id="formulario" onsubmit="return formulario(this)">
                <div class="col-sm-offset-5"   style="margin-top: 50px">
				
				<table class="table-condensed" border="2">
                            <h2 style="color: #ffffff">Ingreso de Usuario</h2>
                            <tr>
                                <td style="color: #ffffff">Usuario:</td>
                                <td><input style="background-color: white" type="text" id="txtUsuario" value="" required/></td>
                            </tr>
                            <tr>
                                <td style="color: #ffffff">Contraseña:</td>
                                <td><input style="background-color: white" type="password" id="txtContrasena" value="" required></td>
                            </tr>
                            <tr>
                                <td><input type="button" class="btn btn-primary" value="Enviar" onclick="validar()"></td>
                            </tr>
                        </table>
                    
                </div> 
                <input type="hidden" id="txtAccion" name="txtAccion">

            </form>
            <div id="respuesta">

            </div>

        </div>


    </body>
</html>
