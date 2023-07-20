
<?php 
include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofás </title>
    <link rel="shortcut icon" href="ec decor.jpeg" type="image/x-icon">
</head>

<body>
    <div>
        <img src="minotti-ALLEN-_rodolfo-dordoni-op21.jpg" alt="" style="height: 613px; width: 100vw;">
        <div>

        </div>
        <div>
            <form action="">
                <h1>Sofá Chaise </h1>
                <select id="sofa" name="select" onchange=" window.location.assign(this.value)">
        <option value="" selected></option>
        <option value="sofa">
            <strong>Sofá Simples</strong>
        </option>
        <option value="">
            <strong>Sofá chaise</strong>
        </option>
    </select>
                <h2>Comprimento</h2>
                <input id="comprimento" type="number" minlength="3"><br>
                <h2>Modelo</h2>
                <select name="" id="marcas">
                    <option value="" selected></option>
                    <option value="1550">Ferrari/conte Tradicional</option>
                    <option value="1360">Sofa Simples</option>
                    <option value="1430">Sofa retratio</option>
                    <option value="1650">Almofadao/Carina/Camila</option>
                </select><br>
                <h2>Profundidade</h2>
                <input id="profundidade" type="number" minlength="3"><br>
                <h2>Chaise</h2>
                <input id="chaise" type="nunber" minlength="3"><br>
                <h2>Largura da chaise</h2>
                <input id="Larchaise" type="number" name=""></input>
                <h2>Braço</h2>
                <select name="" id="jh">
                    <option value="" selected></option>
                    <option value="0.15">0,15</option>
                    <option value="0.20">0,20</option>
                </select><br>
                <button onclick="calcular()" type="button">Calcular</button><br>
                <p id="p"></p>
            </form>
        </div>
    </div>
    <style>* {
    margin: 0;
    padding: 0;
}

.fundo {
    height: 100vh;
    width: 100vw;
    background-color: rgb(32, 7, 135);
}

form {
    align-items: center;
    text-align: center;
    position: absolute;
    color: rgb(255, 255, 255);
    top: 45%;
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
    height: 22px;
    width: 170px;
    border: 1px solid black;
    border-radius: 10px;
    padding-bottom: 2px;
}

button {
    background-color: rgb(85, 255, 0);
    height: 20px;
    width: 100px;
    border: none;
    border-radius: 5px;
    margin-bottom: 13px;
}

button:hover {
    background-color: rgb(0, 188, 9);
    cursor: pointer;
}

p {
    align-items: center;
    text-align: center;
    position: absolute;
    top: 95%;
    left: 25%;
    transform: translate(-50%), -50%;
    height: 20px;
    width: 165px;
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
<script >


function calcular() {
  var comprimento = parseFloat(document.querySelector("#comprimento").value.replace(",","."));
  var profundidade = parseFloat(document.querySelector("#profundidade").value.replace(",","."));
  var chaise = parseFloat(document.getElementById("chaise").value.replace(",","."));
  var larchaise = parseFloat(document.querySelector("#Larchaise").value.replace(",","."));
  var select = document.querySelector("#marcas");
  var bra = document.getElementById("jh");
  var cumprimento = comprimento.value
  
  
  var lrgchaise = larchaise.value
  //chaise
 
  //braco

  //largura da chaise
  
  
  //paragrafo
  var p = document.getElementById("p");
  var valor = select.options[select.selectedIndex].value;
  var valo = bra.options[bra.selectedIndex].value;

  var resultado = (comprimento * profundidade) * valor
  

  var hj = null;
  var mult = chaise - profundidade
  var jn = ( (larchaise+parseFloat(valo))*mult)*parseFloat(valor)
//parte maior do sofa
  var ft = (comprimento* profundidade)*parseFloat(valor)


  p.innerHTML = ((ft +jn).toLocaleString('pt-br',{ maximumFractionDigits: 2 }))
  
}
</script>

</html>