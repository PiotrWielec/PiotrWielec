//event
/*
function wypiszTekst(tekst)
{
    alert(tekst + "@!!!!");
}
*/


    function pow()
{
    this.style.fontSize = "20px";
    
}



    
function min()
{
    this.style.fontSize ="5px ";
}

window.onload = function() // jesli nie ma async
{
var test = document.getElementById("test");
var p = document.getElementById("p");
var m = document.getElementById("m");

/*
test.onclick = function()
{
    alert("Jo");
};
*/
p.onmouseclik = pow;
m.onmouseclik = min;

test  = pow;
test  = min;
}
