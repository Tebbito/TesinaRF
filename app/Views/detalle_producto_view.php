<!-- detalle_producto.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Detalle del Producto</title>
</head>
<style>
    /*------------NAVBAR----------------*/
    .navbar {
        height: auto;
        background-color: rgb(2, 56, 62);
        border-radius: 0% 0% 10px 10px;
        border-bottom: rgb(201, 255, 106) solid 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar img {
        max-width: 70px;
        max-height: 70px;

    }

    .navbar ul {
        text-align: right;
        list-style-type: none;
        padding: 0;

    }

    .navbar ul li {
        text-align: center;
        display: inline-block;
        margin-right: 0px;

    }

    .navbar ul li a {

        text-align: center;
        color: #fff;
        text-decoration: none;
        padding: 5px;
    }
</style>

<body>
    <div class="navbar">
        <img src="img/chizismart.png" alt="">
        <ul>
            <li><a href="<?php echo base_url('/nosotros'); ?>">Inicio</a></li>
            <li><a href="<?php echo base_url('/'); ?>">Productos</a></li>
            <li><a href="<?php echo base_url('/cart'); ?>">Carrito</a></li>
            <li><a href="/user/profile">Perfil</a></li>
            <li><a href="/Auth/logout">Cerrar sesión</a></li>
        </ul>
    </div>
    <h1>
        <?php echo $result["name"] ?>
    </h1>
    <p>
        <?php echo $result["description"] ?>
    </p>
    <p>alos</p>
</body>

</html>