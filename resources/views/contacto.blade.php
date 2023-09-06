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
    <form action="contacto" method="post">

        <?php
            //echo $type;
            //echo $otro_nombre;
        ?>

        <h3>{{$tipo}}</h3> <!--lo mismo que arriba-->

        @csrf 
        <label for = "correo">Correo</label><br>
        <input type="email" 
                name="correo"
                @if($tipo == 'alumno')
                    value="@alumnos.udg.mx"
                @else
                    value="@gmail.com"
                @endif
                ><br><br>
        
        <label for = "comentario">Comentario</label><br>
        <textarea 
            name="comentario" 
            id="comentario" 
            cols="30" 
            rows="10">
        </textarea><br><br>

        <!--<label for = "tipo">Tipo:</label><br>    
        <select name="tipo">
            <option value="alumno">Alumno</option>
            <option value="empleado">Empleado</option>
        </select> <br><br>-->


        <input type="submit" value="Enviar">
    </form>
</body>
</html>