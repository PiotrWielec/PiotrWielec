/*
function addNumbers()
{

    var suma = 0;
    
    for(i = 0,arguments.length; i++)
    {
        suma += arguments[i];
    }
   
   for(var property in arguments )
   {
      suma += arguments[property];
      
   }

    return suma; 

}

var suma = addNumbers(3,4,7,6);

alert(suma);
*/
 //var kursyProgramowania = document.querySelectorAll("#kursyProgramowania li");
/*
 for(var index in kursyProgramowania)
{
 kursyProgramowania[index].style.color = "red";
}

for(var i = 0; i < kursyProgramowania.length; i++)
{
 kursyProgramowania[i].style.color = "red";
}

// dodawanie i usuwanie elementów
var x = document.createElement("p");

x.style.color = "red";
x.className = "tesr";
x.innerHTML = "nowytekst";

var body = document.querySelector("body");

var newChildNode = body.appendChild(x);

var kursyProgramowania = document.getElementById("kursyProgramowania");

kursyProgramowania.parentNode.removeChild(kursyProgramowania);
*/

// pętla w pętli
var tabliczkaMnozenia = "<table>";
for (var i = 1; i <= 10; i++)
{
    tabliczkaMnozenia +="<tr>";

    for (var j = 1; j <= 10; j++)
    tabliczkaMnozenia +="<td>" +  i * j + "</td> ";

    tabliczkaMnozenia += "</tr>";
}

tabliczkaMnozenia +="</table>";
var rezultat = document.getElementById("rezultat");

rezultat.innerHTML = tabliczkaMnozenia;
