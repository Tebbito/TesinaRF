<!DOCTYPE html>
<html>

<head>
    <title>Carrito de compras</title>
    <style>
        /*---------Cuerpo------- */
        body {
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
            margin: 0%;
            padding: 0%;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #33a0cc;
        }

        p {
            color: #666;
        }

        .TITULOO {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 80px;
            font-size: 40px;
            color: rgb(2, 56, 62);
        }

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

</head>

<body>
    <div class="cuadrado"></div>
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
    <h1>Carrito de compras</h1>

    <?php if (empty($cartItems)): ?>
        <p>No hay productos en el carrito.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cartItems as $item): ?>
                <li>
                    <?php echo $item['product_id']; ?> -
                    <?php echo $item['quantity']; ?> unidades
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>