<?php
if(isset($_GET["mensaje"])){
    echo "<script>alert(".$_GET["mensaje"].");</script>";
};
?>
<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body class="row " style="background-image: url('img/fondo cine.jpg') "  width="720" height="720">
        <script src="js/jquery-3.2.0.min.js"></script>
        <script>
        $(document).ready(function (event){
          $("#btnReservar").click(function(){
              $("#txtAccion").val("Reservar");
              $.ajax({
                  type: 'POST',
                  url: "proceso.php",
                  data: $("#formulario").serialize(),
                  success: function (data){
                      $("#respuesta").html(data);
                  }
              });
          });
         
        });
        </script>
        <div class="row"  style="margin-top: 15px">
            <?php include ("./inicioMenu.php"); ?>
            <center>
                <form id="formulario" class="form-horizontal" style="margin-top: 20px">
                    <div class="form-group">
                     <center>
                        <table class="table-condensed" >
                                <tr >
                                <th colspan="2" style="color:white "  >
                                    <h1 style="margin-left: 100px">Reserva de Boletos</h1></th>
                            </tr>
                            <tr>
                                <td class="control-label col-sm-2" style="color: white">Rut: </td>
                                <td> 
                                    <div class="form-horizontal">
                                        <input type="text" name="txtRut" value="" required/> 
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="control-label col-sm-2" style="color: white">Fono: </td>
                                <td> 
                                    <div class="form-horizontal">
                                        <input type="number" name="txtFono" value="" required/> 
                                    </div>
                                </td>

                            </tr>
							<tr>
                                <td class="control-label col-sm-2" style="color: white">Sala: </td>
                                <td> 
                                    <div class="form-horizontal">
                                        <input type="number" name="txtSala" value="" required/> 
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="control-label col-sm-2" style="color: white">Adultos: </td>
                                <td> 
                                    <div class="form-horizontal">
                                        <input type="number" name="txtAdulto" value="" required/> 
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="control-label col-sm-2" style="color: white">Niños: </td>
                                <td> 
                                    <div class="form-horizontal">
                                        <input type="number" name="txtNinios" value="" required/>
                                    </div>

                                </td>
                            </tr>
                            <!--<tr>
                                <td class="control-label col-sm-2" style="color: white">Total:</td>
                            <div class="form-horizontal">
                                <td style="background-color: white" id="total" value=" "></td>
                                </div>
                            </tr>-->
							<tr>
                                <td class="control-label col-sm-2" style="color: white">Total:</td>
								 <div class="form-horizontal">
                                <td id="total"></td>
								</div>
                            </tr>
                            </tr>



                            <?php
                            include_once '/clases/DaoPelicula.php';
                            include_once '/clases/CL_Pelicula.php';
                            ?>
							<tr>
                                <td class="control-label col-sm-2" style="color: white">Pelicula</td>
                                <td>
                                    <?php
                                    $link = mysqli_connect("localhost", "root", "", "cine3");
                                    echo"<select id=cboPelicula class=form-control name=cboPelicula>";

                                    $sql = "SELECT codigo,titulo FROM pelicula";
                                    $result = mysqli_query($link, $sql);
                                    $i = 1;
                                    $j = 0;
                                    while ($row = mysqli_fetch_row($result)) {
                                        echo "<option value=" . $row[$j] . ">" . $row[$i] . "</option>\n";
                                    }
                                    echo "</select>";
                                    ?> 
                                </td>
                            </tr>


                            <!--<tr>

                                <td class="control-label col-sm-2" style="color: white"> Pelicula: </td>
                                <td>
                                    <div class="dropup">
                                         <select name="cboPelicula" id="cboPelicula">
										 
                                        <!?php
                                          $da = new DaoPelicula();
                                          
                                          
                                          foreach ( $da->SeleccionarTodo() as $row) {

                                            echo '<option value="'.$row['codigo'].'">'.$row['titulo'].'</option>';
                                     }?>

                                        </select>
                                    </div>

                                </td>
                            </tr>-->
							
                            <tr>
                                
                                <td colspan="2" >
                                    <input type="button" value="Reservar" id="btnReservar"  class="btn btn-primary" style="margin-left: 90px"/>

                                </td>
                            </tr>
                            <center>
                                
                            </center>
                            
                        </table>
                 </center>
                        
                    </div>

                    <input type="hidden" id="txtAccion" name="txtAccion">
                </form>
                <div id="respuesta">

                </div>
            </center>

        </div>
    </body>
</html>


