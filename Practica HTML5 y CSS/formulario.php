<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="nav">
            <a href="index.html">Index</a>
            <a href="formulario.html">Formulario</a>
        </div>
        <br>
        
        <h1>Lisseth Abigail Martínez Castillo</h1>
        <hr width="80%">
    
    </header>
    <?php
        $nombre = $_POST['name'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $sql = "INSERT INTO usuarios(nombre,correo,password)
        VALUES('$nombre','$correo','$password')";
        $conn->exec($sql);
    ?>
    
    <main>
        <form method="get" action="formulario.html">
            <label for="name">Ingresa tu nombre:</label>
            <input type="text" id="name" name="name" placeholder="Nombre">
            <br>
            <label for="email">Ingresa tu correo:</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com">
            <br>
            <label>Género:</label>
            <br>
            <input type="radio" id="male" name="genre" value="male">
            <label for="male">Hombre</label>
            <input type="radio" id="female" name="genre" value="female">
            <label for="female">Mujer</label>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <br>
            <label for="comment">Comentario:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <label for="city">Ciudad:</label>
            <select name="city" id="city">
                <option value="1">Guadalajara</option>
                <option value="2">Zapopan</option>
                <option value="3">Tonalá</option>
                <option value="4">Otra</option>
            </select>
            <br>
            <input type="checkbox" id="contact" name="contact">
            <label for="contact">Me interesa contactarte</label>
            <br>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </main>
    <div class="footer">
        <h3><a href="mailto:lis.seth2k16@gmail.com">Contáctame aquí!</a></h3>

    </div>    
</body>
</html>