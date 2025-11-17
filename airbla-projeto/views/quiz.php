<main>
    <h2>Quiz Cultural</h2>

<?php if (!empty($mensagem)): ?>
    <div class="mensagem <?php echo strpos($mensagem, 'correta') !== false ? 'mensagem-sucesso' : 'mensagem-erro'; ?>">
        <?php echo htmlspecialchars($mensagem); ?>
    </div>
<?php endif; ?>

    <form method="POST" action="index.php?page=quiz">
        <p><strong><?php echo htmlspecialchars($QUIZ['pergunta']); ?></strong></p>

<?php foreach ($QUIZ['alternativas'] as $alt): ?>
    <label class="quiz-alternativa">
        <input type="radio" name="alternativa" value="<?php echo $alt['id']; ?>">
        <?php echo htmlspecialchars($alt['texto']); ?>
    </label><br>
<?php endforeach; ?>

        <br>
        <button type="submit">Responder</button>
    </form>
</main>