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

    echo "<br>";

    //funciones con Arrays
    $amigos = array("jose<br>","david<br>","maria<br>","juan","diego<br>","rtaul<br>","sapo<br>","martiniano<br>");

    $equipos = array("barcelona<br>","real<br>","inter<br>","velez<br>","city<br>","psg<br>","river<br>","fulham<br>");

    echo "<br>";

    $funcion = array_chunk($amigos,2);
    print_r($funcion);

    echo "<br>";echo "<br>";

    $funcion2 = array_slice($amigos,4);
    print_r($funcion2);

    echo "<br>";echo "<br>";

    $funcion3 = array_merge($amigos,$equipos);
    print_r($funcion3);

    echo "<br>";echo "<br>";

    $buscar = array_search("juan",$amigos);
    print_r($buscar);

    echo "<br>";echo "<br>";

    $revez = array_reverse($amigos);
    print_r($revez);


    // Matrices
    $matriz = array(
        array(1,2,3,4,5),
        array(6,7,8,9,10),
        array(11,12,13,14,15)
    );
    echo "<br>";echo "<br>";
    echo $matriz[2][4]; //fila-columna

    echo "<br>";echo "<br>";
    foreach ($matriz as $value) {
        print_r($value);
    }
    
    echo "<br>";echo "<br>";
    $length = count($matriz);
    echo $length;

    echo "<br>";echo "<br>";


    ?>
</body>
</html>