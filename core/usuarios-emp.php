<?php
    session_start();
    include_once("conexao.php");

    $perfil = filter_input(INPUT_POST, 'perfil', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    // $repetir_senha = filter_input(INPUT_POST, 'repetir_senha', FILTER_SANITIZE_STRING);

    

    $resul_usuario = "INSERT INTO usuario_empresa (perfil, nome, sobrenome, email, senha, created)
                       VALUES ('$perfil', '$nome', '$sobrenome', '$email', '$senha',  NOW())";

    $retultado_usuario = mysqli_query($conn, $resul_usuario);
 
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<h6 style='color: green;'>Usuário cadastrado com sucesso</h6>";
        header("Location: ../cadastrar-usuario-emp.php");
    }else{
        header("Location: ../cadastrar-usuario-emp.php");
        $_SESSION['msg'] = "<h6 style='color: red;'>Ocorreu um erro!!!</h6>";
    }
?>