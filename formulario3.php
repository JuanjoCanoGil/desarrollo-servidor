<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="">Numero1</label><input type="number" name="numero1">
            <label for="">Numero2</label><input type="number" name="numero2">
            <label for="">Numero3</label><input type="number" name="numero3">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                $numero3 = $_POST["numero3"];

                if($numero1>$numero2){
                    if($numero2>$numero3){
                        echo $numero1. " es el mayor ".$numero3. " es el menor";
                    }else{
                        echo $numero1. " es el mayor ".$numero2. " es el menor";
                    }
                }else if($numero1<$numero2){
                    if($numero2>$numero3){
                        if($numero1<$numero3){
                            echo $numero2. " es el mayor ".$numero1. " es el menor";
                        }else{
                            echo $numero2. " es el mayor ".$numero3. " es el menor";
                        }
                    }else{
                        echo $numero3. " es el mayor ".$numero1. " es el menor";
                    }
                }else{
                    if($numero2>$numero3){
                        echo $numero2. " es el mayor ".$numero3. " es el menor";
                    }else if($numero2<$numero3){
                        echo $numero3. " es el mayor ".$numero2. " es el menor";
                    }else{
                        echo "Son iguales";
                    }
                }


            }
        ?>
    </body>
</html>