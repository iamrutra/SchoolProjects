<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "egzamin");
    ?>
    <div class="baner">
        <div class="logo"><img src="wzor.png" alt="wzór BMI"></div>
        <header>
            <h1>Oblicz swoje BMI</h1>
        </header>
    </div>

    <main>
        <table>
            <thead>
                <tr><th>Interpretacja BMI</th><th>Wartość minimalna</th><th>Wartość maksymalna</th></tr>
            </thead>
            <tbody>
                <?php
                $zap1 = mysqli_query($id, "SELECT bmi.informacja, bmi.wart_min, bmi.wart_max FROM bmi;");

                while($row = mysqli_fetch_assoc($zap1)){
                    echo "<tr><td>{$row['informacja']}</td><td>{$row['wart_min']}</td><td>{$row['wart_max']}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <div class="glowny">
    
        <div class="lewy">
            <h2>Podaj wagę i wzrost</h2>
            <form action="" method="post">
                Waga: <input type="number" name="wg" id=""> <br>
                Wzrost w cm: <input type="number" name="cm" id=""> <br>
            <input type="submit" value="Oblicz i zapamiętaj wynik">
            </form>
            <?php
               if(isset($_POST['wg']) && isset($_POST['cm'])){
                $waga = $_POST['wg'];
                $wzrost = $_POST['cm'];

                $res = ($waga/(pow($wzrost, 2))) * 10000 ;
                echo "Twoja waga: {$waga}; Twój wzrost: {$wzrost} <br> BMI wynosi: {$res}";
                
                if ($res<=18){
                    echo "<br>niedowaga";
                    $bmi_id=1;
                }
                else if ($res<=25){
                    echo "<br>waga prawidlowa";
                    $bmi_id=2;
                }
                else if ($res<=30){
                    echo "<br>nadwaga";
                    $bmi_id=3;
                }
                else if ($res<=100){
                    echo "<br>otylosc";
                    $bmi_id=4;
               }

               $data=date('Y-m-d');
               $zap2 = mysqli_query($id, "INSERT INTO wynik (wynik.bmi_id, wynik.data_pomiaru, wynik.wynik) VALUES ('$bmi_id', '$data', '$res');");
            }
            ?>
        </div>
        <div class="prawy">
            <img src="rys1.png" alt="ćwiczenia">
        </div>
    </div>

    <footer>
        Autor: 0000000000 <a href="kwerendy.txt">Zobacz kwerendy</a>
    </footer>
    <?php
        mysqli_close($id)
    ?>
</body>
</html>