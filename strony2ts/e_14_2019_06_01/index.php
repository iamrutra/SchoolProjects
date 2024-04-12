<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        $id = mysqli_connect('localhost', 'root', '', 'sklep');
    ?>  
    <header>
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </header>
    <main>
        <div class="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <?php
                    $zap1 = mysqli_query($id, "SELECT nazwa FROM towary WHERE promocja = 1;");
                    while ($row = mysqli_fetch_assoc($zap1)) {
                        echo "<li>{$row['nazwa']}</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="center">
            
            <form action="" method="post">
            <h3>Cena wybranego artykułu w promocji</h3>
                <select name="sel" id="">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <input type="submit" value="WYBIERZ" name="bttn">
            </form>
            <?php
            if(isset($_POST["bttn"])){
                $nazwaSel = $_POST['sel'];
                $zap2 = mysqli_query($id, "SELECT towary.cena FROM towary WHERE towary.nazwa = '$nazwaSel';");
                $ceny = mysqli_fetch_array($zap2);
                $cena = $ceny['cena'] * 0.85;
                $roundedPrice = round($cena, 2);
                echo "Cena: {$roundedPrice} zł";
            }
            ?>
        </div>
        <div class="prawy">
            <h3>Kontakt</h3>
            <p>telefon: 123123123 <br> e-mail: <a href="mailto:bok@sklep.pl"> bok@sklep.pl</a></p>
            <img src="./promocja2.png" alt="promocja">
        </div>
    </main>
    <footer>
        <h4>Autor strony 0000000000</h4>
    </footer>
    <?php
    mysqli_close($id);
    ?>
</body>
</html>