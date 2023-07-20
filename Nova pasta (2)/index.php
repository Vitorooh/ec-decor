
<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<script>window.alert('preencha seu usuario');</script>";
    }else if(strlen($_POST['senha']) == 0) {
        echo "<script>window.alert('preencha sua senha');</script>";
    }else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM logar WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução no codigo SQL:' . $mysqli->error);
    
        $quantidade = $sql_query->num_rows;
    
        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: painel');
        }else{
            echo "<script>window.alert('Falha ao logar Senha ou Email incorretos');</script>";
        }


    }
}
?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en"><head><meta http-equiv="refresh" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://famous-pudding-850399.netlify.app/ec%20decor.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Ec decor</title>
</head>
<body><img src="hd-nature-mountain-1920x1080-wallpaper-preview.jpg" alt="">


<form action="" method="POST" autocomplete='off'>
    <div class="f">
        <input type="text" id="Nome" placeholder="Usuário" name="email">
        <input id="input" class="input" type="password" placeholder="Senha" name="senha">
        <img id="img" src="olho.png" alt="" onclick="Fun()">
        <button onclick="limpar()" >LOGIN</button>
        <img class="ec-decor" src="ec_decor_ultima_-_qualit-removebg-preview (1).png" alt="">
    </div>
</form>

    <script  >
var Senha = document.getElementById("input")
var img = document.getElementById("img") 

function limpar(){
    window.location.reload(true);
}

function Fun(){
    
}

    img.addEventListener('click', function () {
        if(Senha.type === 'password'){
    input.type = 'text';
    img.src = 'olho-aberto.png'
        }else{
            input.type = 'password'
            img.src = 'olho.png'
        }
});


    </script>
</body></html>