
window.onload=function(){
    var botaoAviso = document.getElementById("aviso");

    botaoAviso.onclick = function () {
            var cum = document.getElementById('comprimento')
            var comprimento = cum.value.replace(",",".")
            var alt = document.getElementById('altura')
            var altura = alt.value.replace(",",".")
            var select = document.getElementById('modelos')
            var valor = select.options[select.selectedIndex].value
            var valo = parseFloat(valor)
            var p = document.getElementById("p")
            
        
            var resu = (comprimento * altura) * valo;
            console.log()
            p.innerHTML = "R$"+" "+resu.toLocaleString("pt-br",{ maximumFractionDigits: 2 });
    };
}