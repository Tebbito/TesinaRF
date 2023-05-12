<h1>Iniciar sesión</h1>

<form method="post" action="<?= site_url('auth/login') ?>">
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
</form>