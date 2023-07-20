
<?php 
include('protect.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeceira</title>
    <link rel="shortcut icon" href="ec decor.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="sttyle.css">
</head>

<body>
    <img src="1688923771564.jpg" alt="">
    <div class="form">
        <form action="" method="get">
            <h1>Cabeceira</h1>
            <h2>Comprimento</h2>
            <input id="comprimento" type="number" minlength="1" maxlength="6" required>
            <h2>Modelo</h2>
            <select name="" id="modelos" required>
                <option value="" selected></option>
                <option value="660">Capitonê</option>
                <option value="500">Pastilhada</option>
                <option value="400">Lisa</option>
                <option value="500">Costurada/Acoplada</option>
            </select>
            <h2>Altura</h2>
            <input id="altura" type="number" minlength="1" maxlength="100" required><br>
            <button type="button"  id="aviso">Calcular</button><br>
            <p id="p"><strong></strong></p>


        </form>
        <script src="scriipt.js"></script>
    </div>
</body>

</html>