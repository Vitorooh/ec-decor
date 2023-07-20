const form = document.getElementById("some-form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("Deu certo");
});

function validarForm() {
  var Input = document.getElementById("Input").value
  var mo = document.getElementById("modelos").value;
      if (mo == "4") {
        document.getElementById("Input").disabled = false;
      } else {
        document.getElementById("Input").disabled = true;
        document.getElementById("Input").value = ""
      }
    }
  function Calcular() {
    var largur = document.getElementById("largura");
    var largura = largur.value;
    var profundidad = document.getElementById("profundidade");
    var profundidade = profundidad.value;
    var mo = document.getElementById("modelos");
    var modelo = mo.options[mo.selectedIndex].value
    var modelos = parseFloat(modelo)
    var p = document.getElementById("p");
    var Input = document.getElementById("Input")
    var In = Input.value

    var Prof = parseFloat(profundidade)
    var Lar = parseFloat(largura)
  
    var mo = document.getElementById("modelos").value;
    

    
      //
      
      if (mo == "250") {
        var bM = ((Lar * Prof) * 1360)
        var fg = (Lar * 250)
        var fd = bM + fg;
        p.innerHTML = fd.toLocaleString("pt-br", { maximunFractionDigit: 2 })
        console.log(fd)
      } else {
        if (mo == "1360") {
          var bd = (largura * profundidade) * 1360
          p.innerHTML = bd.toFixed("2");
          console.log(bd.toFixed("2"))
        } else {
          if (mo == "4") {
            var sd = (largura * profundidade) * 1360
            var yg = parseFloat(In)
            var fe = sd + yg;
            p.innerHTML = fe.toLocaleString("pt-br", { maximunFractionDigit:2 })
          }
        }
      }
    }  
    
    
    
    
    














