const prc = document.querySelectorAll('.prc');
let idzamowienia = 0

function zaz(){
    for (let i=0;i<prc.length;i++){
        let p = prc[i];
        let  v = parseFloat(p.textContent);
        if(v<=5 && v>0){
            p.style.backgroundColor = 'yellow'
        }
        else if(v==0){
            p.style.backgroundColor = 'red'
        }
        else{
            p.style.backgroundColor = 'honeydew'
        }
    }
}
zaz()

function akt(el) {
    let prmpt = prompt("Podaj nową ilość:", "") 
    let chngEl = document.getElementById(el)
    chngEl.innerHTML = prmpt
    zaz()
}

function zam(el){
    const naz = document.getElementById(el).textContent
    alert("ID zamowienia: " + idzamowienia + ", Produkt: " + naz)
    idzamowienia= idzamowienia+1
}