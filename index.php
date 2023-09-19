<?php
    echo "Hola Mundo!";
        // Comentario de una sola linea
    /* Comentario 
    de varias lineas
    */
    echo "<br>";

    // Creo mi primera variable
    $variable = "Hola mundo"; // Operacion de ASIGNACION
    echo $variable; //Muestro el contenido de la variable
    echo"<br>";

    //mostrar la estructura de la variable
    var_dump($variable);
    echo"<br>";

    //Operaciones Aritmeticas
    echo "Operaciones Aritmeticas";
    echo "<br>";

    //defino dos variables enteras
    $numero1 = 12;
    $numero2 = 6;
    echo "número 1: " . $numero1;
    echo "<br>";
    echo "número 2: " . $numero2;
    echo "<br>";

    //SUMA
    echo "Suma: " . $numero1 + $numero2;
    echo "<br>";

    //RESTA
    echo "Resta: " . $numero1 - $numero2;
    echo "<br>";

    //MULTIPLICACION
    echo "Multiplicación: " . $numero1 * $numero2;
    echo "<br>";

    //DIVISION
    echo "División: " . $numero1 / $numero2;
    echo "<br>";

    //RESTO DIVISION    
    echo "Resto División: " . $numero1 % $numero2;
    echo "<br>";

    //Transformación de grados Celcius a Fahrenheit
    echo "Pasaje de °C a °F";
    echo "<br>";
        //fórmula para Celcius-Fahrenheit: (°C * 9/5) + 32
    //defino los grados Celcius
    $grados_celcius = 20;
    echo "Grados Celcius: ". $grados_celcius;
    echo "<br>";


    //calculo grados Fahrenheit
    //echo "grados Fahrenheit:  ";  //forma de agregar texto 1
    echo "Grados Fahrenheit:  " . ($grados_celcius * (9/5)) + 32;   //forma de agregar texto 2 (con el ".")
    echo "<br>";

    //Calculo del perímetro y área de un rectángulo
    echo "Perímetro y área de un rectángulo";
    echo "<br>";

    //Datos del rectángulo
    $baseRectangulo = 18; 
    $alturaRectangulo = 12;

    //Cálculo del área del rectángulo
    $areaRectangulo = $baseRectangulo * $alturaRectangulo;
    echo "Área: " . $areaRectangulo;
    echo "<br>";

    //Cálculo del perímetro del rectángulo
    $perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
    echo "Perímetro: " . $perimetroRectangulo;
    echo "<br>";


    //Calculo del perímetro y área de un círculo
    echo "Perímetro y área de un círculo";
    echo "<br>";

    //Datos del círculo
    $radioCirculo = 30;
    $pi = 3.1415;

    //Calculo el área del círculo
    $areaCirculo = $pi * ($radioCirculo ** 2);
    echo "Área: " . $areaCirculo;
    echo "<br>";

    //Calculo el perímetro del círculo
    $perimetroCirculo = 2 * $pi * $radioCirculo;
    echo "Perímetro: " . $perimetroCirculo;
    echo "<br>";

    
?>
