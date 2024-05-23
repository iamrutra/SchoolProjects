let res = document.getElementById("res")
const bttn = document.getElementById("bttn")

bttn.addEventListener("click", ()=>{

    let a1 = Number(document.getElementById("a1").value)
    let r = Number(document.getElementById("r").value)
    let n = Number(document.getElementById("n").value)

    let lista = []
    lista.push(a1)
    for(let i=1; i<n; i++){
       lista.push(a1+r)
       a1+=r
    }

    res.innerHTML = "Ciąg arytmetyczny zawiera wyrazy: " + lista
    
})