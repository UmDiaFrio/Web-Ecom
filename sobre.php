<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\produto.css">
    <title>Sobre Nós</title>
    <link rel="icon" href="assets/img/Logo.jpeg" type="image/x-icon">
    <style>
        body {
            background-size: 1920px 720px;
            background-repeat: round;
            background-attachment: fixed;
        }

        header {
            background: rgba(0, 0, 0, 0.8);
            color: #e51c23;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);

        }

        header h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            border-radius: 10px;
        }


        #sobre {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 40px;
            margin-top: 5%;
        }

        #sobre h2 {
            font-size: 2.8rem;
            color: #e51c23;
            text-transform: uppercase;
        }

        .sobre-texto {
            font-size: 1.6rem;
            margin: 20px 0;
        }

        footer {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            color: #e51c23;
            text-align: center;
            padding: 20px;
            width: 98%;
        }

        footer img {
            max-width: 100px;
            border-radius: 50%;
            margin-right: 10px;
        }

        footer p {
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <header>
        <a href="product.php">
            <img src="assets/img/petmon.png" alt="logotipo">
        </a>
        <nav>
            <ul>
                <li><a href="index1.php">Início</a></li>
                <li><a href="product.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="sort.php">Snorlax Horóscopo</a></li>
            </ul>
        </nav>
    </header>
    <section id="sobre">
        <h2>Nossa História</h2>
        <p class="sobre-texto">
            Somos uma loja apaixonada por cães e Pokémon. A ideia para a nossa loja "Petmon" surgiu quando percebemos
            que não havia fantasias legais o suficiente para nossos fiéis amigos de quatro patas.
        </p>
        <p class="sobre-texto">
            Decidimos então unir nossa paixão por Pokémon e nossa devoção aos nossos cães para criar algo especial.
            Nossas fantasias são feitas com materiais de alta qualidade para garantir o conforto e a felicidade de seus
            animais de estimação.
        </p>
        <p class="sobre-texto">
            Na Petmon, acreditamos que nossos amigos peludos merecem o melhor. Estamos comprometidos em fornecer
            fantasias que transformarão seu cão em um verdadeiro Pokémon, fazendo com que ele se destaque em qualquer
            ocasião.
        </p>
    </section>
    <footer>
        <img src="assets\img\Logo.jpeg" alt="Logo da Empresa">
        <p>&copy; 2023 Fantasias de Pokémon para Cachorros. Todos os direitos reservados.</p>
    </footer>
</body>

</html>