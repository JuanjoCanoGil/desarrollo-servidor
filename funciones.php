
<?php
    function precioSinIva(int $precio, string $IVA) :int {
        $salida = 0;
        switch($IVA){
            case "general": $salida= $precio - ($precio*0.21); break;
            case "reducido": $salida= $precio -($precio*0.1);break;
            case "superreducido": $salida= $precio -($precio*0.04);break;
            default: $salida= $precio;
        }
        return $salida;
    }

    function precioConIva(int $precio, string $IVA) :int {
        $salida = 0;
        switch($IVA){
            case "general": $salida= $precio + ($precio*0.21); break;
            case "reducido": $salida= $precio +($precio*0.1);break;
            case "superreducido": $salida= $precio +($precio*0.04);break;
            default: $salida= $precio;
        }
        return $salida;
    }

    function representar_arrayUnidimensional($array){
        echo "[";
        $contador = 0;
        foreach($array as $arr => $val){
            if($contador == count($array)-1){
                echo $arr."-".$val ;
            }else{
                echo $arr."-".$val ."," ;
            }
            $contador++;
        }
        echo "]"; 
    }

    function Esprimo(int $numero) : bool{
        $primo = true;
        for($j = 2;$j<$numero;$j++){
            if($numero%$j == 0){
                $primo = false;
                return $primo;
            }
        }
        return $primo;
    }

    function dibujaPrimos(int $numero){     
        for ($i=1; $i <= $numero; $i++) { 
            if(Esprimo($i)){
                echo $i.", ";
            }
        }
    }

    function factorial(int $numero):int{
        $suma = 1;
        for ($i=1; $i <= $numero; $i++) { 
            $suma *= $i;
        }
        return $suma;
    }

    function irpf($salario_bruto){
        if($salario_bruto <= 1556.94){
            $inss = $salario_bruto * 0.08;
        }else if($salario_bruto <= 2594.92){
            $inss = $salario_bruto * 0.09;
        }else if($salario_bruto > 2594.93){
            if($salario_bruto <= 5189.82){
                $inss = $salario_bruto * 0.11;
            }else{
                $inss = 5189.82 * 0.11;
            }
        }

        $salario_inss = $salario_bruto - $inss;

        $ir = 0;

        if($salario_inss <= 1903.98)
        {
            $ir = 0;
        }else if($salario_inss <= 2826.65)
        {
            $ir = ($salario_inss * 0.075)-142.80;
        }else if($salario_inss <= 3751.05)
        {
            $ir = ($salario_inss * 0.15)-354.80;
        }else if($salario_inss <= 4664.68)
        {
            $ir = ($salario_inss * 0.225)-636.13;
        }else if($salario_inss > 4664.68)
        {
            $ir = ($salario_inss * 0.275)-869.36;
        }
        $salario_liquido = ($salario_bruto - $inss) - $ir;
        return $salario_inss;
    }

    function sqlTablaUsuarios($usuario,$nombre,$apellido,$fecha){
        $servidor = "localhost";
        $user = "root";
        $contraseña = "medac";
        $baseDeDatos = "usuarios";
        
        $conexion = new mysqli($servidor,$user,$contraseña,$baseDeDatos) or die("Error de conexion");
        $bdt = "INSERT INTO usuarios(usuario,nombre,apellido,fecha_nacimiento) values ('$usuario','$nombre','$apellido','$fecha');";
        $conexion->query($bdt);
    }

    function sqlTablaVideojuegos($id,$titulo,$pegi,$compania){
        $servidor = "localhost";
        $user = "root";
        $contraseña = "medac";
        $baseDeDatos = "db_videojuegos";

        $conexion = new mysqli($servidor,$user,$contraseña,$baseDeDatos) or die("Error de conexion");
        $bdt = "INSERT INTO videojuegos(id_videojuego,titulo,pegi,compania) values ('$id','$titulo','$pegi','$compania');";
        $conexion->query($bdt);
    }
?>