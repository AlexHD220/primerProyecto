<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=X-UA-Compatible content = "ie-edge"> 
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="" method="post">
        <label for = "correo"></label><br>
        <input type="email" name="correo"><br>
        <label for = "comentario"></label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="30"></textarea><br>

        <label for = "tipo">Tipo:</label><br>    
        <select name="tipo">
            <option value="alumno">Alumno</option>
            <option value="empleado">Empleado</option>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>