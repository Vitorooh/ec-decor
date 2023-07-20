<?php 
include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Colchões</title>
    <link rel="stylesheet" href="stylllle.css">
    <link rel="shortcut icon" href="ec decor.jpeg" type="image/x-icon
">
</head>

<div class="fundo">
    <img style="height: 100vh;width: 100vw;"
        src="1688927094178.jpg" alt="">
    <div class="for">
       
    </div>
    <form >
        <h1>Colchão</h1>
        <h2>Largura</h2>
        <input id="n1" type="number" >
        <h2>Tipo de espuma</h2>
        <select name="marcas" id="marcas" >
            <option value="" selected></option>
            <option value="450.00">D45_10</option>
            <option value="315.00">D45_7 </option>
            <option value="225.00">D45_5 </option>
            <option value="135.00">D45_3 </option>
            <option value="615.00">D33-15</option>
            <option value="268.00">D33-10</option>
            <option value="187.60">D33-7 </option>
            <option value="134.00">D33-5 </option>
            <option value="86.70">D33-3 </option>
            <option value="57,80">D33-2 </option>
            <option value="28.90">D33-1 </option>
            <option value="472.50">D28-15</option>
            <option value="206.50">D28-10</option>
            <option value="161.00">D28-7 </option>
            <option value="103.50">D28-5 </option>
            <option value="63.80">D28-3 </option>
            <option value="62.00">D28-2 </option>
            <option value="23.00">D28-1 </option>

        </select>
        <h2>Comprimento</h2>
        <input id="n3" type="number" ><br>
        <button  onclick="calcular()" type="button">Calcular</button><br>
        <p id="yh"><strong></strong></p>
    </form>
</div>
<script src=scrippppt.js></script>

</body>