<?php 
session_start();
if (!isset($_SESSION["nome"]))
{
        $texto="Faça login";
        $imagem="img/perfilsemfoto.png";
}
else
{
    $texto=$_SESSION["nome"];
    $imagem="img/imagem_conta.jpg";
}    
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODAPE TESTE</title>
    <script src="rodape.js"></script>
    <link rel="stylesheet" href="dashboard2.css">
    
    
</head>
<body>
    
    <div class="cabecalho">
        <div class="logo" onclick="Aparecer();"> 
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="logo"><a href="pagina_inicial.php"><img src="img/LOGO FUT VILLE.png" width="280px"></div></a>
        <div class="logo"><img src="img/noti.png" width="20px"></div>
    </div>


        <div class="lateral" id="lateral">
            <div onclick="Fechar();" class="fechar"><img src=img/x.png width="20px"></div> <br>
            <div class="foto_conta">
                <div class="imagem_conta"><img class="imagem_conta" src="<?php echo( $imagem); ?>" width="100%"></div>
                <div class="nome_imagem"><?php echo( $texto); ?></div>
            </div> <br><br>
            <div class="menu_conta">  
            <a href="cadastro.php"> <div class="rodape2">Cadastro</div></a><br>
            <div class="rodape2"><a href="escalacao.php">Escalação</div><br><a>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2"><a href="dashboard.php">Dashboard</div><br></a>
            </div>  
        </div>

        <div class="quadrado_anuncio"></div>


        
        <h1>OS MAIS ESCALADOS</h1>
        <div class="escalados">
            <div class="botao">
                <div class="titulares">Titulares</div>
            </div>
            <hr>
            <?php
            include("conecta.php"); // conectar com banco de dados
            $comando = $pdo->prepare("SELECT * FROM `jogadores`;");
            $resultado = $comando->execute();  

            while ( $linhas = $comando->fetch() )
            {
                $nome = $linhas ["nome"];
                $foto= $linhas ["foto"];
                $i=base64_encode($foto);
                $time = $linhas ["time"];
                $posicao = $linhas ["posicao"];
                echo("
                
                <div class=\"jogadores\">

                    <div class=\"jogador\">
                        <img class=\"foto\" src=\"data:image/jpeg;base64,$i\">
                        <div class=\"time\">$time</div>
                    </div>

                    <div class=\"jorge\">
                        <div class=\"nome\">$nome</div>
                        <div class=\"posicao\">$posicao</div>
                    </div>
                </div>
                <hr>
                ");
            }
            

        ?>

            <b>Ver todos</b>
        </div>

        

        <div class="jogos"></div>
<br> <br> <br> <br>
        
    <div class="rodape">© 2022-2023 FutVille FC - Liga Joinvilense de Futebol</div>
</body>
</html>