<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "egzamin");
    ?>
    <header><h3>Reprezentacja polski w piłce nożnej</h3><img src="obraz1.jpg" alt="reprezentacja"></header>
    <div class="bloki">
        <div class="lewy">
            <form action="" method="post">
                <!--Bramkarze, Obrońcy, Pomocnicy, Napastnicy-->
                <select name="sel" id="">
                    <option value="1">Bramkarze</option>
                    <option value="2">Obrońcy</option>
                    <option value="3">Pomocnicy</option>
                    <option value="4">Napastnicy</option>
                </select>
                <input type="submit" value="Zobacz" name="bttn">
            </form>
    
            <img src="zad2.png" alt="">
            <p>Autor: 0000000000</p>
        </div>
        <div class="prawy">
            <ol>
                <?php
                    if(isset($_POST['bttn'])){
                        $sel = $_POST['sel'];
                        $zap1 = mysqli_query($id, "SELECT zawodnik.imie, zawodnik.nazwisko FROM zawodnik WHERE zawodnik.pozycja_id = '$sel';");
                        while($row = mysqli_fetch_assoc($zap1)){
                            echo "<li>{$row['imie']} {$row['nazwisko']}</li>";
                        }
                    }
                ?>
            </ol>
        </div>
    </div>
    <div class="glowny">
        <h3>Liga mistrzów</h3>
    </div>
    <div class="liga">
        <?php
        $zap2 = mysqli_query($id, "SELECT liga.zespol, liga.punkty, liga.grupa FROM liga ORDER BY liga.punkty DESC;");
            while($row=mysqli_fetch_assoc($zap2)){
                echo "<div class='blokLiga'>";
                    echo "<h2>{$row['zespol']}</h2>";
                    echo "<h1>{$row['punkty']}</h1>";
                    echo "<p>grupa: {$row['grupa']}</p>";
                echo "</div>";
            }
        ?>
    </div>
    <?php
        mysqli_close($id);
    ?>
</body>
</html>