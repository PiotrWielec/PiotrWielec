var KursyProgramowania  = [
    "C++",
    "Java",
    "C#",
    "Pascal"
];

var rezultat = document.getElementById("rezultat");

/*
var i = 0;

while(i < KursyProgramowania.length)
{
    rezultat.innerHTML += KursyProgramowania[i] + "<br>";


    i++;
}
*/
var KursyProgramowania = document.getElementById("kursyProgramowania").getElementsByTagName("li");
var i = 0;
while(i< KursyProgramowania.length)
{

KursyProgramowania[i].innerHTML += "test";

i++;
}
/*
do
{
    alert(i);
    i++;
}
while(i < 5);


*/
