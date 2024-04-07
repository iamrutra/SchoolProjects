<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Dodano dane rekrutacyjne do bazy</p>
    <?php
    $id = mysqli_connect("localhost", "root", "", "restauracja");
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stan = $_POST['stan'];

    $zap = mysqli_query($id, "INSERT INTO pracownicy
    (pracownicy.imie, pracownicy.nazwisko, pracownicy.stanowisko)
    VALUES ('$imie','$nazwisko','$stan');");
    mysqli_close($id);
    ?>
</body>
</html>