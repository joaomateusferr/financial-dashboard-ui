<section class="auth-shell">

    <div class="auth-card">

        <h1 class="auth-title">Criar sua conta</h1>

        <p class="auth-description">Preencha seus dados para começar a usar o painel.</p>

        <form class="form-grid" method="post" action="">

            <div class="form-field">
                <label class="form-label" for="email">E-mail</label>
                <input class="form-input" type="email" id="email" name="email" placeholder="seuemail@empresa.com" autocomplete="email" required>
            </div>

            <div class="form-field">
                <label class="form-label" for="password">Senha</label>
                <input class="form-input" type="password" id="password" name="password" placeholder="Crie uma senha" autocomplete="new-password" minlength="8" required>
            </div>

            <div class="form-field">
                <label class="form-label" for="password_confirmation">Confirmar senha</label>
                <input class="form-input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repita sua senha" autocomplete="new-password" minlength="8" required>
            </div>

            <button class="btn-primary" type="submit">Criar conta</button>
        </form>

        <div class="auth-footer">
            Já tem uma conta? <a href="<?php echo $_SERVER['PHP_SELF'];?>">Entrar</a>
        </div>

    </div>

</section>
