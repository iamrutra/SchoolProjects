const bttn = document.getElementById('bttn')
const wynik = document.getElementById('wynik')

bttn.addEventListener('click', ()=>{
    const num = Number(document.getElementById('num').value)
    const ile = Number(document.getElementById('ile').value)
    let sum = 0

    if(num === 1){
        sum = ile * 4
        wynik.innerHTML = `koszt paliwa: ${sum} zł`
    }
    else if(num === 2){
        sum = ile * 3.5
        wynik.innerHTML = `koszt paliwa: ${sum} zł`
    }
    else{
        sum = 0
        wynik.innerHTML = `koszt paliwa: ${sum} zł`
    }
    console.log(num, ile, sum)
})