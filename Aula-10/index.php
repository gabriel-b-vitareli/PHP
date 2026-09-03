<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <h1> Login </h1>
    <hr>

    <!-- Form: -->
    <form action="sessao.php" method="post">

    <!-- Form do Nome do Usuário: -->
        <label for="usuario">Usuário:</label><br>
        <input type="text" name="usuario" id="usuario">
        <br>

    <!-- Form do Gênero do Usuário: -->
        <label for="genero">Gênero:</label>

        <input type="radio" name="genero" id="masculino" value="masculino">
        <label for="masculino">Masculino</label>

        <input type="radio" name="genero" id="feminino" value="feminino">
        <label for="masculino">Feminino</label>

    <!-- Botão de Enviar: -->
        <br>
        <input type="submit" value="Enviar">
    </form>


    <?php 
    session_start();

    // Criando a sessão do usuário assim que ele for setado:
    if(isset($_POST['usuario'])){
    $_SESSION['usuario'] = $_POST['usuario'];
    }
    
    // Criando o Cookie do gênero do usuário assim que ele for setado:
    if(isset($_POST['genero'])){
    setcookie("genero", $_POST['genero'], time() + 31536000);
    }
    
    // Se a sessão de usuário já estiver setada, diz qual o nome do usuário setado:
    if(isset($_SESSION['usuario'])){
        echo "<br>Usuário logado como " .$_SESSION['usuario'];
    }
    
    ?>
</body>
</html>