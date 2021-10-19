<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Kantor wymiany walut</title>
        <link rel="stylesheet" href="styl.css" type="text/css" />
    </head>
<body>
    <section id="baner">
    <img src="kantor.png">
    </section>
    <section id="navi">
       
        <a href="kwerendy.txt">Kwerendy</a>
        <br>
    <a href="grafika.jpg">Grafika</a>
    </section>
    <section id="glowna">
    <?php
        echo "Kursy walut na dzień:";
        echo date ('Y-n-j');
        echo "<br>";
        $connect= mysqli_connect('localhost','root','','kantor');
        $zapytanie1 = "SELECT nazwa waluty, skup, sprzedaż from kursy WHERE kategoria= 1 ";
        $zapytanie2 = "SELECT nazwa From waluty inner JOIN kursy ON waluty.id = kursy.waluty_id";
        $wynik1 = mysqli_query($connect, $zapytanie1);
        $wynik2 = mysqli_query($connect, $zapytanie2);
        
        while($row1 = mysqli_fetch_row($wynik1))
        {
            $row2 = mysqli_fetch_row($wynik2);
            echo "<h3>".$row1[0]."".$row1[1]."</h3>";
            echo "<p>".$row1[2]."</p>";
            echo "<p>Telefon kontaktowy:".$row2[0]."</p>";
           
        }
        
        mysqli_close($connect);
        ?>
    </section>
    <section id="stopka">
    <h2>Ogólnopolski Próbny egzamin zawodowy e.14-2018</h2>
        <h3>Autor strony:00000000</h3>
    </section>
    
    </body>
</html>
