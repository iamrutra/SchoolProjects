<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "portal");
    ?>
    <header>
        <div class="lh">Nasze osiedle</div>
        <div class="ph">
            <?php

            $zap1 = mysqli_query($id, "SELECT COUNT(*) AS liczba_wierszy FROM dane");
            while($row = mysqli_fetch_array($zap1)){
                echo "<h5>Liczba użytkowników portalu: {$row['liczba_wierszy']} </h5>";
            }
            ?>
        </div>
    </header>
    <main>
        <div class="lewy">
            <h3>Logowanie</h3>
            <form action="" method="post">
                <p>login</p>
                <input type="text" name="login" id="">
                <p>haslo</p>
                <input type="password" name="haslo" id="">
                <input type="submit" value="Zaloguj">
            </form>
        </div>
        <div class="prawy">
            <h3>Wizytówka</h3>
            <div class="wiz">
                <?php
                    
                    if(!empty($_POST['login'] && !empty($_POST['haslo']))){
                        $log = $_POST['login'];
                        $has = $_POST['haslo'];
                        $zap2 = mysqli_query($id, "SELECT uzytkownicy.haslo FROM uzytkownicy
                        WHERE uzytkownicy.login = '{$log}'");
                        $ileL = mysqli_num_rows($zap2);
                        if($ileL == 0){
                            echo "login nie istnieje";
                        }
                        else if ($ileL != 0){
                            $sh1H = hash('sha1', $has);
                            while($row=mysqli_fetch_array($zap2)){
                                if($row['haslo'] == $sh1H){
                                    $zap3 = mysqli_query ($id, "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM uzytkownicy JOIN dane ON uzytkownicy.id = dane.id WHERE uzytkownicy.login = '{$log}';");
                                    
                                    while($row = mysqli_fetch_array($zap3)){
                                        $rok = date("Y") - $row['rok_urodz'];
                                        echo "<img src='{$row['zdjecie']}' alt='osoba'>";
                                        echo "<h4>{$log}({$rok})</h4>";
                                        echo "<p>hobby: {$row['hobby']}</p>";
                                        echo "<h1><img src='icon-on.png'>{$row['przyjaciol']}</h1>";
                                        echo "<a href='dane.html'>Więcej informacji</a>";
                                    }
                                }
                                else{
                                    echo "hasło nieprawidłowe";
                                }
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <footer><p>Strone wykonal: 00000000000</p></footer>
</body>
</html>