<?php     

session_start();

include "includes/header.php";


// Setando a sessão do usuário
if(isset($_POST['usuario'])){
    $_SESSION['usuario'] = $_POST['usuario'];
    }

// Setando o cookie do gênero do usuário
if(isset($_POST['genero'])){
    $_COOKIE['genero'] = $_POST['genero'];
    }
    
    
    // "Chamando" o usuário pela sessão
    if(isset($_SESSION['usuario'])){
        echo "Usuário Logado: " .$_SESSION['usuario'];
        } else{
            echo "Nenhum usuário logado.";
            }
            
            // Cria o cookie do gênero se o gênero tiver sido selecionado
            if(isset($_POST['genero'])){
                setcookie("genero", $_POST['genero'], time() + 31536000);
}


// Chama o usuário pelo pronome selecionado
if(isset($_COOKIE['genero'])){
    if($_COOKIE['genero'] == 'masculino'){
        echo "<br><h3>Seja bem-vindo.</h3>";
        } else{
            echo "<br><h3>Seja bem-vinda.</h3>";
            }
            }

            include "includes/footer.php";
            ?>