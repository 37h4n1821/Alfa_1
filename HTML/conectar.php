<?php

    function base_de_datos(){
        $servername = "localhost";
        $username = "villaloscisnes_n";
        $password = "njncABvHk7JtXqq";
        $dbname = "villalos_Numeros";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $conn->set_charset("utf8");
        // Check connection

        if ($conn->connect_error) {
            die("{Value:-1}");
            return FALSE;
        }
        return $conn;
    }
    
?>