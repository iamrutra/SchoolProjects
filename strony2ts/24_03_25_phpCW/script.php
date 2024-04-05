<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = mysqli_connect('localhost', 'root', '', 'ogloszenia');
        $zap1 = mysqli_query($id, "SELECT uzytkownik.id, uzytkownik.imie, uzytkownik.nazwisko, uzytkownik.email FROM uzytkownik WHERE uzytkownik.id<4;");
        $zap2 = mysqli_query($id, "SELECT ogloszenie.tytul FROM ogloszenie WHERE ogloszenie.uzytkownik_id=1;");
        // echo $_SERVER[$id];
        while($row = mysqli_fetch_assoc($zap1)){
            echo `<h3>{$row['id']} {$row['imie']} {$row['nazwisko']}</h3>`;
            echo `<p>{$row['email']}</p>`;
        }
        while($row = mysqli_fetch_assoc($zap2)){
            echo `<h3>{$row['tytul']}</h3>`;
        }
    ?>
</body>
</html>