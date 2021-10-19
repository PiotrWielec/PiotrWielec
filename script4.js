
/*
Pętla for- (TO_CO_MA_BYĆ_ZAINICILIZOWANY_NA_STARCIE ; WARUNEK ; INSTRUKCJA PO PRZEJSCIU PETLI
    )

*/
/*
for (var i = 0; i < 5; i++)
{
    document.getElementById("rezultat").innerHTML += i + "<br>";

}
*/

//break i continue
/*
var kursyProgramowania = document.getElementById("KursyProgramowania").getElementsByTagName("li");

for (var i = 0; i < kursyProgramowania.length; i++ )
{
    if(i % 2 !== 0)
    kursyProgramowania[i].innerHTML = "parzysty: " + kursyProgramowania[i].innerHTML;
    else
    continue;

}

for( var i = 0; i< 6; i++)
{
    if( i == 4)
    break;
}
*/
person = {
    imie: "Piotr",
    nazwisko: "Wielec",
    wiek: "20"
};
var kursyProgramowania = document.getElementById("kursyProgramowania").getElementsByTagName("li");

kursy = [
    "java",
    "C++",
    "PHP"

];
//alert(person.imie);

for(var property in kursyProgramowania)
{
    if(typeof(kursyProgramowania[property]) !== "object")
    break;

    alert(typeof(kursyProgramowania[property].innerHTML));
}
