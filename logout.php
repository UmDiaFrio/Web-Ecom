<?php
session_start();

// Destroi todas as variáveis de sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona o usuário para a página inicial
header("Location:index1.php");
exit();
?>
