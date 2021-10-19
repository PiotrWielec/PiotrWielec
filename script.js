alert("Strona w celach naukowych");

function zmieniZdj()
{
   this.src ="home1.jpg";
 
}
function zmieniZdj1()
{
    this.src ="home.jpg";
}

var home = document.getElementById("home").src;
var pro = document.getElementById("pro").src;
var bio = document.getElementById("bio").src;
var git = document.getElementById("git").src;

home.mouseover = zmieniZdj;
home.mouseout = zmieniZdj1 ;

// onmouseover="this.src = 'home1.jpg'" onmouseout="this.src = 'home.jpg'"
