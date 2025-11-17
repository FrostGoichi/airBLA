<?php
session_start();

require_once __DIR__ . '/models/dados.php';
require_once __DIR__ . '/controllers/LoginController.php';
require_once __DIR__ . '/controllers/TrilhasController.php';
require_once __DIR__ . '/controllers/QuizController.php';
require_once __DIR__ . '/controllers/CheckinController.php';

$pagina = $_GET['page'] ?? 'home';

// se não estiver logado e não for login, manda pro login
if (!isset($_SESSION['user']) && $pagina !== 'login') {
    $pagina = 'login';
}

// logout
if ($pagina === 'logout') {
    fazerLogout();
    exit;
}

// login (controller cuida do header/footer)
if ($pagina === 'login') {
    mostrarLogin();
    exit;
}

// resto das páginas
include __DIR__ . '/views/header.php';

switch ($pagina) {
    case 'trilhas':
        mostrarTrilhas();
        break;

    case 'quiz':
        mostrarQuiz();
        break;

    case 'checkin':
        mostrarCheckin();
        break;

    case 'home':
    default:
        include __DIR__ . '/views/home.php';
        break;
}

include __DIR__ . '/views/footer.php';