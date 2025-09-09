<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hospital da Restauração</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="assets/img/hr_logo.png" alt="Logo HR">
        <h3>Login do Sistema</h3>
        <form action="login_process.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="cpf" placeholder="Digite seu CPF" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span></span>
                <a href="#">Esqueceu a senha?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
    </div>
</body>
</html>