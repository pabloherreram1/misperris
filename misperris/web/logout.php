<?php

session_start();
//eliminar variable de session
unset($_SESSION["session"]);
header("location:login.php");

