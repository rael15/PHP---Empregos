<?php
    session_start();
    include_once("conexao.php");

    if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

        // if(($senha == "123") && ($usuario == "rael15@gmail.com")) {
        //     header("Location: ../job-includ.php");
        
    
        if(empty($resultado)){
            $_SESSION['loginErro'] = "Usuário ou senha inválido1";
            header("Location: ../login.php");
        }elseif(isset($resultado)){
            header("Location: ../job-include.php");
        }else{
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];

            $_SESSION['loginErro'] = "Usuário ou senha inválido2";
            header("Location: ../login.php");
        }

    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido3";
        header("Location: ../job-include.php");
    }

?>