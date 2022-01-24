<?php
    $Numero=$_POST['Value'];
    $Empresa=$_POST['Empresa'];
    $Local=$_POST['Local'];
    $Categoria=$_POST['Categoria'];

    $archivo = fopen("2343UKK2232LASJJDSNN22333223232-$Empresa-$Local-$Categoria-$Numero.php", "w");

    $txt ="<?php\n".'$'."Rut=".'$'."_GET['Rut'];\n".'$'."Numero=".'$'."_GET['Numero'];\n".'$'."Empresa=".'$'."_GET['Empresa'];\n".'$'."Local=".'$'."_GET['Local'];\n".'$'."Categoria=".'$'."_GET['Categoria'];\n"."include './conectar.php';\n";
    fwrite($archivo, $txt);
    fclose($archivo);

?>