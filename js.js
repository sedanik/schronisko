let ilosc = 20;
function zwierzaki(){
    var a = document.getElementsByClassName("info");
    a[0].innerHTML = ilosc;
}

function dodawanie(){
    var a = document.getElementsByClassName("info");
    ilosc -= 1;
    a[0].innerHTML = ilosc;
}

function oddaj(){
    var a = document.getElementsByClassName("info");
    ilosc += 1;
    a[0].innerHTML = ilosc;
}
