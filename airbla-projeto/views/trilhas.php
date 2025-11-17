<main>
    <h2>Trilhas Culturais</h2>

    <?php foreach ($TRILHAS as $t): ?>
        <article style="margin-bottom: 20px;">
            <h3><?php echo htmlspecialchars($t['titulo']); ?></h3>
            <p><?php echo htmlspecialchars($t['descricao']); ?></p>
        </article>
    <?php endforeach; ?>
</main>