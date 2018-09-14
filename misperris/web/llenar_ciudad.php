<?php

$id_region=$_POST["idregiones"];
$cone= mysqli_connect("localhost", "root", "oracle", "mis_perris");
$reg= mysqli_query($cone, "select * from ciudades "
        . "where regiones_idregiones=$id_region");
?>
<option value="0">Seleccione</option>
<?php 
while ($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
    
}
?>


