<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\produto.css">
    <title>Produtos</title>
    <link rel="icon" href="assets/img/icone.png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="product.php">
            <img src="assets/img/petmon.png" alt="logotipo">
        </a>
        <br>
        <nav>

            <ul>
                <li><a href="index1.php">Início</a></li>
                <li><a href="product.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="sort.php">Snorlax Horóscopo</a></li>
            </ul>
        </nav>
    </header>
    <section id="produtos">
        <h2>Nossas Fantasias</h2>
        <ul class="lista-produtos">
            <li class="produto" id="pikachu">
                <img src="assets\img\DogPikachu.jpeg" alt="Fantasia Pikachu">
                <h3>Fantasia Pikachu</h3>
                <p class="descricao">Transforme seu cachorro em um Pikachu com esta fofa fantasia amarela.</p>
                <p class="preco">Preço: 197,00</p>
                <button class="comprar-button" onclick="mostrarDetalhes('pikachu')">Ver</button>
            </li>
            <li class="produto" id="charizard">
                <img src="assets\img\DogCharizard.jpeg" alt="Fantasia Charizard">
                <h3>Fantasia Charizard</h3>
                <p class="descricao">Deixe seu cão se sentir como um verdadeiro Charizard com esta fantasia vermelha impressionante.</p>
                <p class="preco">Preço: 197,00</p>
                <button class="comprar-button" onclick="mostrarDetalhes('charizard')">Ver</button>
            </li>
            <li class="produto" id="mewtwo">
                <img src="assets\img\DogMewtwo.jpeg" alt="Fantasia Mewtwo">
                <h3>Fantasia Mewtwo</h3>
                <p class="descricao">Transforme seu cachorro em um poderoso Mewtwo com esta fantasia roxa e psíquica.</p>
                <p class="preco">Preço: 197,00</p>
                <button class="comprar-button" onclick="mostrarDetalhes('mewtwo')">Ver</button>
            </li>
        </ul>
    </section>
    <section id="detalhes-pikachu" class="detalhes-produto" style="display: none;">
        <h3>Detalhes do Produto:Fantasia Pikachu</h3>
        <img src="assets\img\DogPikachu.jpeg" alt="Fantasia Pikachu">
        <p class="descricao">Transforme o seu cão em um adorável Pikachu com esta encantadora fantasia amarela. Seu melhor amigo de quatro patas vai se sentir como uma estrela Pokémon com orelhas pontudas e uma cauda reluzente. Seja o centro das atenções nos passeios, festas e eventos cosplay!
            Características Especiais:
            Orelhas pontudas e reluzentes.
            Design autêntico do Pikachu.
            Confortável e fácil de colocar.</p>
        <p class="preco">Preço: 197,00</p>
        <button class="comprar-button" onclick="comprar('pikachu')">Comprar</button>
    </section>
    
    <section id="detalhes-charizard" class="detalhes-produto" style="display: none;">
        <h3>Detalhes do Produto: Fantasia Charizard</h3>
        <img src="assets\img\DogCharizard.jpeg" alt="Fantasia Charizard">
        <p class="descricao">Deixe o seu cãozinho se transformar em um poderoso Charizard com esta impressionante fantasia vermelha. Com asas majestosas e uma chama na cauda, seu cão será a estrela de qualquer evento. Ideal para festas a fantasia, Halloween e sessões de fotos épicas!
            Características Especiais:
            Asas majestosas e cauda flamejante.
            Detalhes autênticos do Charizard.
            Design impressionante e realista.</p>
        <p class="preco">Preço: 197,00</p>
        <button class="comprar-button" onclick="comprar('charizard')">Comprar</button>
    </section>
    <section id="detalhes-mewtwo" class="detalhes-produto" style="display: none;">
        <h3>Detalhes do Produto: Fantasia Mewtwo</h3>
        <img src="assets\img\DogMewtwo.jpeg" alt="Fantasia Mewtwo">
        <p class="descricao">Transforme o seu cão em um poderoso Mewtwo com esta fantasia roxa e psíquica. Seu cachorro se destacará entre a multidão com um visual futurista e misterioso. Perfeito para eventos de jogos, cosplay e sessões de fotos únicas.
    Características Especiais:
            Design psíquico e futurista.
            Detalhes autênticos do Mewtwo.
            Confortável e fácil de vestir.</p>
        <p class="preco">Preço: 197,00</p>
        <button class="comprar-button" onclick="comprar('mewtwo')">Comprar</button>
    </section>
    <footer>
        <div class="logo">
            <img src="assets\img\Logo.jpeg" alt="Logo da Empresa" class="logo-rodape">
        </div>
        <p>&copy; 2023 Fantasias de Pokémon para Cachorros. Todos os direitos reservados.</p>
    </footer>
    
    <script>
        function mostrarDetalhes(produtoId) {
            // Esconde todos os detalhes do produto
            const detalhesProdutos = document.querySelectorAll(".detalhes-produto");
            detalhesProdutos.forEach((detalhes) => {
                detalhes.style.display = "none";
            });

            // Mostra os detalhes do produto especificado
            const detalhesProduto = document.getElementById(`detalhes-${produtoId}`);
            detalhesProduto.style.display = "block";
        }

        function comprar(produtoId) {
            alert(`Você comprou o produto: ${produtoId}`);
        }
    </script>
</body>
</html>