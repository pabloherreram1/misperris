
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/tablas.css">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <?php
        $cone= mysqli_connect("localhost", "root", "oracle", "mis_perris");
        $reg= mysqli_query($cone, "select * from formulario");
        ?>
        <form method="POST" action="modificar_perro.php">
            
            <table border="1">
                <thead>
                    <tr>
                        <th>Formulario de ingreso de Caninos</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rut:</td>
                                <td><select name="cboRut" id="cboRut">
                            <?php 
                            while ($row = mysqli_fetch_array($reg)){
                                echo'<option value="'.$row[0].'">'.$row[0].'</option>';
                            }
                            ?>
                            </select></td>
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
                        <td><input type="submit" value="Modificar" />
                            <input type="reset" value="Limpiar" />
                        </td>     
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
