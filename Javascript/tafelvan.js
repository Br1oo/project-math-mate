var GetalInvoer;
var GetalTot;
var resultaat = "";
var a = 1;
var b = 1;
var c = "";
var number = "";
var isprime = true;
var aPriem = [];
var rotation, time, num1, num2;
var arPrime = [];
var arFactor = [];
function wissen() {
  document.getElementById("output").innerHTML = " ";
}

function Tafels() {
  GetalInvoer = document.getElementById("getal1").value;
  GetalTot = document.getElementById("getal2").value;

  for (i = 0; i <= GetalTot; i++) {
    resultaat += i + " x " + GetalInvoer + " = " + i * GetalInvoer + "<br />";
  }
  document.getElementById("output").innerHTML = resultaat;
}

function Machten() {
  wissen();
  GetalInvoer = document.getElementById("getal1").value;

  for (var i = 0; i <= 15; i++) {
    resultaat +=
      GetalInvoer +
      "<sup>" +
      i +
      "</sup> = " +
      Math.pow(GetalInvoer, i) +
      "<br />";
  }
  document.getElementById("output").innerHTML = resultaat;
}

function Breuken() {
  wissen();
  GetalInvoer = document.getElementById("getal1").value;
  for (var i = 1; i <= GetalInvoer; i++) {
    resultaat += "1 / " + i + "=" + 1 / i + " <br/>";
  }
  document.getElementById("output").innerHTML = resultaat;
}

function Kwadraten() {
  wissen();
  GetalInvoer = document.getElementById("getal1").value;
  for (var i = 0; i <= GetalInvoer; i++) {
    resultaat += i + "<sup> 2  </sup> = " + Math.pow(i, 2) + "<br/>";
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

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function spinIt() {
  rotation = getRandom(800, 2000);
  time = getRandom(5, 10);
  document.getElementById("rad1").style.transform =
    "rotate(" + rotation + "deg)";
  document.getElementById("rad1").style.transition = time + "s";

  rotation1 = getRandom(800, 2000);
  time1 = getRandom(5, 10);
  document.getElementById("rad2").style.transform =
    "rotate(" + rotation1 + "deg)";
  document.getElementById("rad2").style.transition = time1 + "s";

  setTimeout(getNumber, (time + 0.5) * 1000);
  setTimeout(getNumber1, (time1 + 0.5) * 1000);
  setTimeout(function () {
    document.getElementById("resultaat").innerHTML =
      num1 + " + " + num2 + " = " + (num1 + num2);
  }, Math.max((time + 0.5) * 1000, (time1 + 0.5) * 1000));
}

function getNumber() {
  rotation = rotation % 360;

  if (rotation >= 0 && rotation <= 59) {
    num1 = 6;
  } else if (rotation >= 60 && rotation <= 119) {
    num1 = 5;
  } else if (rotation >= 120 && rotation <= 179) {
    num1 = 4;
  } else if (rotation >= 180 && rotation <= 239) {
    num1 = 3;
  } else if (rotation >= 240 && rotation <= 299) {
    num1 = 2;
  } else if (rotation >= 300 && rotation <= 359) {
    num1 = 1;
  }
}
function getNumber1() {
  rotation1 = rotation1 % 360;

  if (rotation1 >= 0 && rotation1 <= 59) {
    num2 = 6;
    return 6;
  } else if (rotation1 >= 60 && rotation1 <= 119) {
    num2 = 5;
    return 5;
  } else if (rotation1 >= 120 && rotation1 <= 179) {
    num2 = 4;
    return 4;
  } else if (rotation1 >= 180 && rotation1 <= 239) {
    num2 = 3;
    return 3;
  } else if (rotation1 >= 240 && rotation1 <= 299) {
    num2 = 2;
    return 2;
  } else if (rotation1 >= 300 && rotation1 <= 359) {
    num2 = 1;
    return 1;
  }
}

function PrimeArray() {
  arPrime = [2];
  for (i = 3; i <= 1000; i++) {
    isprime = true;
    for (j = 0; j < arPrime.length; j++) {
      if (i % arPrime[j] == 0) {
        isprime = false;
      }
    }
    if (isprime) {
      arPrime.push(i);
    }
  }
}

function Factorize() {
  
  resultaat = "";
  document.getElementById("output").innerHTML = "";
  arFactor = [];
  GetalInvoer = document.getElementById("getal1").value;

  for (var i = 0; i < arPrime.length; i++) {
    if (GetalInvoer % arPrime[i] == 0) {
      arFactor.push(arPrime[i]);
      GetalInvoer = GetalInvoer / arPrime[i];
      if (GetalInvoer == 1) {
        break;
      } else {
        i = -1;
      }
    }
  }
  for (var i = 0; i < arFactor.length; i++) {
    resultaat += arFactor[i] + " * ";
  }
  resultaat = resultaat.substr(0, resultaat.length - 3);
  document.getElementById("output").innerHTML = resultaat;
}
