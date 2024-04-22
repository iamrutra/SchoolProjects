<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header><h2>Wędkuj z nami!</h2></header>
    <main>
        <div class="lewy"><img src="ryba2.jpg" alt="Szczupak"></div>
        <div class="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
                $id = mysqli_connect("localhost", "root", "", "wedkowanie");
                $zap1 = mysqli_query($id, "SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia = 2;");
                while($row = mysqli_fetch_array($zap1)){
                    echo "{$row['id']}. {$row['nazwa']}, występuje w: {$row['wystepowanie']} <br>";
                }
            ?>
            <ol>
                <li><a href="https://wedkuje.pl/ ">Odwiedź  także</a></li>
                <li><a href="http://www.pzw.org.pl/">olski Związek Wędkarski</a></li>
            </ol>
        </div>
    </main>
    <footer><p>Stronę wykonał: 000000000000</p></footer>
</body>
</html>