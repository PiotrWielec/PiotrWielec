<!DOCTYPE html>
<html>
<head>
    <title>Hurtownia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styl1.css">
    </head>
    <body>
        <div id="logo">
        <img src="komputer.png" alt="hurtownia komputerowa">
        </div>
        <div id="listy">
        <li>
            <lu>Sprzęt</lu>
            <ol>
            <li>Procesory</li>
                <li>Pamięć RAM</li>
                <li>Monitory</li>
                <li>Obudowy</li>
                <li>Karty graficzne</li>
                <li>dyski twarde</li>
            </ol>
            <lu>Oprogramowanie</lu>
            
            </li>
        </div>
        <div id="formularz">
        <form action="sklep.php" method="POST" name="form">
            <h2>Hurtownia komputerowa</h2>
            <label>Wybierz kategorie sprzętu</label>
            <input type="text" name="num">
        <input type="submit" name="button" value="SPRAWDŹ">
            </form>
        </div>
        <div id="glowny">
        <h1>Podzespoły we wskazanej kategorii</h1>
            <?php
            
           
            $connect=mysqli_connect('localhost','root','','sklep');
            if(!isset($_POST["num"]))
                
                echo "Wybierz poprawnąkategorią sprzętu";
            else
            {
                $num=$_POST['num'];
            $zapytanie1="SELECT nazwa, opis, cena FROM podzespoly WHERE typy_id = $num";
            $query=mysqli_query($connect,$zapytanie1);
            while ($linia=mysqli_fetch_assoc($query))
            {
                echo "<p>".$linia["nazwa"]."".$linia["opis"].""."CENA:".$linia["cena"]."</p>";
            }
            }
            mysqli_close($connect);
            ?>
        </div>
        <div id="stopka">
            <h3>Hurtownia działa od poniedziałku dopiątku w godzinach 7 <sup>00</sup>-16<sup> 00</sup></h3>
            <a href="bok@hurtownia.pl">Napisz do nas!</a><br>
            <a href="http://intel.pl/">INTEL</a><br>
            <a href="http://amd.pl/">AMD</a><br>
            <a>Strone wykonał:0000000</a>
        </div>
    
    </body>
</html>
