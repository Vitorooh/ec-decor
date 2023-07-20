<?php 
include('protect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styllle.css">
    <link rel="shortcut icon" href="ec decor.jpeg" type="image/x-icon">
    <title>Poltronas</title>
</head>
<body>
    <img src="https://www.matrixbicamas.com.br/produtos/full/30eb860bcf72c29bca3ff326ba88ad96.jpg" alt="">
    <form action=""  id="some-form">
        <h1>Poltronas</h1>
        <h2>Largura</h2>
        <input type="number" id="largura" step="0.01" max="100" required>
        <h2>Profundidade</h2>
        <input type="number"  id="profundidade" step="0.01" max="100" required><br>
        <h2>Modelo</h2>
        <select name="" id="modelos" onchange="validarForm()"  required>
            <option value="0" selected></option>
            <option value="1360">Base simples</option>
            <option value="250">Base de Madeira</option>
            <option value="4">Base giratoria</option>
        </select>
        <h2>Base giratoria</h2>
        <input id="Input" type="number" max="1000" step="0.01" required disabled><br>
        <button  onclick="Calcular()" >Resultado</button><br>
        <p id="p"></p>
    </form>
</body>
<script src="scripppt.js"></script>
</html>