<?php
session_start();

if ($_SESSION["logado"] == false) {
    header("Location: cadastro.php"); // Redirecionar se não estiver logado
    exit();
}

include("conecta.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["nova_imagem_perfil"])) {
    $nova_imagem = file_get_contents($_FILES["nova_imagem_perfil"]["tmp_name"]);

    // Seu código para inserir a nova imagem no banco de dados aqui
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Seus cabeçalhos aqui -->
</head>
<body>
    <h1>Editar Perfil</h1>
    <div class="imagem_conta">
        <img class="imagem_conta" src="<?php echo $imagem_perfil; ?>" width="100%">
    </div>

    <form action="adicionarfoto.php" method="post" enctype="multipart/form-data">
        <input id="nova_imagem_perfil" type="file" name="foto" accept="image/*">
        <input type="submit" value="Adicionar imagem">
    </form>

</body>
</html>
