<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla onjeto</title>
        <style>
            table td{
                padding: 10px;
                border: 1px solid black;
                margin: 5px;
            }
            table th{
                border: 4px solid purple;
                color:white;
                background-color: #A70084;
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <?php 
            require "objeto1.php";
            $videojuego1 = new videojuego(1,"Spider-man",3,"Sony");
            echo $videojuego1->titulo;

            //Crear array 3 videojuegos
            $videojuegos = [];
            for($i = 0;$i<3;$i++){
                array_push($videojuegos, new videojuego($i,"juego ".$i+1 ,18,"Compania generica"));
            } 
            //Recorrer con foreach y mostrar en tabla
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Pegi</th>
                <th>Compañia</th>
            </tr>
            <?php 
                foreach( $videojuegos as $videojuego){
                    echo "<tr>";
                    echo "<td>". $videojuego->id_videojuego. "</td>";
                    echo "<td>".$videojuego->titulo. "</td>";
                    echo "<td>".$videojuego->pegi. "</td>";
                    echo "<td>".$videojuego->compania. "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>