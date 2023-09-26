<?php
    session_start();

    $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
    $id=$_SESSION["id"];
    include("conecta.php");
    
    $comando = $pdo->prepare("UPDATE cadastro SET imagem_perfil =:foto WHERE id=:id");
    $comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
    $comando->bindParam(":id", $id);
    
    $resultado = $comando->execute();
    if ($resultado) {
        // Redirecionar para a página desejada após a inserção
        header("Location: pagina_inicial.php");
        exit; // Terminar a execução do script após o redirecionamento
    } else {
        // Exibir uma mensagem de erro caso a inserção não seja bem-sucedida
        echo "Erro ao inserir a foto.";
    }
?>
