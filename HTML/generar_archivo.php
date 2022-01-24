<?php
    $Numero=$_POST['Value'];
    $Empresa=$_POST['Empresa'];
    $Local=$_POST['Local'];
    $Categoria=$_POST['Categoria'];

    $archivo = fopen("2343UKK2232LASJJDSNN22333223232-$Empresa-$Local-$Categoria-$Numero.php", "w");

    $txt ="<?php\n".'$'."Rut=".'$'."_GET['Rut'];\n".'$'."Numero=".'$'."_GET['Numero'];\n".'$'."Empresa=".'$'."_GET['Empresa'];\n".'$'."Local=".'$'."_GET['Local'];\n".'$'."Categoria=".'$'."_GET['Categoria'];\n".'$'."Estado=".'$'."_GET['Estado'];\n"."include './conectar.php';\n";
    $txt=$txt.'$'.'sql="INSERT INTO `NumerosActuales` (`ID`, `Empresa`, `Local`, `Categoria`, `Numero`, `Rut`, `Espera`, `Atencion`, `Salida`, `Estado`) VALUES (NULL, '."'".'$'."Empresa'".', '."'".'$'."Local'".', '."'".'$'."Categoria'".', '."'".'$'."Empresa'".', '."'".'$'."Empresa'".', '."'".'$'."Numero'".', '."'".'$'."Rut'".', '."'".'$'."Espera'".', NULL,NULL,1)";';
    $txt=$txt.'$'."result = ".'$',"conn->query(".'$'."sql);";
    $txt=$txt."unlink(__FILE__.'.php');?>";
    fwrite($archivo, $txt);
    fclose($archivo);

?>