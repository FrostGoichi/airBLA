<main>
    <div class="card auth-card">
        <h2 class="login-title">Entrar na plataforma</h2>
        <p class="login-subtitle">
            Use suas credenciais da AirBLÁ para acessar as trilhas culturais.
        </p>

        <?php if (!empty($erro)): ?>
            <div class="mensagem mensagem-erro">
                <?php echo htmlspecialchars($erro); ?>
            </div>
        <?php endif; ?>

        <form action="index.php?page=login" method="POST">
            <label>Email</label>
            <input type="text" name="email" placeholder="voce@airbla.com">

            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha">

            <button type="submit">Entrar</button>
        </form>

        <p class="helper" style="margin-top: 0.9rem;">
            Exemplo para testes: <code>bruno@airbla.com</code> / senha <code>1234</code>
        </p>
    </div>
</main>