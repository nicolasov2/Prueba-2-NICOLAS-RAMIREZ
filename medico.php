<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontEnd Store</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
<header class="header">
    <a href="index.html">
        <img class="header__logo" src="img/logo.png" alt="Logotipo">
    </a>
</header>

<nav class="navegacion">
    <a class="navegacion__enlace navegacion__enlace--activo" href="index.html">Tienda</a>
    <a class="navegacion__enlace" href="patologias.html">Nosotros</a>
</nav>

<main class="contenedor">
    <h1>React Js</h1>

    <div class="camisa">
        <img class="camisa__imagen" src="img/3.jpg" alt="imagen camisa">
        <div class="camisa__contenido">
            <p>Sed molestie tristique egestas. Integer non eleifend metus. Phasellus tempus diam dolor.
            Nam rhoncus augue ut felis iaculis lacinia. Etiam fringilla turpis sed metus lobortis egestas.
            Vivamus sit amet fermentum lectus. Fusce feugiat iaculis urna, nec rhoncus mi laoreet nec.
            </p>
            <form class="formulario">
                <select class="formulario__campo">
                    <option disabled selected>-- SELECCIONAR TALLA --</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" step="1">
                <input class="formulario__submit" type="submit" value="Agregar al carrito">
            </form>
        </div>
    </div>

</main>

<footer class="footer">
    <p class="footer__texto">Todos los derechos reservados 2022.</p>
</footer>

</body>
</html>