<?php
$Rut=$_GET['Rut'];
$Numero=$_GET['Numero'];
$Empresa=$_GET['Empresa'];
$Local=$_GET['Local'];
$Categoria=$_GET['Categoria'];
$Estado=$_GET['Estado'];
include './conectar.php';
$sql="INSERT INTO `NumerosActuales` (`ID`, `Empresa`, `Local`, `Categoria`, `Numero`, `Rut`, `Espera`, `Atencion`, `Salida`, `Estado`) VALUES (NULL, '$Empresa', '$Local', '$Categoria', '$Empresa', '$Empresa', '$Numero', '$Rut', '$Espera', NULL,NULL,1)";