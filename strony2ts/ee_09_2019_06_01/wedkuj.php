<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <?php
        $id = mysqli_connect('localhost', 'root', '', 'wedkowanie');
    ?>
    <header><h1>Portal dla wędkarzy</h1></header>
    <main>
        <div class="lewy">
            <h2>Ryby drapieżne naszych wód</h2>
            <ul>
                <?php
                    $zap1 = mysqli_query($id, "SELECT ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia = 1;");
                    while ($row = mysqli_fetch_assoc($zap1)){
                        echo "<li>{$row['nazwa']}, występowanie: {$row['wystepowanie']}</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="prawy">
            <img src="ryba1.jpg" alt="Sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </main>
    <footer><p>Stronę wykonał: 0000000000</p></footer>
    <?php
        mysqli_close($id);
    ?>
</body>
</html>