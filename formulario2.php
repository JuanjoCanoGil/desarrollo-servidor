<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <FORM method="post">  
            <label for="">Numero1</label><input type="number" name="numero1">
            <label for="">Numero2</label><input type="number" name="numero2">
            <input type="submit" value="Enviar">
        </FORM>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];

                if($numero1>$numero2){
                    echo "El numero ". $numero1. " es mayor";
                }else if($numero1<$numero2){
                    echo "El numero ". $numero2. " es mayor";
                }else{
                    echo "Son iguales";
                }
            }
        ?>
    </body>
</html>