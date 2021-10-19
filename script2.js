/*
var produkty = [
    "PHP",
    "Mysql",
    "JavaScript"
];
produkty[3] = "POD";
//produkty[produkry.lenght] = "PDO";

//produkty.push("PDO");

alert(produkty[0]);

var osoba = [];

osoba["imie"] = "Imie";
osoba["Nazwisko"] = "Nazwisko";
alter(osoba.imie);

var ul = document.getElementById("KursyTWWW");
var liArray = ul.getElementsByTagName("li");
alert(liArray[0].innerHTML);
*/
var produkty = [
    "PHP",
    "Mysql",
    "Javascript",
    "PDO",
    "Grunt.js",
    "SASS"
];

var tmp = ["MysQli", "AJAX"];
produkty = produkty.concat(tmp);


document.getElementsById("rezultat").innerHTML += produkty.join("<br>")

document.getElementsById("rezultat").innerHTML += "<br>=============================<br>";

document.getElementsById("rezultat").innerHTML += produkty.valueOf();
