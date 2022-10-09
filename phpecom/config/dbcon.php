<?php
 $host = "localhost"; 
 $username = "root";
 $password = "";
 $database = "phpecom";

//criando conexão com o database
$con = mysqli_connect($host, $username, $password, $database);

//conexão database
if($con){
    die("Conexão falhou:". mysqli_connect_error());
}
else
{
    echo "Conexão estabelecida";
}

?>