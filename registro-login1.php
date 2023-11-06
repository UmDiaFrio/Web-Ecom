<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Acesso</title>
    <link rel="stylesheet" href="assets/css/registro.css">
    <link rel="icon" href="assets/img/Logo.jpeg" type="image/x-icon">
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
    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class "links" id="paralogin"></a>
        
        <div class="content">      
          
          <div id="login">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
              <h1>Login</h1> 
              <p> 
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="text" placeholder="mewtow@gmail.com"/>
              </p>
              
              <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="8888" /> 
              </p>
              
              <p> 
                <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                <label for="manterlogado">Manter-me logado</label>
              </p>
              
              <p> 
                <input type="submit" value="Logar" name="loginSubmit" /> 
              </p>
              
              <p class="link">
                Ainda não tem conta?
                <a href="#paracadastro">Cadastre-se</a>
              </p>
            </form>
          </div>
    
          <div id="cadastro">
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validatePassword()">
              <h1>Cadastro</h1> 
              
              <p> 
                <label for="nome_cad">Seu nome</label>
                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Pikachu" />
              </p>
              
              <p> 
                <label for="email_cad">Seu e-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="mewtow@gmail.com"/> 
              </p>
              
              <p> 
                <label for="senha_cad">Sua senha</label>
                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="8888"/>
              </p>
              
              <p> 
                <input type="submit" value="Cadastrar" name="registrationSubmit" /> 
              </p>
              
              <p class="link">  
                Já tem conta?
                <a href="#paralogin"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div>
      </div> 
</body>
</html>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registrationSubmit'])) {
    $db_host = 'Localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'form_login_webdev';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $senha = $_POST['senha_cad'];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === true) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginSubmit'])) {
    $db_host = 'Localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'form_login_webdev';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email_login'];
    $password = $_POST['senha_login'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password === $row['senha']) {
            echo "Login successful!";
        } else {
            echo "Senha inválida!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $conn->close();
    $_SESSION['user_id'] = $row['idusuarios']; 
    $_SESSION['user_nome'] = $row['nome']; 
    header("Location: index1.php");
    exit();
}
?>

<script>
function validatePassword() {
    var senha = document.getElementById('senha_cad').value;

    // Verifique se a senha atende aos critérios
    if (!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,15}$/.test(senha)) {
        alert("A senha não atende aos critérios. Ela deve ter pelo menos 8 caracteres, no máximo 15, conter pelo menos 1 número, 1 letra maiúscula, 1 letra minúscula e 1 caracter especial.");
        return false;
    }
    return true;
}
</script>
