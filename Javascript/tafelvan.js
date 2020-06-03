var GetalInvoer;
var GetalTot;
var resultaat = "";
var a = 1;
var b = 1;
var c = "";
var number = "";
var isprime = true;
var aPriem = [];


function wissen(){ 
    document.getElementById("output").innerHTML = " ";

}

function Tafels() {
    
    GetalInvoer = document.getElementById("getal1").value;
    GetalTot = document.getElementById("getal2").value;

        for ( i = 0; i <= GetalTot; i++) {
            resultaat += i + " x " + GetalInvoer + " = " + (i * GetalInvoer) + "<br />";
        }
    document.getElementById("output").innerHTML = resultaat;
}

function Machten() {
    wissen();
    GetalInvoer = document.getElementById("getal1").value;

    for (var i = 0; i <= 15; i++) {
        resultaat += GetalInvoer + "<sup>" + i + "</sup> = " + (Math.pow(GetalInvoer, i)) + "<br />";
    }
    document.getElementById("output").innerHTML = resultaat;
}

function Breuken() { 
    wissen();
    GetalInvoer = document.getElementById("getal1").value;
    for (var i = 1; i <= GetalInvoer; i++) {
        resultaat += "1 / " + i  + "=" + 1 / i + " <br/>";
    }
    document.getElementById("output").innerHTML = resultaat;

}



function Kwadraten() {
    wissen();
    GetalInvoer = document.getElementById("getal1").value;
    for (var i = 0; i <= GetalInvoer; i++) {
        resultaat += i + "<sup> 2  </sup> = "  + (Math.pow(i , 2)) + "<br/>";
    }
    document.getElementById("output").innerHTML = resultaat;
 
}

function febonatci() {
    max = document.getElementById("getal1").value;
    document.getElementById("output").innerHTML = "1 - 1";
    a = 1;
    b = 1;
    c = "";
    while (c <= max) {
      c = a + b;
      a = b;
      b = c;
      if (c > max) {
        break;
      }
      document.getElementById("output").innerHTML += " - " + c;
    }
  }
  
  function priem() {
    aPriem = [2];
    document.getElementById("output").innerHTML = 2;
    max1 = document.getElementById("getal1").value;
    for (i = 3; i <= max1; i++) {
      isprime = true;
      for (j = 0; j < aPriem.length; j++) {
        if (i % aPriem[j] == 0) {
          console.log(i + " is geen priemgetal");
          isprime = false;
          break;
        }
      }
      if (isprime) {
        document.getElementById("output").innerHTML += " - " + i;
        aPriem.push(i);
      }
    }
    console.log(aPriem);
  }
  