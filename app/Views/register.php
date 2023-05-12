<h1>Registrarse</h1>

<form method="post" action="<?= site_url('auth/create_user') ?>">
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" required>
    </div>

    <div class="form-group">
        <label for="name">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" required>
    </div>

    <div class="form-group">
        <label for="name">Nombre de Usuario</label>
        <input type="text" name="nameusuario" class="form-control" id="nameusuario" required>
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Registrarse</button>
</form>