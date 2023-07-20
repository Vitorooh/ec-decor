
var Senha = document.getElementById("input")
var img = document.getElementById("img") 




function Fun() {
    window.alert("")
    conteiner.classList.toggle('visible')
    if(conteiner.classList.contains('visible')){
    Senha.type = 'text'
    img.src = 'olho aberto.png'
    }else{
        Senha.type = 'password'
        img.src = 'olho.png'
    }
}