//<?php 

session_start();
require_once('../config/dbcon.php');

if(isset($_POST['registrar']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $csenha = mysqli_real_escape_string($con, $_POST['Csenha']);
    
    //Vendo se o email já está cadastrado no banco de dados
    $check_email_query = "SELECT email FROM admin WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email já está cadastrado";
        header('Location: ../registroAdm.php');
    }

    if($senha == $csenha)
    {
        //Insert dados do usuario
        $insert_query = "INSERT INTO admin (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Registro concluido";
            header('Location: ../index.php');
        }
        else
        {
            $_SESSION['message'] = "Erro no registro";
            header('Location: ../registroAdm.php');
        }
    }
    else{
        $_SESSION['message'] = "As senhas não coincidem";
        header('Location: ../registroAdm.php');
    }    
}

?>*/