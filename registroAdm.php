<?php 
session_start();
include('includes/header.php');
include('config/dbcon.php');
 ?>

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php if(isset($_SESSION['message'])) 
        {
            ?>        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Atenção,</strong> <?= $_SESSION['message']; ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
        } 
         ?>
            <div class="card">
                <div class="card-header">
                    <h4> Cadastro de usuário</h4>
                </div>
                <div class="card-body">
                    <form action="função/authcode.php" method="POST">
                    <div class="mb-3">
                            <label  class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control"  placeholder="Digite o seu nome">                      
                    </div>                            
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control"  placeholder="Digite o seu melhor e-mail">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Crie a sua senha">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Repita a Senha</label>
                            <input type="password" name="Csenha"  class="form-control" placeholder="Repita a senha criada">
                        </div>
                       
                        <button type="submit" name="registrar" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>         

        </div>
    </div>
</div>
</div>


<?php include('includes/footer.php'); ?>