<?php
            include("db_conn.php");

           @$wpis = $_POST['wpis'];
           @$data = $_POST['data'];
            @$wartosc = $_POST['cos'];

            if($wartosc =="dodaj"){
            $zapytanie5 = "SELECT dataZadania FROM zadania WHERE dataZadania  = '$data';";
            $wynik5 = mysqli_query($conn, $zapytanie5);
            $wiersz = mysqli_fetch_array($wynik5);
            if(!$wiersz){
                $zapytanie6 = "INSERT INTO `zadania`(`dataZadania`, `wpis`) VALUES ('$data','$wpis');";
                 mysqli_query($conn, $zapytanie6);
                 header("Location: http://localhost/PHP,SQL/organizer_usuwanie_dodawanie/kalendarz.php");
            }
            else{
           $zapytanie3 = "UPDATE zadania SET wpis='$wpis' WHERE dataZadania='$data';";
           
            mysqli_query($conn,$zapytanie3);
            header("Location: http://localhost/PHP,SQL/organizer_usuwanie_dodawanie/kalendarz.php");
            }
            }
            else{
                    $z_usun = "DELETE FROM zadania where dataZadania = '$data';";
                    mysqli_query($conn, $z_usun);
                    header("Location: http://localhost/PHP,SQL/organizer_usuwanie_dodawanie/kalendarz.php");  
            }
           ?>