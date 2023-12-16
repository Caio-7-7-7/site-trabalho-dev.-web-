<?php

session_start();

// Simulação de banco de dados para armazenar usuários
$usuarios = [
    'comum' => ['senha' => 'comum123'],
    'admin' => ['senha' => 'admin123'],
    'intermediario' => ['senha' => 'intermediario123']
];

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se o usuário existe e a senha está correta
    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario]['senha'] === $senha) {
        // Define o nível de permissão na sessão
        $_SESSION['permissao'] = $usuario;
    } else {
        // Mensagem de erro para credenciais inválidas
        $erro = "Credenciais inválidas. Tente novamente.";
    }
}

// Verifica se o usuário está autenticado
if (isset($_SESSION['permissao'])) {
    // Redireciona com base no nível de permissão
    if ($_SESSION['permissao'] === 'admin') {
        header("Location: admin.php");
        exit();
    } elseif ($_SESSION['permissao'] === 'intermediario') {
        header("Location: intermediario.php");
        exit();
    } else {
        header("Location:../index(comum).php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../páginas/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





</head>

<body class="body-Login">


    <div class="menuBar">
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
                    <li class='lista-inverno'><a class='link' href="../páginas/infantil-Inverno.html">Roupas de
                            inverno</a></li>
                    <li class='lista-verão'><a class='link' href="../páginas/infantil-Verão.html">Roupas de verão</a>
                    </li>
                    <li class='lista-calçados'><a class='link' href="../páginas/infantilCalçados.html">Calçados</a></li>
                </ul>
            </li>


            <li class='lista5'>

                <a href="../index(comum).php">Início</a>
            </li>



            <li class='lista6'>

                <a href="../páginas/cadastro.html" target="_blank">Junte-se a nós</a>
            </li>

            <li class='lista0'>

                |
            </li>

            <li class='lista7'>


                <a href="login.php" target="_blank">login</a>
            </li>
        </ul>
    </div>




    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="" class="formulario">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" required>

            <br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>

            <br>

            <button type="submit">Entrar</button>

            <br><br> <br><br>

            <?php if (isset($erro)): ?>
                <p style="color: red;">
                    <?php echo $erro; ?>
                </p>
            <?php endif; ?>
        </form>
    </div>













</body>

</html>