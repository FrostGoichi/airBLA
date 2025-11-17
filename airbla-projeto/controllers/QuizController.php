<?php

function mostrarQuiz() {
    global $QUIZ;
    $mensagem = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $alternativaEscolhida = $_POST['alternativa'] ?? null;

        if ($alternativaEscolhida === null) {
            $mensagem = "Selecione uma alternativa.";
        } else {
            $correta = false;
            foreach ($QUIZ['alternativas'] as $alt) {
                if ($alt['id'] == $alternativaEscolhida && $alt['correta']) {
                    $correta = true;
                }
            }

            $mensagem = $correta
                ? "Resposta correta! Isso representa a cultura AirBLÁ."
                : "Resposta incorreta. Tente pensar nos valores da empresa.";
        }
    }

    include __DIR__ . '/../views/quiz.php';
}