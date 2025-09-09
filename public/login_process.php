<?php
session_start();

// O caminho para o arquivo de conexão com o banco de dados
// é relativo à raiz do projeto, então precisamos voltar uma pasta.
require_once __DIR__ . '/../core/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = trim($_POST['cpf']);
    $senha = trim($_POST['senha']);

    if (empty($cpf) || empty($senha)) {
        header("Location: login.php?erro=Campos vazios");
        exit();
    }

    try {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE cpf = ?");
        $stmt->execute([$cpf]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Verificar a senha
            if (password_verify($senha, $usuario['senha'])) { // Assumindo que a senha está hasheada
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $usuario['id'];
                $_SESSION['user_name'] = $usuario['nome'];
                $_SESSION['role'] = $usuario['perfil']; // Exemplo de perfil de usuário
                
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?erro=Senha incorreta");
                exit();
            }
        } else {
            header("Location: login.php?erro=Usuário não encontrado");
            exit();
        }

    } catch (PDOException $e) {
        // Em caso de erro, redireciona para o login com a mensagem de erro
        header("Location: login.php?erro=" . urlencode($e->getMessage()));
        exit();
    }
} else {
    // Redireciona para o login se a página for acessada diretamente
    header("Location: login.php");
    exit();
}