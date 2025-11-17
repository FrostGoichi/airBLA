<?php

function mostrarLogin() {
    global $USUARIOS;
    $erro = null;

    // Se veio POST, tenta autenticar
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        foreach ($USUARIOS as $u) {
            if ($u['email'] === $email && $u['senha'] === $senha) {
                // Login OK: salva usuário na sessão e redireciona
                $_SESSION['user'] = $u;
                header("Location: index.php?page=home");
                exit;
            }
        }

        $erro = "Email ou senha incorretos.";
    }

    // Se não logou, mostra a tela de login com header e footer
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/login.php';
    include __DIR__ . '/../views/footer.php';
}

function fazerLogout() {
    $_SESSION = [];
    session_destroy();

    header("Location: index.php?page=login");
    exit;
}