<?php

$servername = "192.168.137.158";
$username = "jTrujillo";
$password = "123456";
$db_name = "adminserverdb";

$conexion = mysqli_connect($servername,$username,$password,$db_name);
$conexion->set_charset("utf8");