const send = document.getElementById('send')
let desc = document.getElementById('desc')
send.addEventListener('click',  () =>{
    desc.innerHTML = ''
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let secName = document.getElementById('secName').value;
    console.log(secName)
    let sel =document.getElementById("sel").value;
    desc.innerHTML += `<p>${name} ${secName}</p>`
    desc.innerHTML += `<p>${email.toLowerCase()}</p>`
    desc.innerHTML += `<p>${sel}</p>`
})