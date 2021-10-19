<!DOCTYPE html>
<html lang="pl">
    <head>
    <meta charset="utf-8">
        <title>plik</title>
    </head>
    <body>
    <?php
        define("laptop",3500);
        define("mysz",40);
        define("sluchawki",60);
        
        $l=$_POST['laptop'];
        $s=$_POST['sluchawki'];
        $m=$_POST['mysz'];
        
        if($l<0 || $s<0 || $m<0)
        {
            echo "liczba zamówionych produktów nie może być ujemna"."<br><br>";
            echo "<a href='tai1.html'>Powrót do zamówienia</a>";
            
        }
        else
        {
            echo "Wiraj w sklepie komputerowym"."<br>";
            echo "<h2> Twoja faktura VAT </h2>";
            echo "<hr>";
            echo "<br>";
            echo "Data wystawienia faktury VAT:";
            echo date ('j F Y');
            echo "<br>"."Godzina wystawienia faktury:";
            echo date ('G : i');
            echo "<br>";
            echo "<br>";
            echo "Laptop Dell kosztuje:";
            $l1=number_format(laptop,2,',','');
            echo $s1."zl"."<br>";
            
            echo "Słuchawki kosztują:";
            $s1=number_format(mysz,2,',','');
            echo $s1."zł"."<br>";
            
            echo "Mysz kosztuje :";
            $m1=number_format(mysz,2,',','');
            echo $m1."zł"."<br>";
            echo "<br>";
            $suma=laptop*$l+mysz*$m+sluchawki*$s;
            echo "<br>";
            echo "Podsumowanie zakupów: <br>";
            $city=$_POST['miasto'];
            echo "Wybrałeś oddział:".$city."<br>";
            echo "<br>";
            echo "ilość wybranych produktów:<br>";
            echo $l." laptopów <br>";
            echo $s." słuchawek <br>";
            echo $m." myszek <br><br>";
            
            echo "Łączny koszt zakupów netto:<br>".number_format($suma,2,',','')."zł <br><br>";
            $b1=$suma*1.08;
            $b2=$suma*1.22;
            if(isset ($_post['vat']))
                echo "Łączny koszt zakupów brutto: <br>".number_format($b1,2,',','')."zł<br>";
            else
                echo "Łączny koszt zakupów brutto: <br>".number_format($b2,2,',','')."zł <br>";
            
            
        }
    ?>
    </body>

</html>
