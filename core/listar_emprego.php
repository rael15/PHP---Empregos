<?php 
    include_once("conexao.php");

    $listagem = $conn->prepare("SELECT * FROM empresa");
    $listagem-> execute();
     


    // $consulta = "SELECT * FROM empregador";
    // $conn = $mysqli -> query($consulta)
//    $result_empresa = "SELECT * FROM empresa ORDER BY in DESC";
//    $resultado_empregadores = mysqli_query($conn, $result_empregadores);

   

?>