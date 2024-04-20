<?php

function miesiac(){
    include("db_conn.php");
    $query = "SELECT miesiac from organizer_funkcje.zadania where id = 1 ;";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo " $row[0]";
}
function rok(){
    include("db_conn.php");
    $query = "SELECT rok from organizer_funkcje.zadania where id = 1 ;";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo " $row[0]";
}

?>