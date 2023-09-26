<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="escalacao.css">
    <script src="rodape.js"></script>
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
            <div onclick="Fechar();" class="fechar"><img src=img/x.png width="20px"></div>
            <div class="menu_conta"></div>    
            <div class="rodape2">Cadastro</div><br>
            <div class="rodape2">Escalação</div><br>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2">Dashboard</div><br>
        </div>
    
    <div class="escalacao">
        <div class="SUAESCALAÇÃO"><b>SUA ESCALAÇÃO</b></div>
    </div>
    <hr>

    <div class="campo">
        <img class="campinho" src="img/campinho.png" width="350px">
    </div>


    <div class="carteira">
        <div class="carteira_valor">
            PREÇO DO TIME <br>
            F$ <b>0.00</b>
        </div>
        <div class="divisao"></div>
        <div class="carteira_saldo">
            VOCÊ AINDA TEM <br>
            F$ <b>0.00</b>
        </div>
    </div>
    <hr>

    <div class="atacante">
            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>
        </div>

        <div class="meiocampo">
            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente"></div>
        </div>

        <div class="zagueiro">
            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente1"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente1"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente1"></div>

            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
            <div class="transparente1"></div>
        </div>

        <div class="goleiro">
            <button class="botao-atacante">
            <span class="sinal-mais">+</span>
            </button>
        </div>

    <div class="bancotexto"><b>BANCO DE RESERVAS</b></div>
    <div class="banco">
        <div class="gol">
            <button class="botao-circular">
                <span class="sinal-mais">+</span>
            </button>
            <div class="espaco"></div>
            GOL
        </div>

        <div class="zag">
            <button class="botao-circular">
                <span class="sinal-mais">+</span>
            </button>
            <div class="espaco"></div>
            ZAG
        </div>

        <div class="lat">
            <button class="botao-circular">
                <span class="sinal-mais">+</span>
            </button>
            <div class="espaco"></div>
            LAT
        </div>

        <div class="mei">
            <button class="botao-circular">
                <span class="sinal-mais">+</span>
            </button>
            <div class="espaco"></div>
            MEI
        </div>

        <div class="ata">
            <button class="botao-circular">
                <span class="sinal-mais">+</span>
            </button>
            <div class="espaco"></div>
            ATA
        </div>

    </div>
    <hr>
    <div class="SUAESCALAÇÃO"><b>MERCADO</b></div>

    <?php
            include("conecta.php"); // Inclui o arquivo de conexão com o banco de dados
            $comando = $pdo->prepare("SELECT * FROM jogadores;"); // Prepara a consulta SQL para selecionar os produtos

            while ( $linhas = $comando->fetch() )
            {
                $nome = $linhas ["nome"]; // Obtém o nome do produto
                $foto = $linhas ["foto"]; // Obtém a imagem do produto
                $i=base64_encode($foto); // Codifica a imagem em base64
                $time = $linhas ["time"]; // Obtém o preço do produto
                $escudo = $linhas ["escudo"]; // Obtém o ID do produto
                echo("
                <div class=\"tudo\" id=\"tudo\">

            <div class=\"fild\">
              <img class=\"imagem\" src=\"data:image/jpeg;base64,$i\"> <!-- Exibe a imagem do produto -->
            </div>

            <div class=\"nome\">
                <br>
                <b>$Nome</b> <!-- Exibe o nome do produto -->
                <br>
                <b>R$ $preco</b> <!-- Exibe o preço do produto -->
            </div>

            <div class=\"ult\">  
                <button class=\"comprar\" onclick=\"comprarRedirecionar('$id')\">COMPRAR</button> <!-- Botão para comprar o produto -->
            </div>
            </div>
            </div>
                ");
            }

        ?>


    
</html>