var GetalInvoer;
var GetalTot;
var resultaat = "";

function Bereken() {
    document.getElementById("dResultaat").innerHTML = "";
    resultaat = "";
    var keuze = document.getElementById("opKeuze").value;
    switch (keuze) {
        case "tafel":
            document.getElementById("dResultaat").innerHTML = Tafels();
            break;
        case "macht":
            document.getElementById("dResultaat").innerHTML = Machten();
            break;
        case "breuk": 
        document.getElementById("dResultaat").innerHTML = Breuken();
        
            break;
        case "kwadraat": 
        document.getElementById("dResultaat").innerHTML = Kwadraten();

            break;
        default:
            break;
    }
}

function opzetKeuze() {
    wissen();
    var keuze = document.getElementById("opKeuze").value;
    if (keuze == "tafel") {
        document.getElementById("txt_Ond3_Tot").style.display = "inline";
    } else {
        document.getElementById("txt_Ond3_Tot").style.display = "none";
    }
}

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