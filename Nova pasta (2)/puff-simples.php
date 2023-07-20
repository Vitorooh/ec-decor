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
    <img src="https://mlb-s2-p.mlstatic.com/puffs-puf-puff-quadrado-120501-MLB20332967131_072015-F.jpg" alt="">
</div>
    <form action="" id="some-form">
        <h1>Puff Simples</h1>
        <h2></h2>
        <select name="" id="modelo" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option value=""></option>
            <option value="">Puff Simples Quadrado/Retangular</option>
            <option value="puff-bau">Puff Baú Retangular</option>
            <option value="puff-redondo">Puff Redondo</option>
        </select>
        <h2>Comprimento</h2>
        <input type="number" id="Comprimento" step="0.001" max="100" required>
        <h2>Profundidade</h2>
        <input type="number" id="profundidade" step="0.001" max="100" required>
        <h2>Modelo</h2>
        <select name="" id="modelos" required>
            <option value="" selected></option>
            <option value="730.00">Liso</option>
            <option value="910.00">Capitonê no Tampo </option>
            <option value="1050.00">Capitonê no Tampo e Laterais</option>
            <option value="910.00">Puff Costurado e Acoplado</option>
            <option value="910.00">Puff Pastilhado</option>
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
    left: 50%;
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
    left: 35%;
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
    top: 110%;
    left: 17%;
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
}</style>
</body>
<script>const form = document.getElementById("some-form");
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
      console.log(modelos)
      p.innerHTML = re.toLocaleString("pt-br",{maximumFractionDigits:2})
      
      
    

  }  
    </script>
</html>