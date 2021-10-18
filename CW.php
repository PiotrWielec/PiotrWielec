<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl1.css">
	<title>Portal ogłoszeniowy</title>
</head>
<body>
	<div id="p">
		<h1>Portal Ogłoszeniowy</h1>
	</div>
	<div id="d">
		<h2>Kategorie ogłoszeń</h2>
		<ol>
			<li>Książki</li>
			<li>Muzyka</li>
			<li>Filmy</li>
		</ol>
		<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
		<table>
			<tr>
				<td>Lista ogłoszeń</td><td>Cena ogłoszenia</td><td>Bonus</td>
			</tr>
			<tr>
				<td>1 - 10</td><td>1 PLN</td><td rowspan="3" >Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
			</tr>
			<tr>
				<td>11 - 50</td><td>0,80 PLN</td>
			</tr>
			<tr>
				<td>51 i więcej</td><td>0,60 PLN</td>
			</tr>
		</table>
	</div>
	<div id="t">
		<h2>Ogłoszenia kategorii książki</h2>
		<?php 
			$connect = mysqli_connect('localhost','root','','ogloszenia');
			$zapytanie1 = "SELECT id, tytul, tresc from ogloszenie WHERE kategoria = 1";
			$zapytanie2 = "SELECT telefon FROM uzytkownik inner JOIN ogloszenie On uzytkownik.id = ogloszenie.uzytkownik_id ";
			$wynik1 = mysqli_query($connect,$zapytanie1);
			$wynik2= mysqli_query($connect,$zapytanie2);

			while ($row1 = mysqli_fetch_row($wynik1)) 
			{
				$row2 = mysqli_fetch_row($wynik2);
				echo "<h3>".$row1[0]." ".$row1[1]."</h3>";
				echo "<p>".$row1[2]."</p>";
				echo "<p>"."Telefon kontaktowy: ".$row2[0];
			}
			mysqli_close($connect);
		 ?>
	</div>
	<div id="stopka">Portal ogłoszeniowy opracował: PESEL</div>
</body>
</html>
