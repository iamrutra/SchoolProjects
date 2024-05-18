<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "biuro");
    ?>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <nav>
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
            $zap1 = mysqli_query ($id, "SELECT wycieczki.id, wycieczki.dataWyjazdu, wycieczki.cel, wycieczki.cena from wycieczki 
            where wycieczki.dostepna = 1");
            while($row = mysqli_fetch_array($zap1)){
                echo "<li>" . $row['id'] . " dnia " . $row['dataWyjazdu'] . " jedziemy do " . $row['cel'] . ", cena: " . $row['cena'] . "</li>";
            }
            ?>
        </ul>
    </nav>
    <main>
        <div class="lewy">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td><td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td><td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td><td>wrzesień</td>
                </tr>
            </table>
        </div>
        <div class="center">
            <h2>Nasze zdjęcia</h2>
            <?php
            $zad2 = mysqli_query($id, "SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM zdjecia
            ORDER BY zdjecia.podpis desc");
            while($row = mysqli_fetch_array($zad2)){
                echo "<img src='{$row['nazwaPliku']}' alt='{$row['podpis']}'>";
            }
            ?>
        </div>
        <div class="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </main>
    <footer>
        <p>Stronę wykonał: 0000000000</p>
    </footer>
</body>
</html>