<?php 

session_start()
include('../config/dbcon.php');

if(isset($_POST['registrar']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $csenha = mysqli_real_escape_string($con, $_POST['Csenha']);

    if($senha == $csenha)
    {
        //Insert dados do usuario
        $insert_query = "INSERT INTO admin (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Registro concluido"
            header('Location: ../login.php')
        }
        else
        {
            $_SESSION['message'] = "Erro no registro"
            header('Location: registro.php')
        }
    }
    else{
        $_SESSION['message'] = "As senhas não são iguais";
        header('Location: registro.php')
    }    
}

?>