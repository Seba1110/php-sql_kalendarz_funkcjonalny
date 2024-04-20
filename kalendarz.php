<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styl5.css">
    <title>Mój kalendarz</title>
</head>
<body>
    <div class="logo">
    <img src="logo1.png" alt="Mój kalendarz">
    </div>
    
    <p></p>
    <div class="baner">
    <h1>Kalendarz</h1>
    <?php
    include ("db_conn.php");
        $query = "SELECT miesiac,rok from zadania where id = 1 ;";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        echo "Miesiac: $row[0], rok: $row[1]"
    ?>
    </div>
    <div class="glowny">
        <?php
        
        include("db_conn.php");

        $zapytanie2 = "SELECT dataZadania,wpis FROM zadania ;";
        $wynik2 = mysqli_query($conn, $zapytanie2);
        while($wiersz = mysqli_fetch_array($wynik2)){
            echo "<div class='kafelek'>
            <h5>$wiersz[0]</h5>
            <p>$wiersz[1]</p>
            </div>";}


            ?>  
    </div>
    <div class="stopka">
        <form action="callendar.php" method="post">
            dodaj wpis: 
            <input type="text" name="wpis">
            Data
            <input type="date" name="data">
            <button type="submit" name = "cos" value= "dodaj">Dodaj</button>
            <button type="submit" name = "cos" value = "usun">usun</button>

        </form>

        
   
    </div>
</body>
</html>