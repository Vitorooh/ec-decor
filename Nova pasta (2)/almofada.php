
<?php 
include('protect.php');


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ec decor copy.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="sstyle.css">
    <title>Amofadas</title>
</head>

<body>
    <img src="1688931568681.jpg" alt="" srcset="">
    <form action="" method="get">
        <h1>Almofadas</h1>
        <h2>Medida da Almofada </h2>
        <input type="number" id="Mealmofada"><br>
        <h2>Valor do tecido</h2>
        <select name="" id="Vtecido">
            <option value="" selected>Valor do tecido</option>
            <option value="14">14</option>
            <option value="17">17</option>
            <option value="37">37</option>
        </select><br>
        <button type="button" onclick="Calcular()">Calcular</button>
        <p id="p"></p>
    </form>
<script>
function Calcular() {
    var MeAlmofada = document.getElementById("Mealmofada")
    var MedAlmofada = MeAlmofada.value.replace(",", ".") 
    var vatecido = document.getElementById("Vtecido")
    var Vtecido = vatecido.options[vatecido.selectedIndex].value;
    var ValorT = parseFloat(Vtecido)
    var p = document.getElementById("p")

    var re = ((((MedAlmofada / 100) + 0.05) * ValorT)) + 72
    p.innerHTML = "R$" + " " + re.toLocaleString("pt-br", { MaximunFractionDigits: 2 });
    
    //Enchimento Fibra :50
    //Mao de obra :22
    //A soma dos de cima
}</script>
</body>

</html>