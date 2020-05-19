<?php 
    session_start();
    include_once("conexao.php");
    
    $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
    $nome_contato = filter_input(INPUT_POST, 'nome_contato', FILTER_SANITIZE_STRING);
    $email_corporativo = filter_input(INPUT_POST, 'email_corporativo', FILTER_SANITIZE_EMAIL);
    $telefone_corporativo = filter_input(INPUT_POST, 'telefone_corporativo', FILTER_SANITIZE_STRING);

    // echo "$empresa";
    // echo "$cnpj";
    // echo "$nome_contato";
    // echo "$email_corporativo";
    // echo "$telefone_corporativo";

    $result_empregadores = "INSERT INTO empresa (empresa, cnpj, nome_contato, email_corporativo, telefone_corporativo, created)
                          VALUES ('$empresa', '$cnpj', '$nome_contato', '$email_corporativo', '$telefone_corporativo', NOW())";
    
    $resultado_empregadores = mysqli_query($conn, $result_empregadores);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<h6 style='color: green;'>Empresa cadastrada com sucesso</h6>";
        header("Location: ../cadastrar-empresa.php");
    }else{
        header("Location: ../cadastrar-empresa.php");
        $_SESSION['msg'] = "<h6 style='color: red;'>Ocorreu um erro!!!</h6>";
    }

?>