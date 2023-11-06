<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Horóscopo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <style>
        /* Estilos CSS */
        * {
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('assets/img/snorlax.jpg');
            background-size: 55%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #000;
            color: white;
            text-align: center;
            font-family: sans-serif;

        }

        header {
            background: rgba(0, 0, 0, 0);
            color: #e51c23;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            
           
            transition: background 0.3s;
        }

        header h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            border-radius: 10px;
            transition: color 0.3s;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin-left: 15%;
            text-transform: uppercase;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #f76d57;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #e51c23;
        }



        #container {
            margin-top: 100px;
            width: 80%;
            max-width: 400px;
            margin-inline: auto;
            background-color: rgba(4, 4, 4, 0.653);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin-top: 40px;
            margin-bottom: 10px;
            opacity: 0.9;
            font-size: 24px;
        }

        p {
            margin-bottom: 40px;
            opacity: 0.7;
            font-size: 16px;
        }

        select,
        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            margin: 10px 0;
            cursor: pointer;
        }

        select {
            text-align: center;
            background-color: white;
            color: black;
        }

        button {
            background-color: blueviolet;
            color: white;
            transition: filter 0.2s;
        }

        button:hover {
            filter: brightness(1.2);
        }

        #historiaPokemon {
            margin-top: 30px;
            opacity: 0;
            font-size: 16px;
            transition: opacity 1s;
        }
    </style>
</head>

<body>
    <header>
        <a href="index.php">
            <img src="assets/img/petmon.png" alt="logotipo">
        </a>
        <nav>
            <ul>
                <li><a href="index1.php">Início</a></li>
                <li><a href="product.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="sort.php">SNORLAX VIDENTE</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <img src="https://gist.githubusercontent.com/maykbrito/0acdf4ce919838ffed50915a31fc5b23/raw/6f4dd01ec3116428ec4c99255944cb9ac7927590/cristal-ball.svg"
            alt="Imagem de uma bola de cristal">
        <h1>Snorlax Horóscopo</h1>
        <p>Nos diga seu signo para descobrir seu espírito pokémon:</p>
        <input type="text" id="inputSigno" placeholder="Digite o seu signo">
        <button id="buttonRevelar">Revelar Pokémon</button>
        <div id="historiaPokemon">
            <h2 id="nomePokemon">Nome do Pokémon</h2>
            <img id="imagemPokemon" src="" alt="Imagem do Pokémon">
            <p id="descricaoPokemon">Descrição do Pokémon</p>
        </div>

        <script>
            /* Dados dos Pokémon */
            const signosPokemons = {
                aries: {
                    nome: "Blastoise",
                    imagem: "assets/pokemons/Blastoise.jpg",
                    descricao: "Blastoise é um Pokémon aquático. Ele é conhecido por seus poderosos jatos de água que dispara de seus canhões nas costas."
                },
                touro: {
                    nome: "Bulbasaur",
                    imagem: "assets/pokemons/Bulbasaur.jpg",
                    descricao: "Bulbasaur é um Pokémon de grama e veneno. Ele possui um bulbo nas costas, do qual cresce uma planta."
                },
                gemeos: {
                    nome: "Charmander",
                    imagem: "assets/pokemons/Charmander.jpg",
                    descricao: "Charmander é um Pokémon de fogo. Ele possui uma chama na ponta da sua cauda, que queima mais forte conforme evolui."
                },
                cancer: {
                    nome: "Squirtle",
                    imagem: "assets/pokemons/Squirtle.jpg",
                    descricao: "Squirtle é um Pokémon aquático. Ele pode lançar jatos d'água com grande precisão."
                },
                leao: {
                    nome: "Pikachu",
                    imagem: "assets/pokemons/Pikachu.jpg",
                    descricao: "Pikachu é um Pokémon elétrico. Ele é conhecido por sua fofura e habilidades elétricas, como o choque do trovão."
                },
                virgem: {
                    nome: "Jigglypuff",
                    imagem: "assets/pokemons/Jigglypuff.jpg",
                    descricao: "Jigglypuff é um Pokémon normal e de fada. Ele tem uma voz hipnotizante que pode fazer qualquer um dormir."
                },
                libra: {
                    nome: "Meowth",
                    imagem: "assets/pokemons/Meowth.jpg",
                    descricao: "Meowth é um Pokémon normal. Ele é conhecido por sua habilidade de falar a linguagem dos humanos e por sua moeda na testa."
                },
                escorpiao: {
                    nome: "Psyduck",
                    imagem: "assets/pokemons/Psyduck.jpg",
                    descricao: "Psyduck é um Pokémon aquático. Ele sofre constantemente de dores de cabeça, o que aumenta seu poder psíquico."
                },
                sagitario: {
                    nome: "Geodude",
                    imagem: "assets/pokemons/Geodude.jpg",
                    descricao: "Geodude é um Pokémon de pedra e terrestre. Ele é composto principalmente por rochas."
                },
                capricornio: {
                    nome: "Eevee",
                    imagem: "assets/pokemons/Eevee.jpg",
                    descricao: "Eevee é um Pokémon normal. Ele é conhecido por sua habilidade de evoluir para várias formas diferentes."
                },
                aquario: {
                    nome: "Vaporeon",
                    imagem: "assets/pokemons/Vaporeon.jpg",
                    descricao: "Vaporeon é um Pokémon aquático. Seu corpo é composto quase inteiramente por água."
                },
                peixes: {
                    nome: "Mewtwo",
                    imagem: "assets/pokemons/Mewtwo.jpg",
                    descricao: "Mewtwo é um Pokémon psíquico. Ele é conhecido por sua inteligência extraordinária e poderes psíquicos formidáveis."
                }
            };

            const inputSigno = document.getElementById("inputSigno");
            const buttonRevelar = document.getElementById("buttonRevelar");
            const historiaPokemon = document.getElementById("historiaPokemon");
            const nomePokemon = document.getElementById("nomePokemon");
            const imagemPokemon = document.getElementById("imagemPokemon");
            const descricaoPokemon = document.getElementById("descricaoPokemon");

            buttonRevelar.addEventListener("click", () => {
                const signoDigitado = inputSigno.value.toLowerCase(); // Converte para letras minúsculas
                if (signosPokemons[signoDigitado]) {
                    const pokemon = signosPokemons[signoDigitado];
                    nomePokemon.textContent = pokemon.nome;
                    imagemPokemon.src = pokemon.imagem;
                    descricaoPokemon.textContent = pokemon.descricao;
                    historiaPokemon.style.opacity = 1;
                } else {
                    alert("Por favor, digite um signo válido.");
                }
            });
        </script>
    </div>
</body>

</html>