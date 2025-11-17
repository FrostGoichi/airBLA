<?php

function mostrarCheckin() {
    $mensagem = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $humor = $_POST['humor'] ?? null;
        $comentario = $_POST['comentario'] ?? '';

        if ($humor == null) {
            $mensagem = "Selecione seu humor.";
        } else {
            $mensagem = "Check-in registrado! Humor: $humor.";
            if ($comentario !== '') {
                $mensagem .= " Comentário: $comentario";
            }
        }
    }

    include __DIR__ . '/../views/checkin.php';
}