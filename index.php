<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>

    </style>
</head>
<body>
    <p>mensaje desde html</p>

    <?php
    echo "mensaje usando echo <br>";

    $texto = "texto desde php";
    $numero = 12;
    $numero2 = 3.4;
    echo"Mensaje : $texto <br>";
    // comentario
    #otro comentario
    

    // Variable Global
    // $valor = 34;
    // function mostrar(){
    //     echo "valor de la variable $valor ";
    // }
    // mostrar();
    // echo "valor de la variable $valor <br> ";


    // Variable Local
    function mostrar2(){
        $valor2 = 342;
        echo "valor de la variable $valor2 ";
    }
    mostrar2();
    // echo "valor de la variable $valor2 <br> ";
    echo "<br>";
    //variable estatica
    function valor(){
        static $x = 1;
        echo $x."<br>";
        $x++;
    }
    valor();
    valor();
    valor();
    //

    var_dump($texto);
    echo "<br>";
    var_dump($numero);
    echo "<br>";
    var_dump($numero2);
    echo "<br>";
    $dias = array("lunes","martes","miercoles","jueves");
    var_dump($dias);

    // Funciones para trabajar con cadenas
    echo "<br>";
    $cadena = "mensaje";
    echo "Número de caracteres: " . strlen($cadena);
    echo "<br>";
    $cadena2 = "Esto es una cadena de texto";
    $num_palabras = str_word_count($cadena2);
    echo "El número de palabras es: " . $num_palabras;
    echo "<br>";
    echo "<br>";



    //imprime un solo resultado
    print "<h1>Mi primer codigo PHP</h1> ";
    echo "<br>";
    //imprime varios resultados
    echo "<p>Mi segundo codigo PHP,</p>  ", "<h3>mi tercer codigo PHP</h3>";
    ?>
</body>
</html>