<section class="auth-shell">

    <div class="auth-card">

        <h1 class="auth-title">Reset password</h1>

        <p class="auth-description">Preencha seus dados to reset password.</p>

        <form class="form-grid" method="post" action="">

            <div class="form-field">
                <label class="form-label" for="email">E-mail</label>
                <input class="form-input" type="email" id="email" name="email" placeholder="seuemail@empresa.com" autocomplete="email" required>
            </div>

            <button class="btn-primary" type="submit">Reset password</button>
        </form>

        <div class="auth-footer">
            Já tem uma conta? <a href="<?php echo $_SERVER['PHP_SELF'];?>">Entrar</a>
        </div>

    </div>

</section>
