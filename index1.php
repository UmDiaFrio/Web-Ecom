<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" >
    <title>Home</title>
    <link href="assets\css\style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="assets/img/Logo.jpeg" type="image/x-icon">

</head>

<body>
    <header>       
        <a href="index1.php">
            <img src="assets/img/petmon.png" alt="logotipo">
        </a>
        <div class="menu">
            <ul>
                <li><a href="index1.php">Página Inicial</a></li>
                <li><a href="product.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="sort.php"> Snorlax Horóscopo </a></li>
            </ul>
        </div>
        <div class="login">
            <?php
            session_start();

            if (isset($_SESSION['user_id'])) {
                // Se o usuário estiver logado, mostre o nome do usuário e um link para fazer logout
                $nome = $_SESSION['user_nome'];
                echo "Bem-vindo, $nome! | <a href='logout.php'>Logout</a>";
            } else {
                // Se o usuário não estiver logado, mostre links para login e registro
                echo '<a href="registro-login1.php">Login</a> | <a href="registro-login1.php">Registrar</a>';
            }
            ?>
        </div>
    </header>
    </header>

    
    <div class="content">
        <h1>Bem-vindo à Petmon</h1>
        <p id="paragrafo">Aqui voce transforma seu amigao em um pokémon.</p>
    </div>

    
    <div class="destaques">
        <div class="produtos">
            <h2>Nossos Produtos</h2>
            <p>Escolha a melhor fantasia para seu doguinho.</p>
            <a href="product.php">Explorar Catálogo</a>
        </div>
        <div class="servicos">
            <h2>Snorlax e seu Horóscopo pokémon</h2>
            <p>Descubra qual Pokémon você é com ajuda do Snorlax.</p>
            <a href="sort.php">Snorlax Horóscopo</a>
        </div>
    </div>

    
    <footer>
        <div class="info">
            <p>Informações de Contato</p>
            <div class="contato-info">
                <img src="/assets/img/envelope.png" alt="Ícone de e-mail" style="max-width: 20px; max-height: 20px;">
                <a style="color: azure;" href="mailto:contato@petmon.com">contato@petmon.com</a><br>
            </div>
            <div class="contato-info"><br>
                <img src="/assets/img/chamada-telefonica.png" alt="Ícone de telefone" style="max-width: 20px; max-height: 20px;">
                <p>(99) 1234-5699</p>
            </div>
        </div>
        
        <div class="logo-simbolo">
            <img src="assets\img\Logo.jpeg" alt="Logo Simbolo">
        </div>
    </footer>
    
</body>

</html>