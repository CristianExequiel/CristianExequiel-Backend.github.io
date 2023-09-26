<?php
//Clase 4
//Ejercicio N°1
$n1 = -5;
    //utilizar parenteiss
if ($n1 > 0) {
    echo "El numero ingresado es un numero positivo" . "<br>";
}

//Ejercicio N°2
$n2 = 2;
   
if ($n2 > 1 && $n2 < 10) {
    echo "El numero ingresado es mayor que 1 y menor que 10" .  "<br>";
}

//Ejercicio N°3
$n3 = 9;

if ($n3 >= 10 || $n3 < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2" . "<br>";
} else {
    echo "El número ingresado no pudo ser validado" . "<br>";
}

//Ejercicio N°4
$numero1 = 8; 
$numero2 = 4;

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "La suma de los números es: " . $suma . "<br>";
    echo "La resta de los números es: " . $resta . "<br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division_entera = (int)($numero1 / $numero2);  //reveer
    $resto = $numero1 % $numero2;
    echo "La multiplicación de los números es: " . $multiplicacion . "<br>";
    echo "La división entera de los números es: " . $division_entera . "<br>";
    echo "El resto de la división es: " . $resto . "<br>";
} else {
    echo "Los números ingresados son iguales";
}


?>

