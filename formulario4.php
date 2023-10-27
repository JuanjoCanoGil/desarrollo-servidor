<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <label for="numero">Introduzca el dinero para calcular: </label><input type="number" name="numero" id="numero">
            <select name="iva" id = "iva">
                <option value="general">General</option>
                <option value="reducido">Reducido</option>
                <option value="superreducido">Superreducido</option>
                <option value="sin iva">Sin iva</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
            require "funciones.php";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo precioConIva($_POST["numero"],$_POST["iva"]);
            }
        ?>
</body>
</html>