<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "ilg";    

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao " . mysqli_connect_error());
}else{
    // echo "Conexão realizada com sucesso";
}

?>