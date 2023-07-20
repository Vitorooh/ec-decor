
var calcule = document.querySelector('#botao')
var cumpremento = document.querySelector('#n3')
var largura = document.getElementById('n1')
var resultado = document.getElementById("yh")


   










function calcular() {






resultado.style.backgroundColor = "#f2e9a5"







    var cumValor = cumpremento.value;
    var valorLar = largura.value;
    let select = document.querySelector("#marcas");
    let valor = select.options[select.selectedIndex].value;
    var leE = null;
    var lu = null;
    var d = parseFloat(valorLar.replace(",", "."));
    var f = parseFloat(cumValor.replace(",", "."));
    var g = "0,15";
    var t = parseFloat(g.replace(",", "."));

    if (valorLar > cumValor) {
        var h = d + t;
        var ft = (h * 2) * 38;
    } else {
        var a = f + t
       var  ft = (a *2)*38
    }

    
    
    
    
    if (valorLar < 1.91) {
        leE = d * valor;
        lu = (leE + ft + 78)
        resultado.innerHTML = (lu.toFixed(2))
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    if (valorLar > 1.91) {
        if (valorLar > cumValor) {
            var r = valorLar * valor;
            lu = (r+78+ft)
            resultado.innerHTML = (lu.toFixed(2))
        }else {
            var y = cumValor * valor;
            lu = (y+78+ft)
            resultado.innerHTML= (lu.toFixed(2))
            }
        }
        

    }



