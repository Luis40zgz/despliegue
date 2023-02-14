<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despliegue</title>
</head>
<body>
    <header>
        <div class="fondo"></div>
        <nav>
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./contenido.php">Contenido</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="#">
            <fieldset>
                <legend>Contacto</legend>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="subject">Asunto:</label>
                <input type="text" name="subject" id="subject">
                <label for="message">Mensaje:</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <button type="submit">Enviar</button>
                <button type="reset">Borrar</button>
            </fieldset>
        </form>
    </main>
    <footer>
        <section>
            <h2></h2>
            <p></p>
        </section>
        <div class="redes"></div>
    </footer>
</body>
</html>