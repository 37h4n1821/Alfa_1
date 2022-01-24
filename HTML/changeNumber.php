<?php
    include './conectar.php';
    $connection=base_de_datos();
    $empresa=$_POST['Empresa'];
    $local=$_POST['Local'];
    $categoria=$_POST['Categoria'];
    $sql="SELECT Número FROM OrdenAtención WHERE Empresa='$empresa' AND `Local`='$local' AND Categoría='$categoria' ORDER BY Número";
    
    $call = $connection->query($sql);
    echo ($sql);
    echo("\n");
    #echo ($call);
    #echo("\n");
    echo($call->fetch_array()[0]);

    
    
    #$number = $call->fetch_array()[0];
    #$connection->query("UPDATE OrdenAtención SET Atención= CURRENT_TIMESTAMP,Estado='Atención' WHERE Empresa='$empresa' AND `Local`='$local' AND Categoría='$categoria' AND Número='$number' " );
    #$connection->query("DELETE FROM OrdenAtención WHERE Número='$delete' AND Empresa='$empresa' AND 'Local'='$local' AND Categoría='$categoria' ");            
    #echo $number;
?>