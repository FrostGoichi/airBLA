<main>
    <h2>Check-in Cultural</h2>

<?php if (!empty($mensagem)): ?>
    <div class="mensagem mensagem-sucesso">
        <?php echo htmlspecialchars($mensagem); ?>
    </div>
<?php endif; ?>

    <form method="POST" action="index.php?page=checkin">
        <label>Seu humor hoje:</label><br>
        <select name="humor">
            <option value="">Selecione</option>
            <option value="bem">Bem</option>
            <option value="neutro">Neutro</option>
            <option value="sobrecarregado">Sobrecarregado</option>
        </select>
        <br><br>

        <label>Comentário (opcional):</label><br>
        <textarea name="comentario" rows="3" cols="40"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</main>