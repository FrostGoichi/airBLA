// main.js

// Esse código só roda depois que a página carregar
document.addEventListener('DOMContentLoaded', () => {
    // Validação simples do formulário de quiz no front-end
    const quizForm = document.querySelector('form[action*="page=quiz"]');

    if (quizForm) {
        quizForm.addEventListener('submit', (event) => {
            const alternativaMarcada = quizForm.querySelector('input[name="alternativa"]:checked');

            if (!alternativaMarcada) {
                event.preventDefault(); // impede o envio
                alert('Por favor, selecione uma alternativa antes de enviar o quiz.');
            }
        });
    }
});