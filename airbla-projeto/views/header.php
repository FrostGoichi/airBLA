<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AirBLÁ - Cultura Organizacional</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <header>
        <h1>Plataforma de Cultura AirBLÁ</h1>

        <?php if (isset($_SESSION['user'])): ?>
            <p>Logado como: 
                <strong><?php echo htmlspecialchars($_SESSION['user']['nome']); ?></strong>
                | <a href="index.php?page=logout">Sair</a>
            </p>
        <?php endif; ?>

        <nav>
            <a href="index.php?page=home">Início</a> |
            <a href="index.php?page=trilhas">Trilhas</a> |
            <a href="index.php?page=quiz">Quiz</a> |
            <a href="index.php?page=checkin">Check-in</a>
        </nav>
        <hr>
    </header>