<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "kwiaciarnia")
    ?>
    <header><h1>Grupa Polskich Kwiaciarn</h1></header>
    <main>
        <div class="lewy">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/">Rozpoznaj  kwiaty</a></li>
                
                <li><a href="znajdz.php">Znajdź  kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </div>
        <div class="prawy">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="" method="post">
                Podaj nazwę miasta: <input type="text" name="txt" id=""> <input type="submit" value="SPRAWDŹ">
                <?php
                    if(isset($_POST['txt'])){
                        $m = $_POST['txt'];
                        
                        $zap1 = mysqli_query($id, "SELECT kwiaciarnie.nazwa, kwiaciarnie.ulica FROM kwiaciarnie
                        WHERE kwiaciarnie.miasto = '{$m}';");

                        while($row = mysqli_fetch_array($zap1)){
                            echo "<h3>{$row['nazwa']}, {$row['ulica']}</h3>";
                        }
                    }
                ?>
            </form>
        </div>
    </main>
    <footer><p>Stronę opracował: 00000000000</p></footer>
    <?php
        mysqli_close($id);
    ?>
</body>
</html>