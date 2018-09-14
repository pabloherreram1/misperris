<?php
session_start();
if (!isset($_SESSION["sesion"])){
    header("location:login.php");
}else{
    $usuario=$_SESSION["sesion"];
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/hoja.css">
        <title>Mis perris</title>
    </head>
    <body bgcolor="FCFCFC">
         <center>
      <?php
      include_once 'menu.php';
      ?>

        <div class="casilla">
            <div class="contenidoi">
                <h2 class="titulo" style="text-align: right; position: relative; right: 10px;">Rescate</h2>
                <h4 class="tit" style="text-align: right; position: relative; top: -5px; right: 10px;">ESTAPA UNO</h4>
                <hr size= "4" align= "right" style="top: -1px; right: 10px; width: 70px" >
                <h5 class="tit" style="text-align: right; position: relative; top: -0.1px; right: 10px;">Rescatamos perros en situacion de peligro y/o abandono. Los rehabilitamos y los preparamos para buscarle un hogar</h5>
                <img style="position: relative; left: 115px; top: -0.1px" src="img/perros/rescate.jpg" alt="">
            </div>

            <div class="contenidod" >
                <img style="width: 200px; height: 200px; position: relative; top: 20px; right: 190px;" src="img/perros/crowfunding.jpg" alt="">
                <h2 class="titulo" style="position: relative; top: 10px; right: 195px;">CROWFUNDING</h2>
                <h4 class="tit" style="position: relative; top: -0.01px; right: 215px;">FINANCIAMENTO</h4>
                <hr size= "4" aling="left" style="position: relative; left: 12px; top: -1px; width: 70px;">
                <h5>Sigue nuestras redes sociales para informarte acerca de las diversas campañas y actividades que realizamos para obtener financiamiento para seguir ayudando</h5>
                <a href=""><input class="fuente" type="button" style="position: relative; right: 248px;" value="campañas"></a>

            </div>
        </div>
             <?php
              include_once './galeria.php';
             ?>

        <div class="head" style="position: relative; top: -35px;">
            <p style="text-align: left; position: relative; top: 40px; left: 20px;">Desarrollo web y mobile</p>
        </div>
    
    </center>
    </body>
</html>
