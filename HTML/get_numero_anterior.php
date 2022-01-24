<?php
    include './conectar.php';
    $Empresa=$_POST['Empresa'];
    $Local=$_POST['Local'];
    $Categoria=$_POST['Categoria'];

    $conn=base_de_datos();

    if ($conn && $Empresa && $Local && $Categoria){
        $sql = "SELECT * From `NumerosActuales` WHERE Empresa='$Empresa' AND Local='$Local' AND Categoria='$Categoria' AND Estado=1 ORDER BY `Numero` DESC;";
        $result = $conn->query($sql);
        if ($result->num_rows>0){
            $row = $result->fetch_array()[4];
            $numero= $row;
            echo '{"Value":'.$numero.'}';
        }else{
            echo '{"Value":-2}';
        }
    }

?>