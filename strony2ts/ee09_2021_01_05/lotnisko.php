<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <?php
    $id = mysqli_connect('localhost', 'root', '', 'egzamin');
    $cookie_name = "user";
    setcookie($cookie_name, time() + (60*60*2));
    // unset($_COOKIE['user']); 
    ?>
    <header>
        <div id="ph"><img src="zad5.png" alt="logo lotnisko"></div>
        <div id="ch"><h1>Przyloty</h1></div>
        <div id="lh"><h3>przydatne link</h3><a href="kwerendy.txt" target="_blank">Pobierz…</a></div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $zap1 = mysqli_query($id, "SELECT przyloty.czas, przyloty.kierunek, przyloty.nr_rejsu, przyloty.status_lotu FROM przyloty ORDER BY przyloty.czas;");
                while($row = mysqli_fetch_array($zap1)){
                    echo "<tr>";
                    echo "<td>{$row['czas']}</td>";
                    echo "<td>{$row['kierunek']}</td>";
                    echo "<td>{$row['nr_rejsu']}</td>";
                    echo "<td>{$row['status_lotu']}</td>";
                    echo "</tr>";
                }
                mysqli_close($id);
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <div id="lf">
            <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo "<p>Dzień dobry! Strona lotniska używa ciasteczek</p>";
            }
            else{
                echo "<p>Witaj  ponownie  na  stronie lotniska</p>";
            }
            ?>
        </div>
        <div id="pf">Autor: 00000000</div>
    </footer>
</body>
</html>