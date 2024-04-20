<?php 
    $sname = "localhost";
    $uname = "root";
    $password = "root";
    $db_name = "organizer_funkcje";
    
    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "connection failed!";

    }
