<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bienvenidos a Nosotros</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img\Logo_sin_fondo.png">

    <style>
        /* Estilos personalizados */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0%;
            padding: 0%;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #33a0cc;
        }

        p {
            color: #666;
        }

        .image-container {

            margin-bottom: 20px;
        }

        .navbar {
            background-color: seagreen;
            color: #f0f0f0;
            padding: 10px;
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
    <div class="heroe">

        <h1>Bienvenidos a Hydroponic CO</h1>

        <h2>Donde tus plantas crecen con placer</h2>

    </div>

    </header>

    <!-- CONTENT -->

    <section>

        <h1>¿Que es este proyecto?</h1>
        <h4>Nosotros somos GiziSmart un emprendimiento de cultivos hidroponicos automatizados dirigido a las personas
            sin espacio o tiempo.</h3>

            <h2>¿Porque realizaremos este proyecto?</h2>
            <h4>Este proyecto lo realizamos con la idea de resolver una problematica social la cual es la falta de
                espacio y tiempo para realizar la actividad agricolas, osea la gente que le gusta tener su huarta con
                sus propias verduras</h4>

            <h2>¿De donde surgio esta idea?</h2>
            <h4>Esta idea surgio porque justo estaba llegando la epoco de ir a estudiar a una universidad y casi siempre
                el espacio en el que habitas no te otorga mucho espacio para tus ectividades o directamente tus
                labores/educativas no te dejan tiempo.<br>
                <br> Entonces de ahi salio la idea de hacer cultivos hydroponicos que se pueden hacer en cualquier lado
                y automatizarlo por el lado de la falta de tiempo.
            </h4>

            <h2>¿Que materiales utilizaremos?</h2>
            <h4>Los materiales que utilizamos son materiales economiv¿cos ya que queremos que sea un producto accecible
                para todos, asi que con lo dicho antes los materiales utilizados son:
                <ul>◉ Tubo cloaclaes</ul>
                <ul>◉ Placa Nodemcu Esp32 Wifi + Bluetooth 4.2</ul>
                <ul>◉ Macetas</ul>
                <ul>◉ Bomba Rs013 2000 L/h 1,5m</ul>
                <ul>◉ Sensor de humedad Arduino</ul>
                <ul></ul>
            </h4>
            <h2>¿?</h2>
    </section>

</body>

</html>