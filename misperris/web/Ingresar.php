<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/tablas.css">
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id_region=$("#cboRegion").val();
                     
                    $.ajax({
                        url:"llenar_ciudad.php",
                        type:'POST',
                        data:{idregiones:id_region},
                        success: function(data){
                            $("#cboCiudad").html(data);
                        }
                    });
                });
            });
        </script>
        <?php
       include_once './menu.php';
        ?>
        <?php
        $cone= mysqli_connect("localhost", "root", "oracle", "mis_perris");
        $reg= mysqli_query($cone, "select * from regiones");
        $regis= mysqli_query($cone, "select * from tipo_vivienda");
        ?>
        
          <center>
               <form method="POST" action="grabar_formulario.php">
          
            <table border="1">
                <thead>
                    <tr>
                        <th>Formulario de ingreso de Caninos</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rut:</td>
                        <td><input type="text" name="txtRut" value=""  />
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="txtNombre" value="" /></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td><input type="number" name="txtTelefono" value="" /></td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td><input type="text" name="txtCorreo" value="" /></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td><input type="text" name="txtFecha" value="" /></td>
                        
                    </tr>
                    <tr>
                        <td>Region</td>
                                <td><select name="cboRegion" id="cboRegion" >
                            <?php 
                            while ($row = mysqli_fetch_array($reg)){
                                echo'<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                            ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Ciudad:</td>
                        <td><select name="cboCiudad" id="cboCiudad" ></select></td>
                    </tr>
                    <tr>
                        <td>Tipo de Vivienda:</td>
                                <td><select name="cboTipo" id="cboTipo">
                            <?php 
                            while ($row = mysqli_fetch_array($regis)){
                                echo'<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                            ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Enviar" />
                            <input type="reset" value="Limpiar" />
                        </td>     
                    </tr>
                    
                </tbody>
            </table>

        </form>
                
            </center>
       
    </body>
</html>
