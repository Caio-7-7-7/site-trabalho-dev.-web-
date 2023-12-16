<?php
session_start();

// Destroi a sessão (remove todas as variáveis de sessão)
session_destroy();

// Redireciona para a página de login
header("Location:../index(comum).php");
exit();
?>