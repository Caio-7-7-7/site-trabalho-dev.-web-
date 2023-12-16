<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="páginas/index.css">
<title>Loja de roupas</title>


</head>



<body class="index-body">

<ul class="itensMenu">
            <li class='lista1'>
                <a href="#">Masculino</a>
                <ul class='lista2'>
                    <li class='lista-inverno'><a class='link' href="../páginas/masculinoInverno.html">Roupas de
                            inverno</a></li>
                    <li class='lista-verão'><a class='link' href="../páginas/masculinoVerão.html">Roudpas e verão</a>
                    </li>
                    <li class='lista-calçados'><a class='link' href="../páginas/masculinoCalçados.html">Calçados</a>
                    </li>
                </ul>
            </li>
            <li class='lista0'>

                |
            </li>

            <li class='lista1'>
                <br>
                <a href="#">Feminino</a>
                <ul class='lista2'>
                    <li class='lista-inverno'><a class='link' href="../páginas/femininoInverno.html">Roupas de inverno</a>
                    </li>
                    <li class='lista-verão'><a class='link' href="../páginas/femininoVerão.html">Roupas de verão</a></li>
                    <li class='lista-calçados'><a class='link' href="../páginas/femininoCalçados.html">Calçados</a></li>
                </ul>
            </li>
            <li class='lista0'>

                |
            </li>

            <li class='lista1'>
                <br>
                <a href="#">Infantil</a>
                <ul class='lista2'>
                    <li class='lista-inverno' href="../páginas/infantil-Inverno.html"><a class='link' >Roupas de
                            inverno</a></li>
                    <li class='lista-verão' href="../páginas/infantil-Verão.html"><a class='link' >Roupas de verão</a>
                    </li>
                    <li class='lista-calçados' href="../páginas/infantilCalçados.html"><a class='link' >Calçados</a></li>
                </ul>
            </li>


            <li class='lista5'>

                <a href="../login php/comum.php">Início</a>
            </li>



            <li class="lista1">

                <a> <img class="imagem-login" src="../icons/user.png"> Perfil</a>
                <ul class="lista2">
                    <li class="lista-carrinho">
                        <a href="../páginas/carrinho.html">Meu carrinho</a>
                    </li>

                </ul>
            </li>
            <li class='lista0'>|</li>

            <a href="logout.php">Sair</a>

        </ul>

        </ul>
    </div>





    <i>
        <p class="Bem-vindos">Bem-vindo</p>
    </i>


    <div class="container">


        <ul class="gallery">
            <li class="carousel" id="imagem1"></li>
            <li class="carousel" id="imagem2"></li>
            <li class="carousel" id="imagem3"></li>
            <li class="carousel" id="imagem4"></li>
            <li class="carousel" id="imagem5"></li>
        </ul>
    </div>

    <script src="páginas/index.js"></script>


    <!-- o resto do conteúdo da página -->

    <footer class="footer-index">
        <p>&copy; 2023 Minha Loja de Roupas. Todos os direitos reservados.</p>
    </footer>





</body>

</html>