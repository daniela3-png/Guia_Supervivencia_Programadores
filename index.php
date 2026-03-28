<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0">
    <title>Guía de Supervivencia - Daniela</title>

    <style>
        body {
            background-color: #a625e8;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        header, footer {
            background-color: #1da5ea;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
        nav {
            background: #ddd;
            padding: 5px;
        }
        main {
            padding: 20px;
        }
        section {
            border: 3px solid #000000;
            margin-bottom: 10px;
            padding: 10px;
            background: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center; /* Aprovechamos de centrar el texto de la tabla */
        }

        /* Clase para centrar las imágenes como querías */
        td img {
            display: block;
            margin: 0 auto;
            border-radius: 8px; /* Un toque de la semana 3 */
        }
    </style>
</head>
<body>

<header>
    <h1>Guía de supervivencia para Programadores novatos...</h1>
</header>

<nav>
    <a href="#">Inicio</a> | <a href="#">Personajes</a>
</nav>

<main>
    <section>
        <h2>Bienvenidos</h2>
        <p>Un nuevo espacio de experimentación en código, espero no morir en el intento.</p>
    </section>

    <section>
        <h2>Mis Aliados</h2>
        <table>
            <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="Hatsune.jpg" width="100" alt="Virgen Hatsune Miku"></td>
                <td>Virgen Hatsune Miku</td>
            </tr>
            <tr>
                <td><img src="jojojisus.webp" width="100" alt="JoJo Jisus"></td>
                <td>JoJo Jisus</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2">Total de aliados: 2</td>
            </tr>
            </tfoot>
        </table>
    </section>
</main>

<footer>
    <p>Daniela Montecinos - 2026</p>
</footer>

</body>
