<?php 
include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ec decor.jpeg" type="image/x-icon">
    <title>Puff</title>
</head>
<body>
    <div id="container">
    <img src="https://www.harpiacasa.com.br/estatico/harpia/images/produto/puffredondo90cmcalaislinhooffwhite.jpeg?v=1634607130" alt="">
</div>
<form action="" id="some-form">
    <h1>Puff Redondo</h1>
    <h2></h2>
    <a href=""></a>
    <select name="" id="modelo" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
        <option value=""></option>
        <option value="puff-simples">Puff Simples Quadrado/Retangular</option>
        <option value="puff-bau">Puff Baú Retangular</option>
        <option value="">Puff Redondo</option>
    </select>
    <h2>Comprimento</h2>
    <input type="number" id="Comprimento" step="0.001" max="100" required>
    <h2>Largura</h2>
    <input type="number" id="profundidade" step="0.001" max="100" required>
    <h2>Modelo</h2>
    <select name="" id="modelos" required>
        <option value="" selected></option>
        <option value="950.00">Liso</option>
        <option value="1050.00">Capitonê no Tampo </option>
        <option value="1270.00">Capitonê no Tampo e Laterais</option>
        <option value="1050.00">Puff Costurado e Acoplado no Tampo</option>
        <option value="1050.00">Puff Pastilhado no Tampo</option>
    </select>
    <button onclick="Calcular()">Calcular</button>
    <p id="p"></p>
</form>
<style>* {
    margin: 0;
    padding: 0;
}

img {
    position: absolute;
    height: 617px;
    width: 1366px;
}

form {
    align-items: center;
    text-align: center;
    position: absolute;
    color: rgb(255, 255, 255);
    top: 35%;
    left: 51%;
    transform: translate(-50%, -50%);

    padding: 20px;
}

input {
    color: rgb(0, 0, 0);
    align-items: center;
    text-align: center;
    border: 1px solid;
    border-radius: 10px;
    height: 20px;
    width: 235px;
}

h1 {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 50px;
}

#fh {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 400px;
    width: 500px;
}

select {
    text-align: center;
    height: 23px;
    width: 237px;
    border: 1px solid black;
    border-radius: 10px;
    padding-bottom: 2px;
}

button {
    position: absolute;
    background-color: rgb(85, 255, 0);
    height: 20px;
    width: 100px;
    border: none;
    border-radius: 5px;
    margin-bottom: 8px;
    margin-top: 8px;
    left: 36%;
    top: 95%;
}

button:hover {
    background-color: rgb(0, 188, 9);
    cursor: pointer;
}

p {
    align-items: center;
    text-align: center;
    position: absolute;
    top: 109%;
    left: 19%;
    transform: translate(-50%), -50%;
    height: 20px;
    width: 230px;
    background-color: rgb(255, 255, 255);
    border: 1px solid black;
    color: black;
    border-radius: 5px;
    font-weight: 900;
}
h1{
    font-family: Arial, Helvetica, sans-serif;
    -webkit-text-stroke-width: 2.5px;
    -webkit-text-stroke-color: #000;
    margin-bottom: 20px;
}
h2{
    font-family: Arial, Helvetica, sans-serif;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #000;
}
#jh{
    margin-bottom: 13px;
}
</style>
</body>
<script >const form = document.getElementById("some-form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("Deu certo");
});

  function Calcular() {
    var largur = document.getElementById("Comprimento");
    var largura = largur.value;
    var profundidad = document.getElementById("profundidade");
    var profundidade = profundidad.value;
    var mo = document.getElementById("modelos");
    var modelo = mo.options[mo.selectedIndex].value
    var modelos = parseFloat(modelo)
    var p = document.getElementById("p");

    var Prof = parseFloat(profundidade)
    var Com = parseFloat(largura)
  
      var re = (Com * Prof) * modelo
      var ff = (re * 0.10)
      var ds = ff + re
      console.log(modelos)
      p.innerHTML = ds.toLocaleString("pt-br",{maximumFractionDigits:2})
      
      
    

  }  
    </script>
</html>