<?php
    include 'conectar.php';
    $call = $connection->query("SELECT Número FROM OrdenAtención WHERE Empresa='A' AND `Local`='1' AND Categoría='Venta' ORDER BY Número ASC LIMIT 1");
    $number = $call->fetch_array()[0];
    $connection->query("UPDATE OrdenAtención SET Atención= CURRENT_TIMESTAMP,Estado='Atención' WHERE Empresa='A' AND `Local`='1' AND Categoría='Venta' AND Número='$number" );
    echo $number;
    #$connection->query("DELETE FROM OrdenAtención WHERE Número='$number' AND Empresa='A' AND 'Local'='1' AND Categoría='Venta' ");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Prototipos</title>
</head>
<body>
    <div class="container">
        <button onclick="Avanzar()" class="btn" id="change">Siguiente</button>
    </div>
    <script>
        function Avanzar() {
            "<?php
            $call = $connection->query("SELECT Número FROM OrdenAtención WHERE Empresa='A' AND `Local`='1' AND Categoría='Venta' ORDER BY Número ASC LIMIT 1");
            $number = $call->fetch_array()[0];
            $connection->query("UPDATE OrdenAtención SET Atención= CURRENT_TIMESTAMP,Estado='Atención' WHERE Empresa='A' AND `Local`='1' AND Categoría='Venta' AND Número='$number" );
            echo $number;
            $connection->query("DELETE FROM OrdenAtención WHERE Número='$number' AND Empresa='A' AND 'Local'='1' AND Categoría='Venta' ");
            ?>"
        }
    </script>
</body>
</html>