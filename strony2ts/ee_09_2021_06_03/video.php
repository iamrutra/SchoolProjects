<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Video On Demand</title>
</head>
<body>
    <?php
        $id = mysqli_connect("localhost", "root", "", "dane3");
    ?>
    <header>
    <div id="h1">
		<h1>Internetowa wypożyczalnia filmów</h1>
	</div>
	<div id="h2">
		<table>
			<tr>
				<td>Kryminał</td>
				<td>Horror</td>
				<td>Przygodowy</td>
			</tr>
			<tr>
				<td>20</td>
				<td>30</td>
				<td>20</td>
			</tr>
		</table>
	</div>
    </header>
        <div id="lista1">
            <h3>Polecamy</h3>
            <div id="filmy1">
                <?php
                    $zap1 = mysqli_query($id, "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25);");
                    while($row = mysqli_fetch_array($zap1)){
                        echo "<div class='film'>";
                            echo "<h4>{$row['id']}. {$row['nazwa']}</h4>";
                            echo "<img src='{$row['zdjecie']}' alt='film'>";
                            echo "<p>{$row['opis']}</p>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <div id="lista2">
            <h3>Filmy fantastyczne</h3>
            <div id="filmy2">
            <?php
                    $zap2 = mysqli_query($id, "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;");
                    while($row = mysqli_fetch_array($zap2)){
                        echo "<div class='film'>";
                            echo "<h4>{$row['id']}. {$row['nazwa']}</h4>";
                            echo "<img src='{$row['zdjecie']}' alt='film'>";
                            echo "<p>{$row['opis']}</p>";
                        echo "</div>";
                    }
                ?>
            </div>
            
        </div>
    <footer>
        <form action="" method="post">
            Usuń film nr.: <input type="number" name="num" id=""> <input type="submit" value="Usuń film"> <br>
            Stronę wykonał: <a href="ja@poczta.com">0000000000</a>
            <a href="mailto:ooo">ooo</a>
        </form>
        <?php
            if(!empty($_POST['num'])){
                $num = $_POST['num'];
                $zap3 = mysqli_query ($id, "DELETE FROM produkty WHERE id = {$num};");
                header("Location: {$_SERVER['PHP_SELF']}");
            }
            else{
                echo "<h2>Wprowadz liczbe</h2>";
            }
        ?>
    </footer>
    <?php
        mysqli_close($id);
    ?>
</body>
</html>