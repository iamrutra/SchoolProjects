
const ch = document.querySelectorAll('.ch')
const bttn = document.getElementById('bttn')
const res = document.getElementById('res')
let sum = 0

bttn.addEventListener('click', ()=>{
    for(let el of ch){
        if(el.checked){
            sum+=Number(el.value)
        }
    } 
    res.innerHTML = 'Cena zabiegów: ' + sum
    sum = 0
})
