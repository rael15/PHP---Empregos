<?php 
session_start();

include_once("conexao.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$imagem = filter_input(INPUT_POST, 'imagem', FILTER_SANITIZE_STRING);
$jornada = filter_input(INPUT_POST, 'jornada', FILTER_SANITIZE_STRING);
$localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$email_contato = filter_input(INPUT_POST, 'email_contato', FILTER_SANITIZE_STRING);


// echo "Título: $titulo <p>";
// echo "Imagem: $imagem <p>";
// echo "Empresa: $empresa <p>";
// echo "Jornada: $jornada <p>";
// echo "Localização: $localizacao <p>";
// echo "Descrição: $descricao <p>";
// echo "Email de contato $email_contato";

$result_emprego = "INSERT INTO empregador (titulo, empresa, imagem, jornada, localizacao, descricao, email_contato, criated)
                    VALUES ('$titulo', '$empresa', '$imagem', '$jornada', '$localizacao', '$descricao', '$email_contato', NOW())"; 

$retultado_emprego = mysqli_query($conn, $result_emprego);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<h6 style='color: green;'>Usuário cadastrado com sucesso</h6>";
    header("Location: ../job-include.php");
}else{
    header("Location: ../job-include.php");
    $_SESSION['msg'] = "<h6 style='color: red;'>Ocorreu um erro!!!</h6><?php console.log();";
}


?>