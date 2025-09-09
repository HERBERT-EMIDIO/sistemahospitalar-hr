<?php
// Inclua arquivos de configuração ou de lógica aqui, se necessário
// require_once __DIR__ . '/../../core/Database.php';
// require_once __DIR__ . '/../../core/Auth.php';

// Inicia a sessão para controle de login, se não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital da Restauração - Home</title>
    <link href="img/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="d-flex align-items-center">
                <button id="sidebarToggle" class="btn-toggle-sidebar me-2 d-lg-none">
                    <i class="fas fa-bars"></i>
                </button>
                <img src="img/hr_logo.png" alt="Hospital da Restauração">
                <h1>Hospital da Restauração</h1>
            </div>
            
            <div class="d-none d-md-flex align-items-center">
                <div class="dropdown me-3">
                    <button class="btn bg-transparent border-0 text-white dropdown-toggle" type="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger rounded-circle position-absolute top-0 end-0" style="font-size: 0.6rem; transform: translate(25%, -25%);">3</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                        <li><h6 class="dropdown-header">Notificações</h6></li>
                        <li><a class="dropdown-item" href="#">Novos prestadores cadastrados</a></li>
                        <li><a class="dropdown-item" href="#">Atualização do sistema</a></li>
                        <li><a class="dropdown-item" href="#">Solicitação de aprovação</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="#">Ver todas</a></li>
                    </ul>
                </div>
                
                <div class="dropdown">
                    <button class="btn bg-transparent border-0 text-white dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="rounded-circle bg-white text-primary d-flex justify-content-center align-items-center me-2" style="width: 32px; height: 32px;">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>Administrador</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Configurações</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="app-container">
        <aside class="sidebar">
            <nav class="nav-menu">
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="prestador_view.php" class="nav-link">
                            <i class="fas fa-user-md"></i>
                            <span>Cadastrar Prestador</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="listar_view.php" class="nav-link">
                            <i class="fas fa-list"></i>
                            <span>Listar Prestadores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ramais_view.php" class="nav-link">
                            <i class="fas fa-phone"></i>
                            <span>Lista de Ramais</span>
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#linksUteis" aria-expanded="false">
                            <i class="fas fa-link"></i>
                            <span>Links Úteis</span>
                            <i class="fas fa-chevron-down nav-dropdown-arrow ms-auto"></i>
                        </a>
                        <div class="collapse nav-dropdown-content" id="linksUteis">
                            <ul class="nav-dropdown-menu">
                                <li><a href="http://10.17.60.27:8088/painel-hr/index.php" class="nav-dropdown-item" target="_blank">
                                    <i class="fas fa-external-link-alt me-2"></i>Painel HR
                                </a></li>
                                <li><a href="relatorio_atendimentos.php" class="nav-dropdown-item">
                                    <i class="fas fa-chart-line me-2"></i>Atendimentos Não Agendados
                                </a></li>
                                <li><a href="relatorio_agendados.php" class="nav-dropdown-item">
                                    <i class="fas fa-calendar-check me-2"></i>Atendimentos Agendados
                                </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Configurações</span>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="#" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="content-wrapper">