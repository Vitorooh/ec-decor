<?php 
include('protect.php');


?>

<!DOCTYPE html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="stylle.css">
    
    <link rel="shortcut icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThXKhRKpcaiRIBX5MORD04abK_z0drgKK37Yy2MWXuqpAFWHZ9ztdibDlYIdA8fd90Mt8&usqp=CAU"
        type="image/x-icon">
    <title>EC Decors</title>
</head>

<body>
    <div class="f">
        <img id="im" src="imagem sofa ed deceor.jpeg" alt=""><br>

        <div id="d">


            <a href="almofada" target="_blank"><strong>
                    <h2> Almofada</h2>
                </strong></a>

                <a href="box" target="_blank"><strong><h2>Box</h2></strong></a><br>
                 

            <a href="cabeceira" target="_blank"><strong>
                    <h2>Cabeceira</h2>
                </strong></a>

            <a href="colchao" target="_blank"><strong>
                    <h2>Colchão</h2>
                </strong> </a>
                <a href="poltronas" target="_blank">
                <h2>Poltronas</h2>
            </a>
            <select name="" id="modelos" onchange=" window.open(this.value)">
            <option value="">Puffs</option>
            <option value="puff-simples">Puff Simples</option>
            <option value="puff-bau">Puff Baú Retangular</option>
            <option value="puff-redondo">Puff Redondo</option>
        </select>

        <select name="" id="modelos" onchange=" window.open(this.value)">
            <option value="">Sofas</option>
            <option value="sofa-simples">Sofa Simples</option>
            <option value="sofa-chaise">Sofa Chaise</option>
        </select>
        </div>
        <div>
            <script src="scrippt.js"></script>
</body>

</html>