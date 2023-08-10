<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Catálogo de Ventas</title>

    <script src="https://cdn.tailwindcss.com"></script>
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

        /*----------Producto---------*/
        .productos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin: 0 !important;
            padding: 0 60px !important;

        }

        .producto {
            display: flex;
            flex-direction: column;
            border-radius: 10px 10px 10px 10px;
            list-style: none;
            min-width: 300px;
            padding: 20px;
            gap: 8px;
            transition: 200ms ease-in;
            align-items: center;
        }

        .producto>a {
            border: none;
            border-radius: 10px;
            padding: 12px 0;
            aspect-ratio: 1 / 1;
            text-decoration: none;
            text-align: left;
            margin: 0 auto;
            background-color: ;
            width: 90%;
            color: #000;
            display: grid;
            place-items: center;
        }

        .tituloprodu {
            border: none;
            text-align: center;
            color: black;
        }

        /*----------texto e imagen---------*/

        .img {
            max-height: 220px;
            height: 100%;
            object-fit: contain;
            transition: 200ms ease-in;
            box-shadow: 6px 31px 102px -71px rgba(0, 0, 0, 0.75) inset;
            -webkit-box-shadow: 6px 31px 102px -71px rgba(0, 0, 0, 0.75) inset;
            -moz-box-shadow: 6px 31px 102px -71px rgba(0, 0, 0, 0.75) inset;
            border-radius: 10px 10px 10px 10px;
            padding: 10px;
        }

        .img:hover {
            transform: scale(1.2);
        }

        .texts {
            margin: 0%;
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

    <h1 class="TITULOO">Catálogo de Ventas</h1>

    <?php if (!empty($producto)): ?>
        <ul class="productos">
            <?php foreach ($producto as $product): ?>
                <li class="producto">



                    <?php if (!empty($product['image'])): ?>

                        <a href=<?php echo base_url("product/" . $product['id']) ?> class="text-red-700"> <img class="img"
                                src="http://localhost/TesinaTF/public<?= $product['image'] ?>" alt="Imagen del producto"></a>

                        <h3 class="tituloprodu">
                            <?= $product['name'] ?>
                        </h3>
                        <p>Precio: $
                            <?= $product['price'] ?> USD
                        </p>

                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>

        <p>No hay productos disponibles en este momento.</p>
    <?php endif; ?>


</body>

</html>