<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">nombre</label><br>
        <input type="text" name="nombre" id=""> <br><br>
        <label for="">Apellido</label><br>
        <input type="text" name="apellido" id=""><br><br>
        <label for="">Edad</label><br>
        <input type="number" name="edad" id=""><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            echo "Buenos dias $nombre $apellido";
        }
    ?>
</body>
</html>