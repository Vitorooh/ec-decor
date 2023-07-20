<?php 
include('protect.php');


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofás</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThXKhRKpcaiRIBX5MORD04abK_z0drgKK37Yy2MWXuqpAFWHZ9ztdibDlYIdA8fd90Mt8&usqp=CAU" type="image/x-icon">
</head>

<body>
    <div>
        <img src="https://imgaz3.staticbg.com/thumb/large/oaupload/banggood/images/38/EE/cd819222-fbd8-4295-89b8-171832cc4ff1.jpg"
            alt="" style="height: 613px; width: 100vw;">
        <div>
        </div>
        <div>
            <form action="">
                <h1>Sofás</h1>
                <h2></h2>
                <select id="sofa" name="select" onchange=" window.location.assign(this.value)">
       
                    <option value="" selected></option>
                    <option value="">
                        <strong>Sofá Simples</strong>
                    </option>
                    <option value="sofa-chaise">
                        <strong>Sofá chaise</strong>
                    </option>
                </select>
                <h2>Comprimento</h2>
                <input id="comprimento" type="number"><br>
                <h2>Modelo</h2>
                <select name="" id="marcas">
                    <option value="" selected></option>
                    <option value="1550.00">Ferrari/Conte Tradicional</option>
                    <option value="2260.00">Réplica Marsala</option>
                    <option value="1650.00">Sofá Linho Couro</option>
                    <option value="1360.00">Sofa Simples</option>
                    <option value="1360.50">Sofá Simples Base Madeira</option>
                    <option value="1430.00">Sofa Retratil</option>
                    <option value="1650.00">Almofadao/Carina</option>
                </select><br>
                <h2>Profundidade</h2>
                <input id="profundidade" type="number"><br>
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
        color: rgb(0, 0, 0);
        top: 33%;
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
        height: 23px;
        width: 170px;
        border: 1px solid black;
        border-radius: 10px;
        padding-bottom: 3px;
        text-align: center;
    }
    
    button {
        background-color: rgb(85, 255, 0);
        height: 20px;
        width: 100px;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
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
        left: 10%;
        transform: translate(-50%), -50%;
        height: 20px;
        width: 170px;
        background-color: rgb(255, 255, 255);
        border: 1px solid black;
        color: black;
        border-radius: 5px;
    }</style>
</body>
<script>function calcular() {
    var cuom = document.querySelector("#comprimento");
    var comprimento = cuom.value;
    var prof = document.querySelector("#profundidade");
    var profundidade = prof.value;
    var select = document.querySelector("#marcas");
    var p = document.getElementById("p");
    var valor = select.options[select.selectedIndex].value;
    var resultado = null;
    var Mo = document.getElementById("marcas").value
  
    if (Mo == "1360.50") {
      var x = (comprimento * profundidade) * 1360
      var y = comprimento * 250
      var z = x + y
      p.innerHTML = 'R$' + z.toLocaleString('pt-br', {maximumFractionDigits: 2})
    } else {
      resultado = profundidade * valor * comprimento;
      var re = resultado.toLocaleString("pt-br", { maximumFractionDigits: 2 });
      p.innerHTML = "R$" + " " + re.toLocaleString("pt-br", { maximumFractionDigits: 2 });
    }
  }
  
  </script>

</html>